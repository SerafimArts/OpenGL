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
 *
 * @version 4.1
 */
class GL41 extends GL40
{
    /**
     * Accepted by the $value parameter of GetBooleanv, GetIntegerv, GetInteger64v, GetFloatv, and GetDoublev.
     *
     * @since 4.1
     * @var int
     */
    public const
        GL_SHADER_COMPILER = 0x8DFA,
        GL_SHADER_BINARY_FORMATS = 0x8DF8,
        GL_NUM_SHADER_BINARY_FORMATS = 0x8DF9,
        GL_MAX_VERTEX_UNIFORM_VECTORS = 0x8DFB,
        GL_MAX_VARYING_VECTORS = 0x8DFC,
        GL_MAX_FRAGMENT_UNIFORM_VECTORS = 0x8DFD,
        GL_IMPLEMENTATION_COLOR_READ_TYPE = 0x8B9A,
        GL_IMPLEMENTATION_COLOR_READ_FORMAT = 0x8B9B;

    /**
     * Accepted by the $type parameter of VertexAttribPointer.
     *
     * @since 4.1
     * @var int
     */
    public const GL_FIXED = 0x140C;

    /**
     * Accepted by the $precisiontype parameter of GetShaderPrecisionFormat.
     *
     * @since 4.1
     * @var int
     */
    public const
        GL_LOW_FLOAT = 0x8DF0,
        GL_MEDIUM_FLOAT = 0x8DF1,
        GL_HIGH_FLOAT = 0x8DF2,
        GL_LOW_INT = 0x8DF3,
        GL_MEDIUM_INT = 0x8DF4,
        GL_HIGH_INT = 0x8DF5;

    /**
     * Accepted by the $format parameter of most commands taking sized internal formats.
     *
     * @since 4.1
     * @var int
     */
    public const GL_RGB565 = 0x8D62;

    /**
     * Accepted by the $pname parameter of ProgramParameteri and GetProgramiv.
     *
     * @since 4.1
     * @var int
     */
    public const GL_PROGRAM_BINARY_RETRIEVABLE_HINT = 0x8257;

    /**
     * Accepted by the $pname parameter of GetProgramiv.
     *
     * @since 4.1
     * @var int
     */
    public const GL_PROGRAM_BINARY_LENGTH = 0x8741;

    /**
     * Accepted by the $pname parameter of GetBooleanv, GetIntegerv, GetInteger64v, GetFloatv and GetDoublev.
     *
     * @since 4.1
     * @var int
     */
    public const
        GL_NUM_PROGRAM_BINARY_FORMATS = 0x87FE,
        GL_PROGRAM_BINARY_FORMATS = 0x87FF;

    /**
     * Accepted by $stages parameter to UseProgramStages.
     *
     * @since 4.1
     * @var int
     */
    public const
        GL_VERTEX_SHADER_BIT = 0x1,
        GL_FRAGMENT_SHADER_BIT = 0x2,
        GL_GEOMETRY_SHADER_BIT = 0x4,
        GL_TESS_CONTROL_SHADER_BIT = 0x8,
        GL_TESS_EVALUATION_SHADER_BIT = 0x10,
        GL_ALL_SHADER_BITS = 0xFFFF_FFFF;

    /**
     * Accepted by the $pname parameter of ProgramParameteri and GetProgramiv.
     *
     * @since 4.1
     * @var int
     */
    public const GL_PROGRAM_SEPARABLE = 0x8258;

    /**
     * Accepted by $type parameter to GetProgramPipelineiv.
     *
     * @since 4.1
     * @var int
     */
    public const GL_ACTIVE_PROGRAM = 0x8259;

    /**
     * Accepted by the $pname parameter of GetBooleanv, GetIntegerv, GetInteger64v, GetFloatv, and GetDoublev.
     *
     * @since 4.1
     * @var int
     */
    public const GL_PROGRAM_PIPELINE_BINDING = 0x825A;

    /**
     * Accepted by the $pname parameter of GetBooleanv, GetIntegerv, GetFloatv, GetDoublev and GetInteger64v.
     *
     * @since 4.1
     * @var int
     */
    public const
        GL_MAX_VIEWPORTS = 0x825B,
        GL_VIEWPORT_SUBPIXEL_BITS = 0x825C,
        GL_VIEWPORT_BOUNDS_RANGE = 0x825D,
        GL_LAYER_PROVOKING_VERTEX = 0x825E,
        GL_VIEWPORT_INDEX_PROVOKING_VERTEX = 0x825F;

    /**
     * Returned in the $data parameter from a Get query with a $pname of LAYER_PROVOKING_VERTEX or
     * VIEWPORT_INDEX_PROVOKING_VERTEX.
     *
     * @since 4.1
     * @var int
     */
    public const GL_UNDEFINED_VERTEX = 0x8260;

    /**
     * {@see GL41::activeShaderProgram} sets the linked program named by $program to be the active program for the
     * program pipeline object $pipeline. The active program in the active program pipeline object is the target of
     * calls to {@see GL41::uniform} when no program has been made current through a call to
     * {@see GL41::useProgram}.
     *
     * @see http://docs.gl/gl4/glActiveShaderProgram
     * @since 4.1
     * @param int $pipeline
     * @param int $program
     * @return void
     */
    public function activeShaderProgram(int $pipeline, int $program): void
    {
        $__proc = $this->proc('glActiveShaderProgram', 'void (*)(GLuint pipeline, GLuint program)');
        $__proc($pipeline, $program);
    }

    /**
     * {@see GL41::bindProgramPipeline} binds a program pipeline object to the current context. $pipeline must be a
     * name previously returned from a call to {@see GL41::genProgramPipelines}. If no program pipeline exists with
     * name $pipeline then a new pipeline object is created with that name and initialized to the default state
     * vector.
     *
     * When a program pipeline object is bound using {@see GL41::bindProgramPipeline}, any previous binding is
     * broken and is replaced with a binding to the specified pipeline object. If $pipeline is zero, the previous
     * binding is broken and is not replaced, leaving no pipeline object bound. If no current program object has been
     * established by {@see GL41::useProgram}, the program objects used for each stage and for uniform updates are
     * taken from the bound program pipeline object, if any. If there is a current program object established by
     * {@see GL41::useProgram}, the bound program pipeline object has no effect on rendering or uniform updates.
     * When a bound program pipeline object is used for rendering, individual shader executables are taken from its
     * program objects.
     *
     * @see http://docs.gl/gl4/glBindProgramPipeline
     * @since 4.1
     * @param int $pipeline
     * @return void
     */
    public function bindProgramPipeline(int $pipeline): void
    {
        $__proc = $this->proc('glBindProgramPipeline', 'void (*)(GLuint pipeline)');
        $__proc($pipeline);
    }

    /**
     * {@see GL41::clearDepth} specifies the depth value used by {@see GL41::clear} to clear the depth buffer.
     * Values specified by {@see GL41::clearDepth} are clamped to the range    0 1  .
     *
     * @see http://docs.gl/gl2/glClearDepth
     * @see http://docs.gl/gl4/glClearDepth
     * @since 4.1
     * @param float $d
     * @return void
     */
    public function clearDepthf(float $d): void
    {
        $__proc = $this->proc('glClearDepthf', 'void (*)(GLfloat d)');
        $__proc($d);
    }

    /**
     * {@see GL41::createShaderProgram} creates a program object containing compiled and linked shaders for a
     * single stage specified by $type. $strings refers to an array of $count strings from which to create the shader
     * executables.
     *
     * {@see GL41::createShaderProgram} is equivalent (assuming no errors are generated) to:
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
     * The program object created by {@see GL41::createShaderProgram} has its {@see GL41::GL_PROGRAM_SEPARABLE}
     * status set to {@see GL41::GL_TRUE}.
     *
     * @see http://docs.gl/gl4/glCreateShaderProgram
     * @since 4.1
     * @param int $type
     * @param int $count
     * @param array|string[] $strings
     * @return int
     */
    public function createShaderProgramv(int $type, int $count, array $strings): int
    {
        $stringsCType = \FFI::new('char*[' . \count($strings) . ']');
        foreach ($strings as $i => $v) {
            $stringsCType[$i] = Util::charPtr($v);
        }
        $__proc = $this->proc('glCreateShaderProgramv',
            'GLuint (*)(GLenum type, GLsizei count, const GLchar *const *strings)');

        return $__proc($type, $count, $stringsCType);
    }

    /**
     * {@see GL41::deleteProgramPipelines} deletes the $n program pipeline objects whose names are stored in the
     * array $pipelines. Unused names in $pipelines are ignored, as is the name zero. After a program pipeline object
     * is deleted, its name is again unused and it has no contents. If program pipeline object that is currently
     * bound is deleted, the binding for that object reverts to zero and no program pipeline object becomes current.
     *
     * @see http://docs.gl/gl4/glDeleteProgramPipelines
     * @since 4.1
     * @param int $n
     * @param CData|null $pipelines
     * @return void
     */
    public function deleteProgramPipelines(int $n, ?CData $pipelines): void
    {
        $__proc = $this->proc('glDeleteProgramPipelines', 'void (*)(GLsizei n, const GLuint *pipelines)');
        $__proc($n, $pipelines);
    }

    /**
     * After clipping and division by w, depth coordinates range from   -1  to 1, corresponding to the near and far
     * clipping planes. Each viewport has an independent depth range specified as a linear mapping of the normalized
     * depth coordinates in this range to window depth coordinates. Regardless of the actual depth buffer
     * implementation, window coordinate depth values are treated as though they range from 0 through 1 (like color
     * components). {@see GL41::depthRangeArray} specifies a linear mapping of the normalized depth coordinates in
     * this range to window depth coordinates for each viewport in the range [$first, $first + $count). Thus, the
     * values accepted by {@see GL41::depthRangeArray} are both clamped to this range before they are accepted.
     *
     * The $first parameter specifies the index of the first viewport whose depth range to modify and must be less
     * than the value of {@see GL41::GL_MAX_VIEWPORTS}. $count specifies the number of viewports whose depth range to
     * modify. $first + $count must be less than or equal to the value of {@see GL41::GL_MAX_VIEWPORTS}. $v specifies
     * the address of an array of pairs of double precision floating point values representing the near and far
     * values of the depth range for each viewport, in that order.
     *
     * The setting of (0,1) maps the near plane to 0 and the far plane to 1. With this mapping, the depth buffer
     * range is fully utilized.
     *
     * @see http://docs.gl/gl4/glDepthRangeArray
     * @since 4.1
     * @param int $first
     * @param int $count
     * @param CData|null $v
     * @return void
     */
    public function depthRangeArrayv(int $first, int $count, ?CData $v): void
    {
        $__proc = $this->proc('glDepthRangeArrayv', 'void (*)(GLuint first, GLsizei count, const GLdouble *v)');
        $__proc($first, $count, $v);
    }

    /**
     * After clipping and division by w, depth coordinates range from   -1  to 1, corresponding to the near and far
     * clipping planes. Each viewport has an independent depth range specified as a linear mapping of the normalized
     * depth coordinates in this range to window depth coordinates. Regardless of the actual depth buffer
     * implementation, window coordinate depth values are treated as though they range from 0 through 1 (like color
     * components). {@see GL41::depthRangeIndexed} specifies a linear mapping of the normalized depth coordinates
     * in this range to window depth coordinates for a specified viewport. Thus, the values accepted by
     * {@see GL41::depthRangeIndexed} are both clamped to this range before they are accepted.
     *
     * The $index parameter specifies the index of first viewport whose depth range to modify and must be less than
     * the value of {@see GL41::GL_MAX_VIEWPORTS}. $nearVal and $farVal specify near and far values of the depth
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
    public function depthRangeIndexed(int $index, float $n, float $f): void
    {
        $__proc = $this->proc('glDepthRangeIndexed', 'void (*)(GLuint index, GLdouble n, GLdouble f)');
        $__proc($index, $n, $f);
    }

    /**
     * After clipping and division by w, depth coordinates range from   -1  to 1, corresponding to the near and far
     * clipping planes. {@see GL41::depthRange} specifies a linear mapping of the normalized depth coordinates in
     * this range to window depth coordinates. Regardless of the actual depth buffer implementation, window
     * coordinate depth values are treated as though they range from 0 through 1 (like color components). Thus, the
     * values accepted by {@see GL41::depthRange} are both clamped to this range before they are accepted.
     *
     * The setting of (0,1) maps the near plane to 0 and the far plane to 1. With this mapping, the depth buffer
     * range is fully utilized.
     *
     * @see http://docs.gl/gl2/glDepthRange
     * @see http://docs.gl/gl4/glDepthRange
     * @since 4.1
     * @param float $n
     * @param float $f
     * @return void
     */
    public function depthRangef(float $n, float $f): void
    {
        $__proc = $this->proc('glDepthRangef', 'void (*)(GLfloat n, GLfloat f)');
        $__proc($n, $f);
    }

    /**
     * {@see GL41::genProgramPipelines} returns $n previously unused program pipeline object names in $pipelines.
     * These names are marked as used, for the purposes of {@see GL41::genProgramPipelines} only, but they acquire
     * program pipeline state only when they are first bound.
     *
     * @see http://docs.gl/gl4/glGenProgramPipelines
     * @since 4.1
     * @param int $n
     * @param int|null $pipelines
     * @return void
     */
    public function genProgramPipelines(int $n, ?int &$pipelines): void
    {
        $pipelinesCType = $this->info->ffi->new('GLuint', false);
        try {
            $__proc = $this->proc('glGenProgramPipelines', 'void (*)(GLsizei n, GLuint *pipelines)');
            $__proc($n, \FFI::addr($pipelinesCType));
        } finally {
            $pipelines = $pipelinesCType->cdata;
            \FFI::free($pipelinesCType);
        }
    }

    /**
     * {@see GL41::getQueryiv} returns in $params a selected parameter of the query object target specified by
     * $target.
     *
     * $pname names a specific query object target parameter. When $pname is {@see GL41::GL_CURRENT_QUERY}, the name
     * of the currently active query for $target, or zero if no query is active, will be placed in $params. If $pname
     * is {@see GL41::GL_QUERY_COUNTER_BITS}, the implementation-dependent number of bits used to hold the result of
     * queries for $target is returned in $params.
     *
     * @see http://docs.gl/gl2/glGetPointerv
     * @see http://docs.gl/gl2/glGetQueryiv
     * @see http://docs.gl/gl4/glGetPointerv
     * @see http://docs.gl/gl4/glGetQueryiv
     * @since 4.1
     * @param int $target
     * @param int $index
     * @param float|null $data
     * @return void
     */
    public function getDoublei_v(int $target, int $index, ?float &$data): void
    {
        $dataCType = $this->info->ffi->new('GLdouble', false);
        try {
            $__proc = $this->proc('glGetDoublei_v', 'void (*)(GLenum target, GLuint index, GLdouble *data)');
            $__proc($target, $index, \FFI::addr($dataCType));
        } finally {
            $data = $dataCType->cdata;
            \FFI::free($dataCType);
        }
    }

    /**
     * {@see GL41::getQueryiv} returns in $params a selected parameter of the query object target specified by
     * $target.
     *
     * $pname names a specific query object target parameter. When $pname is {@see GL41::GL_CURRENT_QUERY}, the name
     * of the currently active query for $target, or zero if no query is active, will be placed in $params. If $pname
     * is {@see GL41::GL_QUERY_COUNTER_BITS}, the implementation-dependent number of bits used to hold the result of
     * queries for $target is returned in $params.
     *
     * @see http://docs.gl/gl2/glGetPointerv
     * @see http://docs.gl/gl2/glGetQueryiv
     * @see http://docs.gl/gl4/glGetPointerv
     * @see http://docs.gl/gl4/glGetQueryiv
     * @since 4.1
     * @param int $target
     * @param int $index
     * @param float|null $data
     * @return void
     */
    public function getFloati_v(int $target, int $index, ?float &$data): void
    {
        $dataCType = $this->info->ffi->new('GLfloat', false);
        try {
            $__proc = $this->proc('glGetFloati_v', 'void (*)(GLenum target, GLuint index, GLfloat *data)');
            $__proc($target, $index, \FFI::addr($dataCType));
        } finally {
            $data = $dataCType->cdata;
            \FFI::free($dataCType);
        }
    }

    /**
     * {@see GL41::getProgramBinary} returns a binary representation of the compiled and linked executable for
     * $program into the array of bytes whose address is specified in $binary. The maximum number of bytes that may
     * be written into $binary is specified by $bufSize. If the program binary is greater in size than $bufSize
     * bytes, then an error is generated, otherwise the actual number of bytes written into $binary is returned in
     * the variable whose address is given by $length. If $length is {@see GL46::NULL}, then no length is returned.
     *
     * The format of the program binary written into $binary is returned in the variable whose address is given by
     * $binaryFormat, and may be implementation dependent. The binary produced by the GL may subsequently be returned
     * to the GL by calling {@see GL41::programBinary}, with $binaryFormat and $length set to the values returned
     * by {@see GL41::getProgramBinary}, and passing the returned binary data in the $binary parameter.
     *
     * @see http://docs.gl/gl4/glGetProgramBinary
     * @since 4.1
     * @param int $program
     * @param int $bufSize
     * @param int|null $length
     * @param int|null $binaryFormat
     * @param CData|null $binary
     * @return void
     */
    public function getProgramBinary(
        int $program,
        int $bufSize,
        ?int &$length,
        ?int &$binaryFormat,
        ?CData $binary
    ): void {
        $lengthCType = $this->info->ffi->new('GLsizei', false);
        $binaryFormatCType = $this->info->ffi->new('GLenum', false);

        try {
            $__proc = $this->proc('glGetProgramBinary',
                'void (*)(GLuint program, GLsizei bufSize, GLsizei *length, GLenum *binaryFormat, void *binary)');
            $__proc($program, $bufSize, \FFI::addr($lengthCType), \FFI::addr($binaryFormatCType), $binary);
        } finally {
            $length = $lengthCType->cdata;
            \FFI::free($lengthCType);
            $binaryFormat = $binaryFormatCType->cdata;
            \FFI::free($binaryFormatCType);
        }
    }

    /**
     * {@see GL41::getProgramPipelineInfoLog} retrieves the info log for the program pipeline object $pipeline. The
     * info log, including its null terminator, is written into the array of characters whose address is given by
     * $infoLog. The maximum number of characters that may be written into $infoLog is given by $bufSize, and the
     * actual number of characters written into $infoLog is returned in the integer whose address is given by
     * $length. If $length is {@see GL46::NULL}, no length is returned.
     *
     * The actual length of the info log for the program pipeline may be determined by calling
     * {@see GL41::getProgramPipeline} with $pname set to {@see GL41::GL_INFO_LOG_LENGTH}.
     *
     * @see http://docs.gl/gl4/glGetProgramPipelineInfoLog
     * @since 4.1
     * @param int $pipeline
     * @param int $bufSize
     * @param int|null $length
     * @param string|null $infoLog
     * @return void
     */
    public function getProgramPipelineInfoLog(int $pipeline, int $bufSize, ?int &$length, ?string &$infoLog): void
    {
        $lengthCType = $this->info->ffi->new('GLsizei', false);
        $infoLogCType = \FFI::addr($this->info->ffi->new('GLchar[' . $bufSize . ']', false)[0]);
        try {
            $__proc = $this->proc('glGetProgramPipelineInfoLog',
                'void (*)(GLuint pipeline, GLsizei bufSize, GLsizei *length, GLchar *infoLog)');
            $__proc($pipeline, $bufSize, \FFI::addr($lengthCType), $infoLogCType);
        } finally {
            $length = $lengthCType->cdata;
            \FFI::free($lengthCType);
            $infoLog = \FFI::string($infoLogCType);
            \FFI::free($infoLogCType);
        }
    }

    /**
     * {@see GL41::getProgramPipelineiv} retrieves the value of a property of the program pipeline object
     * $pipeline. $pname specifies the name of the parameter whose value to retrieve. The value of the parameter is
     * written to the variable whose address is given by $params.
     *
     * If $pname is {@see GL41::GL_ACTIVE_PROGRAM}, the name of the active program object of the program pipeline
     * object is returned in $params.
     *
     * If $pname is {@see GL41::GL_VERTEX_SHADER}, the name of the current program object for the vertex shader type
     * of the program pipeline object is returned in $params.
     *
     * If $pname is {@see GL41::GL_TESS_CONTROL_SHADER}, the name of the current program object for the tessellation
     * control shader type of the program pipeline object is returned in $params.
     *
     * If $pname is {@see GL41::GL_TESS_EVALUATION_SHADER}, the name of the current program object for the
     * tessellation evaluation shader type of the program pipeline object is returned in $params.
     *
     * If $pname is {@see GL41::GL_GEOMETRY_SHADER}, the name of the current program object for the geometry shader
     * type of the program pipeline object is returned in $params.
     *
     * If $pname is {@see GL41::GL_FRAGMENT_SHADER}, the name of the current program object for the fragment shader
     * type of the program pipeline object is returned in $params.
     *
     * If $pname is {@see GL41::GL_INFO_LOG_LENGTH}, the length of the info log, including the null terminator, is
     * returned in $params. If there is no info log, zero is returned.
     *
     * @see http://docs.gl/gl4/glGetProgramPipeline
     * @since 4.1
     * @param int $pipeline
     * @param int $pname
     * @param int|null $params
     * @return void
     */
    public function getProgramPipelineiv(int $pipeline, int $pname, ?int &$params): void
    {
        $paramsCType = $this->info->ffi->new('GLint', false);
        try {
            $__proc = $this->proc('glGetProgramPipelineiv',
                'void (*)(GLuint pipeline, GLenum pname, GLint *params)');
            $__proc($pipeline, $pname, \FFI::addr($paramsCType));
        } finally {
            $params = $paramsCType->cdata;
            \FFI::free($paramsCType);
        }
    }

    /**
     * {@see GL41::getShaderPrecisionFormat} retrieves the numeric range and precision for the implementation's
     * representation of quantities in different numeric formats in specified shader type. $shaderType specifies the
     * type of shader for which the numeric precision and range is to be retrieved and must be one of
     * {@see GL41::GL_VERTEX_SHADER} or {@see GL41::GL_FRAGMENT_SHADER}. $precisionType specifies the numeric format
     * to query and must be one of {@see GL41::GL_LOW_FLOAT}, {@see GL41::GL_MEDIUM_FLOAT}
     * {@see GL41::GL_HIGH_FLOAT}, {@see GL41::GL_LOW_INT}, {@see GL41::GL_MEDIUM_INT}, or {@see GL41::GL_HIGH_INT}.
     *
     * $range points to an array of two integers into which the format's numeric range will be returned. If min and
     * max are the smallest values representable in the format, then the values returned are defined to be: $range[0]
     * = floor(log2(|min|)) and $range[1] = floor(log2(|max|)).
     *
     * $precision specifies the address of an integer into which will be written the log2 value of the number of bits
     * of precision of the format. If the smallest representable value greater than 1 is 1 + eps, then the integer
     * addressed by $precision will contain floor(-log2(eps)).
     *
     * @see http://docs.gl/gl4/glGetShaderPrecisionFormat
     * @since 4.1
     * @param int $shadertype
     * @param int $precisiontype
     * @param int|null $range
     * @param int|null $precision
     * @return void
     */
    public function getShaderPrecisionFormat(int $shadertype, int $precisiontype, ?int &$range, ?int &$precision): void
    {
        $rangeCType = $this->info->ffi->new('GLint', false);
        $precisionCType = $this->info->ffi->new('GLint', false);
        try {
            $__proc = $this->proc('glGetShaderPrecisionFormat',
                'void (*)(GLenum shadertype, GLenum precisiontype, GLint *range, GLint *precision)');
            $__proc($shadertype, $precisiontype, \FFI::addr($rangeCType), \FFI::addr($precisionCType));
        } finally {
            $range = $rangeCType->cdata;
            \FFI::free($rangeCType);
            $precision = $precisionCType->cdata;
            \FFI::free($precisionCType);
        }
    }

    /**
     * {@see GL41::getVertexAttrib} returns in $params the value of a generic vertex attribute parameter. The
     * generic vertex attribute to be queried is specified by $index, and the parameter to be queried is specified by
     * $pname.
     *
     * The accepted parameter names are as follows:
     *
     *  - {@see GL41::GL_VERTEX_ATTRIB_ARRAY_BUFFER_BINDING}: $params returns a
     *    single value, the name of the buffer object currently bound to the
     *    binding point
     *    corresponding to generic vertex attribute array $index. If no buffer
     *    object is bound, 0 is returned. The
     *    initial value is 0.
     *
     *  - {@see GL41::GL_VERTEX_ATTRIB_ARRAY_ENABLED}: $params returns a single
     *    value that is non-zero (true) if the vertex attribute array for $index
     *    is enabled
     *    and 0 (false) if it is disabled. The initial value is {@see
     *    GL41::GL_FALSE}.
     *
     *  - {@see GL41::GL_VERTEX_ATTRIB_ARRAY_SIZE}: $params returns a single
     *    value, the size of the vertex attribute array for $index. The size is
     *    the number
     *    of values for each element of the vertex attribute array, and it will
     *    be 1, 2, 3, or 4. The initial value is
     *    4.
     *
     *  - {@see GL41::GL_VERTEX_ATTRIB_ARRAY_STRIDE}: $params returns a single
     *    value, the array stride for (number of bytes between successive
     *    elements in) the
     *    vertex attribute array for $index. A value of 0 indicates that the
     *    array elements are stored sequentially in
     *    memory. The initial value is 0.
     *
     *  - {@see GL41::GL_VERTEX_ATTRIB_ARRAY_TYPE}: $params returns a single
     *    value, a symbolic constant indicating the array type for the vertex
     *    attribute
     *    array for $index. Possible values are {@see GL41::GL_BYTE}, {@see
     *    GL41::GL_UNSIGNED_BYTE},
     *    {@see GL41::GL_SHORT}, {@see GL41::GL_UNSIGNED_SHORT}, {@see
     *    GL41::GL_INT}, {@see GL41::GL_UNSIGNED_INT},
     *    {@see GL41::GL_FLOAT}, and {@see GL41::GL_DOUBLE}. The initial value
     *    is {@see GL41::GL_FLOAT}.
     *
     *  - {@see GL41::GL_VERTEX_ATTRIB_ARRAY_NORMALIZED}: $params returns a
     *    single value that is non-zero (true) if fixed-point data types for the
     *    vertex attribute
     *    array indicated by $index are normalized when they are converted to
     *    floating point, and 0 (false) otherwise.
     *    The initial value is {@see GL41::GL_FALSE}.
     *
     *  - {@see GL41::GL_VERTEX_ATTRIB_ARRAY_INTEGER}: $params returns a single
     *    value that is non-zero (true) if fixed-point data types for the vertex
     *    attribute
     *    array indicated by $index have integer data types, and 0 (false)
     *    otherwise. The initial value is 0
     *    ({@see GL41::GL_FALSE}).
     *
     *  - {@see GL41::GL_VERTEX_ATTRIB_ARRAY_LONG}: $param returns a single
     *    value that is non-zero (true) if a vertex attribute is stored as an
     *    unconverted
     *    double, and 0 (false) otherwise. The initial value is 0 ({@see
     *    GL41::GL_FALSE}).
     *
     *  - {@see GL41::GL_VERTEX_ATTRIB_ARRAY_DIVISOR}: $params returns a single
     *    value that is the frequency divisor used for instanced rendering. See
     *    {@see GL41::vertexAttribDivisor}. The initial value is 0.
     *
     *  - {@see GL41::GL_VERTEX_ATTRIB_BINDING}: $params returns a single value,
     *    the vertex buffer binding of the vertex attribute array $index.
     *
     *  - {@see GL41::GL_VERTEX_ATTRIB_RELATIVE_OFFSET}: $params returns a
     *    single value that is the byte offset of the first element relative to
     *    the start of the
     *    vertex buffer binding specified attribute fetches from. The initial
     *    value is 0.
     *
     *  - {@see GL41::GL_CURRENT_VERTEX_ATTRIB}: $params returns four values
     *    that represent the current value for the generic vertex attribute
     *    specified by
     *    index. Generic vertex attribute 0 is unique in that it has no current
     *    state, so an error will be generated if
     *    $index is 0. The initial value for all other generic vertex attributes
     *    is (0,0,0,1).
     *    {@see GL41::getVertexAttribdv} and {@see GL41::getVertexAttribfv}
     *    return the current attribute values as
     *    four single-precision floating-point values; {@see
     *    GL41::getVertexAttribiv} reads them as floating-point
     *    values and converts them to four integer values; {@see
     *    GL41::getVertexAttribIiv} and
     *    {@see GL41::getVertexAttribIuiv} read and return them as signed or
     *    unsigned integer values, respectively;
     *    {@see GL41::getVertexAttribLdv} reads and returns them as four
     *    double-precision floating-point values.
     *
     * All of the parameters except {@see GL41::GL_CURRENT_VERTEX_ATTRIB} represent state stored in the currently
     * bound vertex array object.
     *
     * @see http://docs.gl/gl2/glGetVertexAttrib
     * @see http://docs.gl/gl4/glGetVertexAttrib
     * @since 4.1
     * @param int $index
     * @param int $pname
     * @param float|null $params
     * @return void
     */
    public function getVertexAttribLdv(int $index, int $pname, ?float &$params): void
    {
        $paramsCType = $this->info->ffi->new('GLdouble', false);
        try {
            $__proc = $this->proc('glGetVertexAttribLdv',
                'void (*)(GLuint index, GLenum pname, GLdouble *params)');
            $__proc($index, $pname, \FFI::addr($paramsCType));
        } finally {
            $params = $paramsCType->cdata;
            \FFI::free($paramsCType);
        }
    }

    /**
     * {@see GL41::isProgramPipeline} returns {@see GL41::GL_TRUE} if $pipeline is currently the name of a program
     * pipeline object. If $pipeline is zero, or if {@see GL46::pipeline} is not the name of a program pipeline
     * object, or if an error occurs, {@see GL41::isProgramPipeline} returns {@see GL41::GL_FALSE}. If $pipeline is
     * a name returned by {@see GL41::genProgramPipelines}, but that has not yet been bound through a call to
     * {@see GL41::bindProgramPipeline}, then the name is not a program pipeline object and
     * {@see GL41::isProgramPipeline} returns {@see GL41::GL_FALSE}.
     *
     * @see http://docs.gl/gl4/glIsProgramPipeline
     * @since 4.1
     * @param int $pipeline
     * @return bool
     */
    public function isProgramPipeline(int $pipeline): bool
    {
        $__proc = $this->proc('glIsProgramPipeline', 'GLboolean (*)(GLuint pipeline)');

        return $__proc($pipeline) !== 0;
    }

    /**
     * {@see GL41::programBinary} loads a program object with a program binary previously returned from
     * {@see GL41::getProgramBinary}. $binaryFormat and $binary must be those returned by a previous call to
     * {@see GL41::getProgramBinary}, and $length must be the length returned by {@see GL41::getProgramBinary},
     * or by {@see GL41::getProgram} when called with $pname set to {@see GL41::GL_PROGRAM_BINARY_LENGTH}. If these
     * conditions are not met, loading the program binary will fail and $program's {@see GL41::GL_LINK_STATUS} will
     * be set to {@see GL41::GL_FALSE}.
     *
     * A program object's program binary is replaced by calls to {@see GL41::linkProgram} or
     * {@see GL41::programBinary}. When linking success or failure is concerned, {@see GL41::programBinary} can
     * be considered to perform an implicit linking operation. {@see GL41::linkProgram} and
     * {@see GL41::programBinary} both set the program object's {@see GL41::GL_LINK_STATUS} to {@see GL41::GL_TRUE}
     * or {@see GL41::GL_FALSE}.
     *
     * A successful call to {@see GL41::programBinary} will reset all uniform variables to their initial values.
     * The initial value is either the value of the variable's initializer as specified in the original shader
     * source, or zero if no initializer was present. Additionally, all vertex shader input and fragment shader
     * output assignments that were in effect when the program was linked before saving are restored with
     * {@see GL41::programBinary} is called.
     *
     * @see http://docs.gl/gl4/glProgramBinary
     * @since 4.1
     * @param int $program
     * @param int $binaryFormat
     * @param CData|null $binary
     * @param int $length
     * @return void
     */
    public function programBinary(int $program, int $binaryFormat, ?CData $binary, int $length): void
    {
        $__proc = $this->proc('glProgramBinary',
            'void (*)(GLuint program, GLenum binaryFormat, const void *binary, GLsizei length)');
        $__proc($program, $binaryFormat, $binary, $length);
    }

    /**
     * {@see GL41::programParameter} specifies a new value for the parameter nameed by $pname for the program
     * object $program.
     *
     * If $pname is {@see GL41::GL_PROGRAM_BINARY_RETRIEVABLE_HINT}, $value should be {@see GL41::GL_FALSE} or
     * {@see GL41::GL_TRUE} to indicate to the implementation the intention of the application to retrieve the
     * program's binary representation with {@see GL41::getProgramBinary}. The implementation may use this
     * information to store information that may be useful for a future query of the program's binary. It is
     * recommended to set {@see GL41::GL_PROGRAM_BINARY_RETRIEVABLE_HINT} for the program to {@see GL41::GL_TRUE}
     * before calling {@see GL41::linkProgram}, and using the program at run-time if the binary is to be retrieved
     * later.
     *
     * If $pname is {@see GL41::GL_PROGRAM_SEPARABLE}, $value must be {@see GL41::GL_TRUE} or {@see GL41::GL_FALSE}
     * and indicates whether $program can be bound to individual pipeline stages via {@see GL41::useProgramStages}.
     * A program's {@see GL41::GL_PROGRAM_SEPARABLE} parameter must be set to {@see GL41::GL_TRUE} before
     * {@see GL41::linkProgram} is called in order for it to be usable with a program pipeline object. The initial
     * state of {@see GL41::GL_PROGRAM_SEPARABLE} is {@see GL41::GL_FALSE}.
     *
     * @see http://docs.gl/gl4/glProgramParameter
     * @since 4.1
     * @param int $program
     * @param int $pname
     * @param int $value
     * @return void
     */
    public function programParameteri(int $program, int $pname, int $value): void
    {
        $__proc = $this->proc('glProgramParameteri', 'void (*)(GLuint program, GLenum pname, GLint value)');
        $__proc($program, $pname, $value);
    }

    /**
     * {@see GL41::programUniform} modifies the value of a uniform variable or a uniform variable array. The
     * location of the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL41::getUniformLocation}. {@see GL41::programUniform} operates on the program object specified by
     * $program.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform
     * variable specified by $location using the values passed as arguments. The number specified in the command
     * should match the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1}
     * for `float`, `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The
     * suffix {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer
     * values are being passed, and this type should also match the data type of the specified uniform variable. The
     * {@see GL46::i} variants of this function should be used to provide values for uniform variables defined as
     * `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be
     * used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays
     * of these. The {@see GL46::f} variants should be used to provide values for uniform variables of type `float`,
     * `vec2`, `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f}
     * variants may be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or
     * arrays of these. The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be
     * set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL41::programUniform} until
     * the next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable
     * or a uniform variable array. These commands pass a count and a pointer to the values to be loaded into a
     * uniform variable or a uniform variable array. A count of 1 should be used if modifying the value of a single
     * uniform variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When
     * loading n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable
     * array, values for all array elements beyond the end of the array will be ignored. The number specified in the
     * name of the command indicates the number of components for each element in $value, and it should match the
     * number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * {@see GL41::programUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL41::programUniform3f} or {@see GL41::programUniform3fv} can be used to load
     * a uniform variable array of type vec3). The number of elements of the uniform variable array to be modified is
     * specified by $count
     *
     * The commands {@see GL41::programUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix
     * or an array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3
     * × 3 matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values).
     * Non-square matrix dimensionality is explicit, with the first number representing the number of columns and the
     * second number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2
     * columns and 4 rows (i.e., 8 values). If $transpose is {@see GL41::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL41::GL_TRUE}, each matrix is assumed to be supplied
     * in row major order. The $count argument indicates the number of matrices to be passed. A count of 1 should be
     * used if modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of
     * matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param float $v0
     * @return void
     */
    public function programUniform1d(int $program, int $location, float $v0): void
    {
        $__proc = $this->proc('glProgramUniform1d', 'void (*)(GLuint program, GLint location, GLdouble v0)');
        $__proc($program, $location, $v0);
    }

    /**
     * {@see GL41::programUniform} modifies the value of a uniform variable or a uniform variable array. The
     * location of the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL41::getUniformLocation}. {@see GL41::programUniform} operates on the program object specified by
     * $program.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform
     * variable specified by $location using the values passed as arguments. The number specified in the command
     * should match the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1}
     * for `float`, `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The
     * suffix {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer
     * values are being passed, and this type should also match the data type of the specified uniform variable. The
     * {@see GL46::i} variants of this function should be used to provide values for uniform variables defined as
     * `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be
     * used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays
     * of these. The {@see GL46::f} variants should be used to provide values for uniform variables of type `float`,
     * `vec2`, `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f}
     * variants may be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or
     * arrays of these. The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be
     * set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL41::programUniform} until
     * the next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable
     * or a uniform variable array. These commands pass a count and a pointer to the values to be loaded into a
     * uniform variable or a uniform variable array. A count of 1 should be used if modifying the value of a single
     * uniform variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When
     * loading n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable
     * array, values for all array elements beyond the end of the array will be ignored. The number specified in the
     * name of the command indicates the number of components for each element in $value, and it should match the
     * number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * {@see GL41::programUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL41::programUniform3f} or {@see GL41::programUniform3fv} can be used to load
     * a uniform variable array of type vec3). The number of elements of the uniform variable array to be modified is
     * specified by $count
     *
     * The commands {@see GL41::programUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix
     * or an array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3
     * × 3 matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values).
     * Non-square matrix dimensionality is explicit, with the first number representing the number of columns and the
     * second number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2
     * columns and 4 rows (i.e., 8 values). If $transpose is {@see GL41::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL41::GL_TRUE}, each matrix is assumed to be supplied
     * in row major order. The $count argument indicates the number of matrices to be passed. A count of 1 should be
     * used if modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of
     * matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param CData|null $value
     * @return void
     */
    public function programUniform1dv(int $program, int $location, int $count, ?CData $value): void
    {
        $__proc = $this->proc('glProgramUniform1dv',
            'void (*)(GLuint program, GLint location, GLsizei count, const GLdouble *value)');
        $__proc($program, $location, $count, $value);
    }

    /**
     * {@see GL41::programUniform} modifies the value of a uniform variable or a uniform variable array. The
     * location of the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL41::getUniformLocation}. {@see GL41::programUniform} operates on the program object specified by
     * $program.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform
     * variable specified by $location using the values passed as arguments. The number specified in the command
     * should match the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1}
     * for `float`, `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The
     * suffix {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer
     * values are being passed, and this type should also match the data type of the specified uniform variable. The
     * {@see GL46::i} variants of this function should be used to provide values for uniform variables defined as
     * `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be
     * used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays
     * of these. The {@see GL46::f} variants should be used to provide values for uniform variables of type `float`,
     * `vec2`, `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f}
     * variants may be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or
     * arrays of these. The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be
     * set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL41::programUniform} until
     * the next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable
     * or a uniform variable array. These commands pass a count and a pointer to the values to be loaded into a
     * uniform variable or a uniform variable array. A count of 1 should be used if modifying the value of a single
     * uniform variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When
     * loading n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable
     * array, values for all array elements beyond the end of the array will be ignored. The number specified in the
     * name of the command indicates the number of components for each element in $value, and it should match the
     * number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * {@see GL41::programUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL41::programUniform3f} or {@see GL41::programUniform3fv} can be used to load
     * a uniform variable array of type vec3). The number of elements of the uniform variable array to be modified is
     * specified by $count
     *
     * The commands {@see GL41::programUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix
     * or an array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3
     * × 3 matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values).
     * Non-square matrix dimensionality is explicit, with the first number representing the number of columns and the
     * second number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2
     * columns and 4 rows (i.e., 8 values). If $transpose is {@see GL41::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL41::GL_TRUE}, each matrix is assumed to be supplied
     * in row major order. The $count argument indicates the number of matrices to be passed. A count of 1 should be
     * used if modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of
     * matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param float $v0
     * @return void
     */
    public function programUniform1f(int $program, int $location, float $v0): void
    {
        $__proc = $this->proc('glProgramUniform1f', 'void (*)(GLuint program, GLint location, GLfloat v0)');
        $__proc($program, $location, $v0);
    }

    /**
     * {@see GL41::programUniform} modifies the value of a uniform variable or a uniform variable array. The
     * location of the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL41::getUniformLocation}. {@see GL41::programUniform} operates on the program object specified by
     * $program.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform
     * variable specified by $location using the values passed as arguments. The number specified in the command
     * should match the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1}
     * for `float`, `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The
     * suffix {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer
     * values are being passed, and this type should also match the data type of the specified uniform variable. The
     * {@see GL46::i} variants of this function should be used to provide values for uniform variables defined as
     * `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be
     * used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays
     * of these. The {@see GL46::f} variants should be used to provide values for uniform variables of type `float`,
     * `vec2`, `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f}
     * variants may be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or
     * arrays of these. The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be
     * set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL41::programUniform} until
     * the next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable
     * or a uniform variable array. These commands pass a count and a pointer to the values to be loaded into a
     * uniform variable or a uniform variable array. A count of 1 should be used if modifying the value of a single
     * uniform variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When
     * loading n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable
     * array, values for all array elements beyond the end of the array will be ignored. The number specified in the
     * name of the command indicates the number of components for each element in $value, and it should match the
     * number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * {@see GL41::programUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL41::programUniform3f} or {@see GL41::programUniform3fv} can be used to load
     * a uniform variable array of type vec3). The number of elements of the uniform variable array to be modified is
     * specified by $count
     *
     * The commands {@see GL41::programUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix
     * or an array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3
     * × 3 matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values).
     * Non-square matrix dimensionality is explicit, with the first number representing the number of columns and the
     * second number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2
     * columns and 4 rows (i.e., 8 values). If $transpose is {@see GL41::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL41::GL_TRUE}, each matrix is assumed to be supplied
     * in row major order. The $count argument indicates the number of matrices to be passed. A count of 1 should be
     * used if modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of
     * matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param CData|null $value
     * @return void
     */
    public function programUniform1fv(int $program, int $location, int $count, ?CData $value): void
    {
        $__proc = $this->proc('glProgramUniform1fv',
            'void (*)(GLuint program, GLint location, GLsizei count, const GLfloat *value)');
        $__proc($program, $location, $count, $value);
    }

    /**
     * {@see GL41::programUniform} modifies the value of a uniform variable or a uniform variable array. The
     * location of the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL41::getUniformLocation}. {@see GL41::programUniform} operates on the program object specified by
     * $program.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform
     * variable specified by $location using the values passed as arguments. The number specified in the command
     * should match the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1}
     * for `float`, `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The
     * suffix {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer
     * values are being passed, and this type should also match the data type of the specified uniform variable. The
     * {@see GL46::i} variants of this function should be used to provide values for uniform variables defined as
     * `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be
     * used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays
     * of these. The {@see GL46::f} variants should be used to provide values for uniform variables of type `float`,
     * `vec2`, `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f}
     * variants may be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or
     * arrays of these. The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be
     * set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL41::programUniform} until
     * the next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable
     * or a uniform variable array. These commands pass a count and a pointer to the values to be loaded into a
     * uniform variable or a uniform variable array. A count of 1 should be used if modifying the value of a single
     * uniform variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When
     * loading n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable
     * array, values for all array elements beyond the end of the array will be ignored. The number specified in the
     * name of the command indicates the number of components for each element in $value, and it should match the
     * number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * {@see GL41::programUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL41::programUniform3f} or {@see GL41::programUniform3fv} can be used to load
     * a uniform variable array of type vec3). The number of elements of the uniform variable array to be modified is
     * specified by $count
     *
     * The commands {@see GL41::programUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix
     * or an array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3
     * × 3 matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values).
     * Non-square matrix dimensionality is explicit, with the first number representing the number of columns and the
     * second number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2
     * columns and 4 rows (i.e., 8 values). If $transpose is {@see GL41::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL41::GL_TRUE}, each matrix is assumed to be supplied
     * in row major order. The $count argument indicates the number of matrices to be passed. A count of 1 should be
     * used if modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of
     * matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $v0
     * @return void
     */
    public function programUniform1i(int $program, int $location, int $v0): void
    {
        $__proc = $this->proc('glProgramUniform1i', 'void (*)(GLuint program, GLint location, GLint v0)');
        $__proc($program, $location, $v0);
    }

    /**
     * {@see GL41::programUniform} modifies the value of a uniform variable or a uniform variable array. The
     * location of the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL41::getUniformLocation}. {@see GL41::programUniform} operates on the program object specified by
     * $program.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform
     * variable specified by $location using the values passed as arguments. The number specified in the command
     * should match the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1}
     * for `float`, `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The
     * suffix {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer
     * values are being passed, and this type should also match the data type of the specified uniform variable. The
     * {@see GL46::i} variants of this function should be used to provide values for uniform variables defined as
     * `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be
     * used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays
     * of these. The {@see GL46::f} variants should be used to provide values for uniform variables of type `float`,
     * `vec2`, `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f}
     * variants may be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or
     * arrays of these. The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be
     * set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL41::programUniform} until
     * the next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable
     * or a uniform variable array. These commands pass a count and a pointer to the values to be loaded into a
     * uniform variable or a uniform variable array. A count of 1 should be used if modifying the value of a single
     * uniform variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When
     * loading n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable
     * array, values for all array elements beyond the end of the array will be ignored. The number specified in the
     * name of the command indicates the number of components for each element in $value, and it should match the
     * number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * {@see GL41::programUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL41::programUniform3f} or {@see GL41::programUniform3fv} can be used to load
     * a uniform variable array of type vec3). The number of elements of the uniform variable array to be modified is
     * specified by $count
     *
     * The commands {@see GL41::programUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix
     * or an array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3
     * × 3 matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values).
     * Non-square matrix dimensionality is explicit, with the first number representing the number of columns and the
     * second number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2
     * columns and 4 rows (i.e., 8 values). If $transpose is {@see GL41::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL41::GL_TRUE}, each matrix is assumed to be supplied
     * in row major order. The $count argument indicates the number of matrices to be passed. A count of 1 should be
     * used if modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of
     * matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param CData|null $value
     * @return void
     */
    public function programUniform1iv(int $program, int $location, int $count, ?CData $value): void
    {
        $__proc = $this->proc('glProgramUniform1iv',
            'void (*)(GLuint program, GLint location, GLsizei count, const GLint *value)');
        $__proc($program, $location, $count, $value);
    }

    /**
     * {@see GL41::programUniform} modifies the value of a uniform variable or a uniform variable array. The
     * location of the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL41::getUniformLocation}. {@see GL41::programUniform} operates on the program object specified by
     * $program.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform
     * variable specified by $location using the values passed as arguments. The number specified in the command
     * should match the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1}
     * for `float`, `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The
     * suffix {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer
     * values are being passed, and this type should also match the data type of the specified uniform variable. The
     * {@see GL46::i} variants of this function should be used to provide values for uniform variables defined as
     * `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be
     * used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays
     * of these. The {@see GL46::f} variants should be used to provide values for uniform variables of type `float`,
     * `vec2`, `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f}
     * variants may be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or
     * arrays of these. The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be
     * set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL41::programUniform} until
     * the next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable
     * or a uniform variable array. These commands pass a count and a pointer to the values to be loaded into a
     * uniform variable or a uniform variable array. A count of 1 should be used if modifying the value of a single
     * uniform variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When
     * loading n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable
     * array, values for all array elements beyond the end of the array will be ignored. The number specified in the
     * name of the command indicates the number of components for each element in $value, and it should match the
     * number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * {@see GL41::programUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL41::programUniform3f} or {@see GL41::programUniform3fv} can be used to load
     * a uniform variable array of type vec3). The number of elements of the uniform variable array to be modified is
     * specified by $count
     *
     * The commands {@see GL41::programUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix
     * or an array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3
     * × 3 matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values).
     * Non-square matrix dimensionality is explicit, with the first number representing the number of columns and the
     * second number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2
     * columns and 4 rows (i.e., 8 values). If $transpose is {@see GL41::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL41::GL_TRUE}, each matrix is assumed to be supplied
     * in row major order. The $count argument indicates the number of matrices to be passed. A count of 1 should be
     * used if modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of
     * matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $v0
     * @return void
     */
    public function programUniform1ui(int $program, int $location, int $v0): void
    {
        $__proc = $this->proc('glProgramUniform1ui', 'void (*)(GLuint program, GLint location, GLuint v0)');
        $__proc($program, $location, $v0);
    }

    /**
     * {@see GL41::programUniform} modifies the value of a uniform variable or a uniform variable array. The
     * location of the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL41::getUniformLocation}. {@see GL41::programUniform} operates on the program object specified by
     * $program.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform
     * variable specified by $location using the values passed as arguments. The number specified in the command
     * should match the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1}
     * for `float`, `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The
     * suffix {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer
     * values are being passed, and this type should also match the data type of the specified uniform variable. The
     * {@see GL46::i} variants of this function should be used to provide values for uniform variables defined as
     * `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be
     * used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays
     * of these. The {@see GL46::f} variants should be used to provide values for uniform variables of type `float`,
     * `vec2`, `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f}
     * variants may be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or
     * arrays of these. The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be
     * set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL41::programUniform} until
     * the next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable
     * or a uniform variable array. These commands pass a count and a pointer to the values to be loaded into a
     * uniform variable or a uniform variable array. A count of 1 should be used if modifying the value of a single
     * uniform variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When
     * loading n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable
     * array, values for all array elements beyond the end of the array will be ignored. The number specified in the
     * name of the command indicates the number of components for each element in $value, and it should match the
     * number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * {@see GL41::programUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL41::programUniform3f} or {@see GL41::programUniform3fv} can be used to load
     * a uniform variable array of type vec3). The number of elements of the uniform variable array to be modified is
     * specified by $count
     *
     * The commands {@see GL41::programUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix
     * or an array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3
     * × 3 matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values).
     * Non-square matrix dimensionality is explicit, with the first number representing the number of columns and the
     * second number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2
     * columns and 4 rows (i.e., 8 values). If $transpose is {@see GL41::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL41::GL_TRUE}, each matrix is assumed to be supplied
     * in row major order. The $count argument indicates the number of matrices to be passed. A count of 1 should be
     * used if modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of
     * matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param CData|null $value
     * @return void
     */
    public function programUniform1uiv(int $program, int $location, int $count, ?CData $value): void
    {
        $__proc = $this->proc('glProgramUniform1uiv',
            'void (*)(GLuint program, GLint location, GLsizei count, const GLuint *value)');
        $__proc($program, $location, $count, $value);
    }

    /**
     * {@see GL41::programUniform} modifies the value of a uniform variable or a uniform variable array. The
     * location of the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL41::getUniformLocation}. {@see GL41::programUniform} operates on the program object specified by
     * $program.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform
     * variable specified by $location using the values passed as arguments. The number specified in the command
     * should match the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1}
     * for `float`, `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The
     * suffix {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer
     * values are being passed, and this type should also match the data type of the specified uniform variable. The
     * {@see GL46::i} variants of this function should be used to provide values for uniform variables defined as
     * `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be
     * used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays
     * of these. The {@see GL46::f} variants should be used to provide values for uniform variables of type `float`,
     * `vec2`, `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f}
     * variants may be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or
     * arrays of these. The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be
     * set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL41::programUniform} until
     * the next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable
     * or a uniform variable array. These commands pass a count and a pointer to the values to be loaded into a
     * uniform variable or a uniform variable array. A count of 1 should be used if modifying the value of a single
     * uniform variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When
     * loading n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable
     * array, values for all array elements beyond the end of the array will be ignored. The number specified in the
     * name of the command indicates the number of components for each element in $value, and it should match the
     * number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * {@see GL41::programUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL41::programUniform3f} or {@see GL41::programUniform3fv} can be used to load
     * a uniform variable array of type vec3). The number of elements of the uniform variable array to be modified is
     * specified by $count
     *
     * The commands {@see GL41::programUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix
     * or an array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3
     * × 3 matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values).
     * Non-square matrix dimensionality is explicit, with the first number representing the number of columns and the
     * second number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2
     * columns and 4 rows (i.e., 8 values). If $transpose is {@see GL41::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL41::GL_TRUE}, each matrix is assumed to be supplied
     * in row major order. The $count argument indicates the number of matrices to be passed. A count of 1 should be
     * used if modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of
     * matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param float $v0
     * @param float $v1
     * @return void
     */
    public function programUniform2d(int $program, int $location, float $v0, float $v1): void
    {
        $__proc = $this->proc('glProgramUniform2d',
            'void (*)(GLuint program, GLint location, GLdouble v0, GLdouble v1)');
        $__proc($program, $location, $v0, $v1);
    }

    /**
     * {@see GL41::programUniform} modifies the value of a uniform variable or a uniform variable array. The
     * location of the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL41::getUniformLocation}. {@see GL41::programUniform} operates on the program object specified by
     * $program.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform
     * variable specified by $location using the values passed as arguments. The number specified in the command
     * should match the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1}
     * for `float`, `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The
     * suffix {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer
     * values are being passed, and this type should also match the data type of the specified uniform variable. The
     * {@see GL46::i} variants of this function should be used to provide values for uniform variables defined as
     * `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be
     * used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays
     * of these. The {@see GL46::f} variants should be used to provide values for uniform variables of type `float`,
     * `vec2`, `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f}
     * variants may be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or
     * arrays of these. The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be
     * set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL41::programUniform} until
     * the next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable
     * or a uniform variable array. These commands pass a count and a pointer to the values to be loaded into a
     * uniform variable or a uniform variable array. A count of 1 should be used if modifying the value of a single
     * uniform variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When
     * loading n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable
     * array, values for all array elements beyond the end of the array will be ignored. The number specified in the
     * name of the command indicates the number of components for each element in $value, and it should match the
     * number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * {@see GL41::programUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL41::programUniform3f} or {@see GL41::programUniform3fv} can be used to load
     * a uniform variable array of type vec3). The number of elements of the uniform variable array to be modified is
     * specified by $count
     *
     * The commands {@see GL41::programUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix
     * or an array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3
     * × 3 matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values).
     * Non-square matrix dimensionality is explicit, with the first number representing the number of columns and the
     * second number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2
     * columns and 4 rows (i.e., 8 values). If $transpose is {@see GL41::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL41::GL_TRUE}, each matrix is assumed to be supplied
     * in row major order. The $count argument indicates the number of matrices to be passed. A count of 1 should be
     * used if modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of
     * matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param CData|null $value
     * @return void
     */
    public function programUniform2dv(int $program, int $location, int $count, ?CData $value): void
    {
        $__proc = $this->proc('glProgramUniform2dv',
            'void (*)(GLuint program, GLint location, GLsizei count, const GLdouble *value)');
        $__proc($program, $location, $count, $value);
    }

    /**
     * {@see GL41::programUniform} modifies the value of a uniform variable or a uniform variable array. The
     * location of the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL41::getUniformLocation}. {@see GL41::programUniform} operates on the program object specified by
     * $program.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform
     * variable specified by $location using the values passed as arguments. The number specified in the command
     * should match the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1}
     * for `float`, `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The
     * suffix {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer
     * values are being passed, and this type should also match the data type of the specified uniform variable. The
     * {@see GL46::i} variants of this function should be used to provide values for uniform variables defined as
     * `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be
     * used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays
     * of these. The {@see GL46::f} variants should be used to provide values for uniform variables of type `float`,
     * `vec2`, `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f}
     * variants may be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or
     * arrays of these. The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be
     * set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL41::programUniform} until
     * the next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable
     * or a uniform variable array. These commands pass a count and a pointer to the values to be loaded into a
     * uniform variable or a uniform variable array. A count of 1 should be used if modifying the value of a single
     * uniform variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When
     * loading n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable
     * array, values for all array elements beyond the end of the array will be ignored. The number specified in the
     * name of the command indicates the number of components for each element in $value, and it should match the
     * number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * {@see GL41::programUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL41::programUniform3f} or {@see GL41::programUniform3fv} can be used to load
     * a uniform variable array of type vec3). The number of elements of the uniform variable array to be modified is
     * specified by $count
     *
     * The commands {@see GL41::programUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix
     * or an array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3
     * × 3 matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values).
     * Non-square matrix dimensionality is explicit, with the first number representing the number of columns and the
     * second number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2
     * columns and 4 rows (i.e., 8 values). If $transpose is {@see GL41::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL41::GL_TRUE}, each matrix is assumed to be supplied
     * in row major order. The $count argument indicates the number of matrices to be passed. A count of 1 should be
     * used if modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of
     * matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param float $v0
     * @param float $v1
     * @return void
     */
    public function programUniform2f(int $program, int $location, float $v0, float $v1): void
    {
        $__proc = $this->proc('glProgramUniform2f',
            'void (*)(GLuint program, GLint location, GLfloat v0, GLfloat v1)');
        $__proc($program, $location, $v0, $v1);
    }

    /**
     * {@see GL41::programUniform} modifies the value of a uniform variable or a uniform variable array. The
     * location of the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL41::getUniformLocation}. {@see GL41::programUniform} operates on the program object specified by
     * $program.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform
     * variable specified by $location using the values passed as arguments. The number specified in the command
     * should match the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1}
     * for `float`, `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The
     * suffix {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer
     * values are being passed, and this type should also match the data type of the specified uniform variable. The
     * {@see GL46::i} variants of this function should be used to provide values for uniform variables defined as
     * `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be
     * used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays
     * of these. The {@see GL46::f} variants should be used to provide values for uniform variables of type `float`,
     * `vec2`, `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f}
     * variants may be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or
     * arrays of these. The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be
     * set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL41::programUniform} until
     * the next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable
     * or a uniform variable array. These commands pass a count and a pointer to the values to be loaded into a
     * uniform variable or a uniform variable array. A count of 1 should be used if modifying the value of a single
     * uniform variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When
     * loading n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable
     * array, values for all array elements beyond the end of the array will be ignored. The number specified in the
     * name of the command indicates the number of components for each element in $value, and it should match the
     * number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * {@see GL41::programUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL41::programUniform3f} or {@see GL41::programUniform3fv} can be used to load
     * a uniform variable array of type vec3). The number of elements of the uniform variable array to be modified is
     * specified by $count
     *
     * The commands {@see GL41::programUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix
     * or an array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3
     * × 3 matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values).
     * Non-square matrix dimensionality is explicit, with the first number representing the number of columns and the
     * second number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2
     * columns and 4 rows (i.e., 8 values). If $transpose is {@see GL41::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL41::GL_TRUE}, each matrix is assumed to be supplied
     * in row major order. The $count argument indicates the number of matrices to be passed. A count of 1 should be
     * used if modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of
     * matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param CData|null $value
     * @return void
     */
    public function programUniform2fv(int $program, int $location, int $count, ?CData $value): void
    {
        $__proc = $this->proc('glProgramUniform2fv',
            'void (*)(GLuint program, GLint location, GLsizei count, const GLfloat *value)');
        $__proc($program, $location, $count, $value);
    }

    /**
     * {@see GL41::programUniform} modifies the value of a uniform variable or a uniform variable array. The
     * location of the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL41::getUniformLocation}. {@see GL41::programUniform} operates on the program object specified by
     * $program.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform
     * variable specified by $location using the values passed as arguments. The number specified in the command
     * should match the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1}
     * for `float`, `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The
     * suffix {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer
     * values are being passed, and this type should also match the data type of the specified uniform variable. The
     * {@see GL46::i} variants of this function should be used to provide values for uniform variables defined as
     * `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be
     * used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays
     * of these. The {@see GL46::f} variants should be used to provide values for uniform variables of type `float`,
     * `vec2`, `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f}
     * variants may be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or
     * arrays of these. The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be
     * set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL41::programUniform} until
     * the next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable
     * or a uniform variable array. These commands pass a count and a pointer to the values to be loaded into a
     * uniform variable or a uniform variable array. A count of 1 should be used if modifying the value of a single
     * uniform variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When
     * loading n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable
     * array, values for all array elements beyond the end of the array will be ignored. The number specified in the
     * name of the command indicates the number of components for each element in $value, and it should match the
     * number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * {@see GL41::programUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL41::programUniform3f} or {@see GL41::programUniform3fv} can be used to load
     * a uniform variable array of type vec3). The number of elements of the uniform variable array to be modified is
     * specified by $count
     *
     * The commands {@see GL41::programUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix
     * or an array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3
     * × 3 matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values).
     * Non-square matrix dimensionality is explicit, with the first number representing the number of columns and the
     * second number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2
     * columns and 4 rows (i.e., 8 values). If $transpose is {@see GL41::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL41::GL_TRUE}, each matrix is assumed to be supplied
     * in row major order. The $count argument indicates the number of matrices to be passed. A count of 1 should be
     * used if modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of
     * matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $v0
     * @param int $v1
     * @return void
     */
    public function programUniform2i(int $program, int $location, int $v0, int $v1): void
    {
        $__proc = $this->proc('glProgramUniform2i',
            'void (*)(GLuint program, GLint location, GLint v0, GLint v1)');
        $__proc($program, $location, $v0, $v1);
    }

    /**
     * {@see GL41::programUniform} modifies the value of a uniform variable or a uniform variable array. The
     * location of the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL41::getUniformLocation}. {@see GL41::programUniform} operates on the program object specified by
     * $program.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform
     * variable specified by $location using the values passed as arguments. The number specified in the command
     * should match the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1}
     * for `float`, `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The
     * suffix {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer
     * values are being passed, and this type should also match the data type of the specified uniform variable. The
     * {@see GL46::i} variants of this function should be used to provide values for uniform variables defined as
     * `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be
     * used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays
     * of these. The {@see GL46::f} variants should be used to provide values for uniform variables of type `float`,
     * `vec2`, `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f}
     * variants may be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or
     * arrays of these. The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be
     * set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL41::programUniform} until
     * the next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable
     * or a uniform variable array. These commands pass a count and a pointer to the values to be loaded into a
     * uniform variable or a uniform variable array. A count of 1 should be used if modifying the value of a single
     * uniform variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When
     * loading n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable
     * array, values for all array elements beyond the end of the array will be ignored. The number specified in the
     * name of the command indicates the number of components for each element in $value, and it should match the
     * number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * {@see GL41::programUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL41::programUniform3f} or {@see GL41::programUniform3fv} can be used to load
     * a uniform variable array of type vec3). The number of elements of the uniform variable array to be modified is
     * specified by $count
     *
     * The commands {@see GL41::programUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix
     * or an array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3
     * × 3 matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values).
     * Non-square matrix dimensionality is explicit, with the first number representing the number of columns and the
     * second number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2
     * columns and 4 rows (i.e., 8 values). If $transpose is {@see GL41::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL41::GL_TRUE}, each matrix is assumed to be supplied
     * in row major order. The $count argument indicates the number of matrices to be passed. A count of 1 should be
     * used if modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of
     * matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param CData|null $value
     * @return void
     */
    public function programUniform2iv(int $program, int $location, int $count, ?CData $value): void
    {
        $__proc = $this->proc('glProgramUniform2iv',
            'void (*)(GLuint program, GLint location, GLsizei count, const GLint *value)');
        $__proc($program, $location, $count, $value);
    }

    /**
     * {@see GL41::programUniform} modifies the value of a uniform variable or a uniform variable array. The
     * location of the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL41::getUniformLocation}. {@see GL41::programUniform} operates on the program object specified by
     * $program.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform
     * variable specified by $location using the values passed as arguments. The number specified in the command
     * should match the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1}
     * for `float`, `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The
     * suffix {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer
     * values are being passed, and this type should also match the data type of the specified uniform variable. The
     * {@see GL46::i} variants of this function should be used to provide values for uniform variables defined as
     * `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be
     * used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays
     * of these. The {@see GL46::f} variants should be used to provide values for uniform variables of type `float`,
     * `vec2`, `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f}
     * variants may be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or
     * arrays of these. The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be
     * set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL41::programUniform} until
     * the next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable
     * or a uniform variable array. These commands pass a count and a pointer to the values to be loaded into a
     * uniform variable or a uniform variable array. A count of 1 should be used if modifying the value of a single
     * uniform variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When
     * loading n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable
     * array, values for all array elements beyond the end of the array will be ignored. The number specified in the
     * name of the command indicates the number of components for each element in $value, and it should match the
     * number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * {@see GL41::programUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL41::programUniform3f} or {@see GL41::programUniform3fv} can be used to load
     * a uniform variable array of type vec3). The number of elements of the uniform variable array to be modified is
     * specified by $count
     *
     * The commands {@see GL41::programUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix
     * or an array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3
     * × 3 matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values).
     * Non-square matrix dimensionality is explicit, with the first number representing the number of columns and the
     * second number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2
     * columns and 4 rows (i.e., 8 values). If $transpose is {@see GL41::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL41::GL_TRUE}, each matrix is assumed to be supplied
     * in row major order. The $count argument indicates the number of matrices to be passed. A count of 1 should be
     * used if modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of
     * matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $v0
     * @param int $v1
     * @return void
     */
    public function programUniform2ui(int $program, int $location, int $v0, int $v1): void
    {
        $__proc = $this->proc('glProgramUniform2ui',
            'void (*)(GLuint program, GLint location, GLuint v0, GLuint v1)');
        $__proc($program, $location, $v0, $v1);
    }

    /**
     * {@see GL41::programUniform} modifies the value of a uniform variable or a uniform variable array. The
     * location of the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL41::getUniformLocation}. {@see GL41::programUniform} operates on the program object specified by
     * $program.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform
     * variable specified by $location using the values passed as arguments. The number specified in the command
     * should match the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1}
     * for `float`, `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The
     * suffix {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer
     * values are being passed, and this type should also match the data type of the specified uniform variable. The
     * {@see GL46::i} variants of this function should be used to provide values for uniform variables defined as
     * `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be
     * used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays
     * of these. The {@see GL46::f} variants should be used to provide values for uniform variables of type `float`,
     * `vec2`, `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f}
     * variants may be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or
     * arrays of these. The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be
     * set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL41::programUniform} until
     * the next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable
     * or a uniform variable array. These commands pass a count and a pointer to the values to be loaded into a
     * uniform variable or a uniform variable array. A count of 1 should be used if modifying the value of a single
     * uniform variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When
     * loading n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable
     * array, values for all array elements beyond the end of the array will be ignored. The number specified in the
     * name of the command indicates the number of components for each element in $value, and it should match the
     * number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * {@see GL41::programUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL41::programUniform3f} or {@see GL41::programUniform3fv} can be used to load
     * a uniform variable array of type vec3). The number of elements of the uniform variable array to be modified is
     * specified by $count
     *
     * The commands {@see GL41::programUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix
     * or an array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3
     * × 3 matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values).
     * Non-square matrix dimensionality is explicit, with the first number representing the number of columns and the
     * second number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2
     * columns and 4 rows (i.e., 8 values). If $transpose is {@see GL41::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL41::GL_TRUE}, each matrix is assumed to be supplied
     * in row major order. The $count argument indicates the number of matrices to be passed. A count of 1 should be
     * used if modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of
     * matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param CData|null $value
     * @return void
     */
    public function programUniform2uiv(int $program, int $location, int $count, ?CData $value): void
    {
        $__proc = $this->proc('glProgramUniform2uiv',
            'void (*)(GLuint program, GLint location, GLsizei count, const GLuint *value)');
        $__proc($program, $location, $count, $value);
    }

    /**
     * {@see GL41::programUniform} modifies the value of a uniform variable or a uniform variable array. The
     * location of the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL41::getUniformLocation}. {@see GL41::programUniform} operates on the program object specified by
     * $program.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform
     * variable specified by $location using the values passed as arguments. The number specified in the command
     * should match the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1}
     * for `float`, `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The
     * suffix {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer
     * values are being passed, and this type should also match the data type of the specified uniform variable. The
     * {@see GL46::i} variants of this function should be used to provide values for uniform variables defined as
     * `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be
     * used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays
     * of these. The {@see GL46::f} variants should be used to provide values for uniform variables of type `float`,
     * `vec2`, `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f}
     * variants may be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or
     * arrays of these. The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be
     * set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL41::programUniform} until
     * the next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable
     * or a uniform variable array. These commands pass a count and a pointer to the values to be loaded into a
     * uniform variable or a uniform variable array. A count of 1 should be used if modifying the value of a single
     * uniform variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When
     * loading n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable
     * array, values for all array elements beyond the end of the array will be ignored. The number specified in the
     * name of the command indicates the number of components for each element in $value, and it should match the
     * number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * {@see GL41::programUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL41::programUniform3f} or {@see GL41::programUniform3fv} can be used to load
     * a uniform variable array of type vec3). The number of elements of the uniform variable array to be modified is
     * specified by $count
     *
     * The commands {@see GL41::programUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix
     * or an array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3
     * × 3 matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values).
     * Non-square matrix dimensionality is explicit, with the first number representing the number of columns and the
     * second number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2
     * columns and 4 rows (i.e., 8 values). If $transpose is {@see GL41::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL41::GL_TRUE}, each matrix is assumed to be supplied
     * in row major order. The $count argument indicates the number of matrices to be passed. A count of 1 should be
     * used if modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of
     * matrices.
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
    public function programUniform3d(int $program, int $location, float $v0, float $v1, float $v2): void
    {
        $__proc = $this->proc('glProgramUniform3d',
            'void (*)(GLuint program, GLint location, GLdouble v0, GLdouble v1, GLdouble v2)');
        $__proc($program, $location, $v0, $v1, $v2);
    }

    /**
     * {@see GL41::programUniform} modifies the value of a uniform variable or a uniform variable array. The
     * location of the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL41::getUniformLocation}. {@see GL41::programUniform} operates on the program object specified by
     * $program.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform
     * variable specified by $location using the values passed as arguments. The number specified in the command
     * should match the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1}
     * for `float`, `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The
     * suffix {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer
     * values are being passed, and this type should also match the data type of the specified uniform variable. The
     * {@see GL46::i} variants of this function should be used to provide values for uniform variables defined as
     * `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be
     * used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays
     * of these. The {@see GL46::f} variants should be used to provide values for uniform variables of type `float`,
     * `vec2`, `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f}
     * variants may be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or
     * arrays of these. The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be
     * set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL41::programUniform} until
     * the next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable
     * or a uniform variable array. These commands pass a count and a pointer to the values to be loaded into a
     * uniform variable or a uniform variable array. A count of 1 should be used if modifying the value of a single
     * uniform variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When
     * loading n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable
     * array, values for all array elements beyond the end of the array will be ignored. The number specified in the
     * name of the command indicates the number of components for each element in $value, and it should match the
     * number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * {@see GL41::programUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL41::programUniform3f} or {@see GL41::programUniform3fv} can be used to load
     * a uniform variable array of type vec3). The number of elements of the uniform variable array to be modified is
     * specified by $count
     *
     * The commands {@see GL41::programUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix
     * or an array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3
     * × 3 matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values).
     * Non-square matrix dimensionality is explicit, with the first number representing the number of columns and the
     * second number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2
     * columns and 4 rows (i.e., 8 values). If $transpose is {@see GL41::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL41::GL_TRUE}, each matrix is assumed to be supplied
     * in row major order. The $count argument indicates the number of matrices to be passed. A count of 1 should be
     * used if modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of
     * matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param CData|null $value
     * @return void
     */
    public function programUniform3dv(int $program, int $location, int $count, ?CData $value): void
    {
        $__proc = $this->proc('glProgramUniform3dv',
            'void (*)(GLuint program, GLint location, GLsizei count, const GLdouble *value)');
        $__proc($program, $location, $count, $value);
    }

    /**
     * {@see GL41::programUniform} modifies the value of a uniform variable or a uniform variable array. The
     * location of the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL41::getUniformLocation}. {@see GL41::programUniform} operates on the program object specified by
     * $program.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform
     * variable specified by $location using the values passed as arguments. The number specified in the command
     * should match the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1}
     * for `float`, `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The
     * suffix {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer
     * values are being passed, and this type should also match the data type of the specified uniform variable. The
     * {@see GL46::i} variants of this function should be used to provide values for uniform variables defined as
     * `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be
     * used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays
     * of these. The {@see GL46::f} variants should be used to provide values for uniform variables of type `float`,
     * `vec2`, `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f}
     * variants may be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or
     * arrays of these. The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be
     * set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL41::programUniform} until
     * the next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable
     * or a uniform variable array. These commands pass a count and a pointer to the values to be loaded into a
     * uniform variable or a uniform variable array. A count of 1 should be used if modifying the value of a single
     * uniform variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When
     * loading n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable
     * array, values for all array elements beyond the end of the array will be ignored. The number specified in the
     * name of the command indicates the number of components for each element in $value, and it should match the
     * number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * {@see GL41::programUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL41::programUniform3f} or {@see GL41::programUniform3fv} can be used to load
     * a uniform variable array of type vec3). The number of elements of the uniform variable array to be modified is
     * specified by $count
     *
     * The commands {@see GL41::programUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix
     * or an array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3
     * × 3 matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values).
     * Non-square matrix dimensionality is explicit, with the first number representing the number of columns and the
     * second number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2
     * columns and 4 rows (i.e., 8 values). If $transpose is {@see GL41::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL41::GL_TRUE}, each matrix is assumed to be supplied
     * in row major order. The $count argument indicates the number of matrices to be passed. A count of 1 should be
     * used if modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of
     * matrices.
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
    public function programUniform3f(int $program, int $location, float $v0, float $v1, float $v2): void
    {
        $__proc = $this->proc('glProgramUniform3f',
            'void (*)(GLuint program, GLint location, GLfloat v0, GLfloat v1, GLfloat v2)');
        $__proc($program, $location, $v0, $v1, $v2);
    }

    /**
     * {@see GL41::programUniform} modifies the value of a uniform variable or a uniform variable array. The
     * location of the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL41::getUniformLocation}. {@see GL41::programUniform} operates on the program object specified by
     * $program.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform
     * variable specified by $location using the values passed as arguments. The number specified in the command
     * should match the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1}
     * for `float`, `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The
     * suffix {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer
     * values are being passed, and this type should also match the data type of the specified uniform variable. The
     * {@see GL46::i} variants of this function should be used to provide values for uniform variables defined as
     * `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be
     * used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays
     * of these. The {@see GL46::f} variants should be used to provide values for uniform variables of type `float`,
     * `vec2`, `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f}
     * variants may be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or
     * arrays of these. The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be
     * set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL41::programUniform} until
     * the next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable
     * or a uniform variable array. These commands pass a count and a pointer to the values to be loaded into a
     * uniform variable or a uniform variable array. A count of 1 should be used if modifying the value of a single
     * uniform variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When
     * loading n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable
     * array, values for all array elements beyond the end of the array will be ignored. The number specified in the
     * name of the command indicates the number of components for each element in $value, and it should match the
     * number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * {@see GL41::programUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL41::programUniform3f} or {@see GL41::programUniform3fv} can be used to load
     * a uniform variable array of type vec3). The number of elements of the uniform variable array to be modified is
     * specified by $count
     *
     * The commands {@see GL41::programUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix
     * or an array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3
     * × 3 matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values).
     * Non-square matrix dimensionality is explicit, with the first number representing the number of columns and the
     * second number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2
     * columns and 4 rows (i.e., 8 values). If $transpose is {@see GL41::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL41::GL_TRUE}, each matrix is assumed to be supplied
     * in row major order. The $count argument indicates the number of matrices to be passed. A count of 1 should be
     * used if modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of
     * matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param CData|null $value
     * @return void
     */
    public function programUniform3fv(int $program, int $location, int $count, ?CData $value): void
    {
        $__proc = $this->proc('glProgramUniform3fv',
            'void (*)(GLuint program, GLint location, GLsizei count, const GLfloat *value)');
        $__proc($program, $location, $count, $value);
    }

    /**
     * {@see GL41::programUniform} modifies the value of a uniform variable or a uniform variable array. The
     * location of the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL41::getUniformLocation}. {@see GL41::programUniform} operates on the program object specified by
     * $program.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform
     * variable specified by $location using the values passed as arguments. The number specified in the command
     * should match the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1}
     * for `float`, `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The
     * suffix {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer
     * values are being passed, and this type should also match the data type of the specified uniform variable. The
     * {@see GL46::i} variants of this function should be used to provide values for uniform variables defined as
     * `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be
     * used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays
     * of these. The {@see GL46::f} variants should be used to provide values for uniform variables of type `float`,
     * `vec2`, `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f}
     * variants may be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or
     * arrays of these. The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be
     * set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL41::programUniform} until
     * the next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable
     * or a uniform variable array. These commands pass a count and a pointer to the values to be loaded into a
     * uniform variable or a uniform variable array. A count of 1 should be used if modifying the value of a single
     * uniform variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When
     * loading n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable
     * array, values for all array elements beyond the end of the array will be ignored. The number specified in the
     * name of the command indicates the number of components for each element in $value, and it should match the
     * number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * {@see GL41::programUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL41::programUniform3f} or {@see GL41::programUniform3fv} can be used to load
     * a uniform variable array of type vec3). The number of elements of the uniform variable array to be modified is
     * specified by $count
     *
     * The commands {@see GL41::programUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix
     * or an array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3
     * × 3 matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values).
     * Non-square matrix dimensionality is explicit, with the first number representing the number of columns and the
     * second number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2
     * columns and 4 rows (i.e., 8 values). If $transpose is {@see GL41::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL41::GL_TRUE}, each matrix is assumed to be supplied
     * in row major order. The $count argument indicates the number of matrices to be passed. A count of 1 should be
     * used if modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of
     * matrices.
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
    public function programUniform3i(int $program, int $location, int $v0, int $v1, int $v2): void
    {
        $__proc = $this->proc('glProgramUniform3i',
            'void (*)(GLuint program, GLint location, GLint v0, GLint v1, GLint v2)');
        $__proc($program, $location, $v0, $v1, $v2);
    }

    /**
     * {@see GL41::programUniform} modifies the value of a uniform variable or a uniform variable array. The
     * location of the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL41::getUniformLocation}. {@see GL41::programUniform} operates on the program object specified by
     * $program.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform
     * variable specified by $location using the values passed as arguments. The number specified in the command
     * should match the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1}
     * for `float`, `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The
     * suffix {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer
     * values are being passed, and this type should also match the data type of the specified uniform variable. The
     * {@see GL46::i} variants of this function should be used to provide values for uniform variables defined as
     * `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be
     * used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays
     * of these. The {@see GL46::f} variants should be used to provide values for uniform variables of type `float`,
     * `vec2`, `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f}
     * variants may be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or
     * arrays of these. The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be
     * set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL41::programUniform} until
     * the next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable
     * or a uniform variable array. These commands pass a count and a pointer to the values to be loaded into a
     * uniform variable or a uniform variable array. A count of 1 should be used if modifying the value of a single
     * uniform variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When
     * loading n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable
     * array, values for all array elements beyond the end of the array will be ignored. The number specified in the
     * name of the command indicates the number of components for each element in $value, and it should match the
     * number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * {@see GL41::programUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL41::programUniform3f} or {@see GL41::programUniform3fv} can be used to load
     * a uniform variable array of type vec3). The number of elements of the uniform variable array to be modified is
     * specified by $count
     *
     * The commands {@see GL41::programUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix
     * or an array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3
     * × 3 matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values).
     * Non-square matrix dimensionality is explicit, with the first number representing the number of columns and the
     * second number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2
     * columns and 4 rows (i.e., 8 values). If $transpose is {@see GL41::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL41::GL_TRUE}, each matrix is assumed to be supplied
     * in row major order. The $count argument indicates the number of matrices to be passed. A count of 1 should be
     * used if modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of
     * matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param CData|null $value
     * @return void
     */
    public function programUniform3iv(int $program, int $location, int $count, ?CData $value): void
    {
        $__proc = $this->proc('glProgramUniform3iv',
            'void (*)(GLuint program, GLint location, GLsizei count, const GLint *value)');
        $__proc($program, $location, $count, $value);
    }

    /**
     * {@see GL41::programUniform} modifies the value of a uniform variable or a uniform variable array. The
     * location of the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL41::getUniformLocation}. {@see GL41::programUniform} operates on the program object specified by
     * $program.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform
     * variable specified by $location using the values passed as arguments. The number specified in the command
     * should match the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1}
     * for `float`, `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The
     * suffix {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer
     * values are being passed, and this type should also match the data type of the specified uniform variable. The
     * {@see GL46::i} variants of this function should be used to provide values for uniform variables defined as
     * `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be
     * used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays
     * of these. The {@see GL46::f} variants should be used to provide values for uniform variables of type `float`,
     * `vec2`, `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f}
     * variants may be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or
     * arrays of these. The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be
     * set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL41::programUniform} until
     * the next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable
     * or a uniform variable array. These commands pass a count and a pointer to the values to be loaded into a
     * uniform variable or a uniform variable array. A count of 1 should be used if modifying the value of a single
     * uniform variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When
     * loading n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable
     * array, values for all array elements beyond the end of the array will be ignored. The number specified in the
     * name of the command indicates the number of components for each element in $value, and it should match the
     * number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * {@see GL41::programUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL41::programUniform3f} or {@see GL41::programUniform3fv} can be used to load
     * a uniform variable array of type vec3). The number of elements of the uniform variable array to be modified is
     * specified by $count
     *
     * The commands {@see GL41::programUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix
     * or an array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3
     * × 3 matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values).
     * Non-square matrix dimensionality is explicit, with the first number representing the number of columns and the
     * second number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2
     * columns and 4 rows (i.e., 8 values). If $transpose is {@see GL41::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL41::GL_TRUE}, each matrix is assumed to be supplied
     * in row major order. The $count argument indicates the number of matrices to be passed. A count of 1 should be
     * used if modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of
     * matrices.
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
    public function programUniform3ui(int $program, int $location, int $v0, int $v1, int $v2): void
    {
        $__proc = $this->proc('glProgramUniform3ui',
            'void (*)(GLuint program, GLint location, GLuint v0, GLuint v1, GLuint v2)');
        $__proc($program, $location, $v0, $v1, $v2);
    }

    /**
     * {@see GL41::programUniform} modifies the value of a uniform variable or a uniform variable array. The
     * location of the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL41::getUniformLocation}. {@see GL41::programUniform} operates on the program object specified by
     * $program.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform
     * variable specified by $location using the values passed as arguments. The number specified in the command
     * should match the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1}
     * for `float`, `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The
     * suffix {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer
     * values are being passed, and this type should also match the data type of the specified uniform variable. The
     * {@see GL46::i} variants of this function should be used to provide values for uniform variables defined as
     * `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be
     * used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays
     * of these. The {@see GL46::f} variants should be used to provide values for uniform variables of type `float`,
     * `vec2`, `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f}
     * variants may be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or
     * arrays of these. The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be
     * set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL41::programUniform} until
     * the next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable
     * or a uniform variable array. These commands pass a count and a pointer to the values to be loaded into a
     * uniform variable or a uniform variable array. A count of 1 should be used if modifying the value of a single
     * uniform variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When
     * loading n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable
     * array, values for all array elements beyond the end of the array will be ignored. The number specified in the
     * name of the command indicates the number of components for each element in $value, and it should match the
     * number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * {@see GL41::programUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL41::programUniform3f} or {@see GL41::programUniform3fv} can be used to load
     * a uniform variable array of type vec3). The number of elements of the uniform variable array to be modified is
     * specified by $count
     *
     * The commands {@see GL41::programUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix
     * or an array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3
     * × 3 matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values).
     * Non-square matrix dimensionality is explicit, with the first number representing the number of columns and the
     * second number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2
     * columns and 4 rows (i.e., 8 values). If $transpose is {@see GL41::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL41::GL_TRUE}, each matrix is assumed to be supplied
     * in row major order. The $count argument indicates the number of matrices to be passed. A count of 1 should be
     * used if modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of
     * matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param CData|null $value
     * @return void
     */
    public function programUniform3uiv(int $program, int $location, int $count, ?CData $value): void
    {
        $__proc = $this->proc('glProgramUniform3uiv',
            'void (*)(GLuint program, GLint location, GLsizei count, const GLuint *value)');
        $__proc($program, $location, $count, $value);
    }

    /**
     * {@see GL41::programUniform} modifies the value of a uniform variable or a uniform variable array. The
     * location of the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL41::getUniformLocation}. {@see GL41::programUniform} operates on the program object specified by
     * $program.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform
     * variable specified by $location using the values passed as arguments. The number specified in the command
     * should match the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1}
     * for `float`, `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The
     * suffix {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer
     * values are being passed, and this type should also match the data type of the specified uniform variable. The
     * {@see GL46::i} variants of this function should be used to provide values for uniform variables defined as
     * `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be
     * used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays
     * of these. The {@see GL46::f} variants should be used to provide values for uniform variables of type `float`,
     * `vec2`, `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f}
     * variants may be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or
     * arrays of these. The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be
     * set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL41::programUniform} until
     * the next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable
     * or a uniform variable array. These commands pass a count and a pointer to the values to be loaded into a
     * uniform variable or a uniform variable array. A count of 1 should be used if modifying the value of a single
     * uniform variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When
     * loading n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable
     * array, values for all array elements beyond the end of the array will be ignored. The number specified in the
     * name of the command indicates the number of components for each element in $value, and it should match the
     * number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * {@see GL41::programUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL41::programUniform3f} or {@see GL41::programUniform3fv} can be used to load
     * a uniform variable array of type vec3). The number of elements of the uniform variable array to be modified is
     * specified by $count
     *
     * The commands {@see GL41::programUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix
     * or an array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3
     * × 3 matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values).
     * Non-square matrix dimensionality is explicit, with the first number representing the number of columns and the
     * second number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2
     * columns and 4 rows (i.e., 8 values). If $transpose is {@see GL41::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL41::GL_TRUE}, each matrix is assumed to be supplied
     * in row major order. The $count argument indicates the number of matrices to be passed. A count of 1 should be
     * used if modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of
     * matrices.
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
    public function programUniform4d(int $program, int $location, float $v0, float $v1, float $v2, float $v3): void
    {
        $__proc = $this->proc('glProgramUniform4d',
            'void (*)(GLuint program, GLint location, GLdouble v0, GLdouble v1, GLdouble v2, GLdouble v3)');
        $__proc($program, $location, $v0, $v1, $v2, $v3);
    }

    /**
     * {@see GL41::programUniform} modifies the value of a uniform variable or a uniform variable array. The
     * location of the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL41::getUniformLocation}. {@see GL41::programUniform} operates on the program object specified by
     * $program.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform
     * variable specified by $location using the values passed as arguments. The number specified in the command
     * should match the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1}
     * for `float`, `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The
     * suffix {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer
     * values are being passed, and this type should also match the data type of the specified uniform variable. The
     * {@see GL46::i} variants of this function should be used to provide values for uniform variables defined as
     * `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be
     * used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays
     * of these. The {@see GL46::f} variants should be used to provide values for uniform variables of type `float`,
     * `vec2`, `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f}
     * variants may be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or
     * arrays of these. The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be
     * set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL41::programUniform} until
     * the next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable
     * or a uniform variable array. These commands pass a count and a pointer to the values to be loaded into a
     * uniform variable or a uniform variable array. A count of 1 should be used if modifying the value of a single
     * uniform variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When
     * loading n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable
     * array, values for all array elements beyond the end of the array will be ignored. The number specified in the
     * name of the command indicates the number of components for each element in $value, and it should match the
     * number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * {@see GL41::programUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL41::programUniform3f} or {@see GL41::programUniform3fv} can be used to load
     * a uniform variable array of type vec3). The number of elements of the uniform variable array to be modified is
     * specified by $count
     *
     * The commands {@see GL41::programUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix
     * or an array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3
     * × 3 matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values).
     * Non-square matrix dimensionality is explicit, with the first number representing the number of columns and the
     * second number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2
     * columns and 4 rows (i.e., 8 values). If $transpose is {@see GL41::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL41::GL_TRUE}, each matrix is assumed to be supplied
     * in row major order. The $count argument indicates the number of matrices to be passed. A count of 1 should be
     * used if modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of
     * matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param CData|null $value
     * @return void
     */
    public function programUniform4dv(int $program, int $location, int $count, ?CData $value): void
    {
        $__proc = $this->proc('glProgramUniform4dv',
            'void (*)(GLuint program, GLint location, GLsizei count, const GLdouble *value)');
        $__proc($program, $location, $count, $value);
    }

    /**
     * {@see GL41::programUniform} modifies the value of a uniform variable or a uniform variable array. The
     * location of the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL41::getUniformLocation}. {@see GL41::programUniform} operates on the program object specified by
     * $program.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform
     * variable specified by $location using the values passed as arguments. The number specified in the command
     * should match the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1}
     * for `float`, `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The
     * suffix {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer
     * values are being passed, and this type should also match the data type of the specified uniform variable. The
     * {@see GL46::i} variants of this function should be used to provide values for uniform variables defined as
     * `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be
     * used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays
     * of these. The {@see GL46::f} variants should be used to provide values for uniform variables of type `float`,
     * `vec2`, `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f}
     * variants may be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or
     * arrays of these. The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be
     * set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL41::programUniform} until
     * the next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable
     * or a uniform variable array. These commands pass a count and a pointer to the values to be loaded into a
     * uniform variable or a uniform variable array. A count of 1 should be used if modifying the value of a single
     * uniform variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When
     * loading n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable
     * array, values for all array elements beyond the end of the array will be ignored. The number specified in the
     * name of the command indicates the number of components for each element in $value, and it should match the
     * number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * {@see GL41::programUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL41::programUniform3f} or {@see GL41::programUniform3fv} can be used to load
     * a uniform variable array of type vec3). The number of elements of the uniform variable array to be modified is
     * specified by $count
     *
     * The commands {@see GL41::programUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix
     * or an array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3
     * × 3 matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values).
     * Non-square matrix dimensionality is explicit, with the first number representing the number of columns and the
     * second number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2
     * columns and 4 rows (i.e., 8 values). If $transpose is {@see GL41::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL41::GL_TRUE}, each matrix is assumed to be supplied
     * in row major order. The $count argument indicates the number of matrices to be passed. A count of 1 should be
     * used if modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of
     * matrices.
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
    public function programUniform4f(int $program, int $location, float $v0, float $v1, float $v2, float $v3): void
    {
        $__proc = $this->proc('glProgramUniform4f',
            'void (*)(GLuint program, GLint location, GLfloat v0, GLfloat v1, GLfloat v2, GLfloat v3)');
        $__proc($program, $location, $v0, $v1, $v2, $v3);
    }

    /**
     * {@see GL41::programUniform} modifies the value of a uniform variable or a uniform variable array. The
     * location of the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL41::getUniformLocation}. {@see GL41::programUniform} operates on the program object specified by
     * $program.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform
     * variable specified by $location using the values passed as arguments. The number specified in the command
     * should match the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1}
     * for `float`, `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The
     * suffix {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer
     * values are being passed, and this type should also match the data type of the specified uniform variable. The
     * {@see GL46::i} variants of this function should be used to provide values for uniform variables defined as
     * `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be
     * used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays
     * of these. The {@see GL46::f} variants should be used to provide values for uniform variables of type `float`,
     * `vec2`, `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f}
     * variants may be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or
     * arrays of these. The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be
     * set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL41::programUniform} until
     * the next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable
     * or a uniform variable array. These commands pass a count and a pointer to the values to be loaded into a
     * uniform variable or a uniform variable array. A count of 1 should be used if modifying the value of a single
     * uniform variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When
     * loading n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable
     * array, values for all array elements beyond the end of the array will be ignored. The number specified in the
     * name of the command indicates the number of components for each element in $value, and it should match the
     * number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * {@see GL41::programUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL41::programUniform3f} or {@see GL41::programUniform3fv} can be used to load
     * a uniform variable array of type vec3). The number of elements of the uniform variable array to be modified is
     * specified by $count
     *
     * The commands {@see GL41::programUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix
     * or an array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3
     * × 3 matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values).
     * Non-square matrix dimensionality is explicit, with the first number representing the number of columns and the
     * second number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2
     * columns and 4 rows (i.e., 8 values). If $transpose is {@see GL41::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL41::GL_TRUE}, each matrix is assumed to be supplied
     * in row major order. The $count argument indicates the number of matrices to be passed. A count of 1 should be
     * used if modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of
     * matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param CData|null $value
     * @return void
     */
    public function programUniform4fv(int $program, int $location, int $count, ?CData $value): void
    {
        $__proc = $this->proc('glProgramUniform4fv',
            'void (*)(GLuint program, GLint location, GLsizei count, const GLfloat *value)');
        $__proc($program, $location, $count, $value);
    }

    /**
     * {@see GL41::programUniform} modifies the value of a uniform variable or a uniform variable array. The
     * location of the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL41::getUniformLocation}. {@see GL41::programUniform} operates on the program object specified by
     * $program.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform
     * variable specified by $location using the values passed as arguments. The number specified in the command
     * should match the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1}
     * for `float`, `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The
     * suffix {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer
     * values are being passed, and this type should also match the data type of the specified uniform variable. The
     * {@see GL46::i} variants of this function should be used to provide values for uniform variables defined as
     * `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be
     * used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays
     * of these. The {@see GL46::f} variants should be used to provide values for uniform variables of type `float`,
     * `vec2`, `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f}
     * variants may be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or
     * arrays of these. The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be
     * set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL41::programUniform} until
     * the next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable
     * or a uniform variable array. These commands pass a count and a pointer to the values to be loaded into a
     * uniform variable or a uniform variable array. A count of 1 should be used if modifying the value of a single
     * uniform variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When
     * loading n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable
     * array, values for all array elements beyond the end of the array will be ignored. The number specified in the
     * name of the command indicates the number of components for each element in $value, and it should match the
     * number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * {@see GL41::programUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL41::programUniform3f} or {@see GL41::programUniform3fv} can be used to load
     * a uniform variable array of type vec3). The number of elements of the uniform variable array to be modified is
     * specified by $count
     *
     * The commands {@see GL41::programUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix
     * or an array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3
     * × 3 matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values).
     * Non-square matrix dimensionality is explicit, with the first number representing the number of columns and the
     * second number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2
     * columns and 4 rows (i.e., 8 values). If $transpose is {@see GL41::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL41::GL_TRUE}, each matrix is assumed to be supplied
     * in row major order. The $count argument indicates the number of matrices to be passed. A count of 1 should be
     * used if modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of
     * matrices.
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
    public function programUniform4i(int $program, int $location, int $v0, int $v1, int $v2, int $v3): void
    {
        $__proc = $this->proc('glProgramUniform4i',
            'void (*)(GLuint program, GLint location, GLint v0, GLint v1, GLint v2, GLint v3)');
        $__proc($program, $location, $v0, $v1, $v2, $v3);
    }

    /**
     * {@see GL41::programUniform} modifies the value of a uniform variable or a uniform variable array. The
     * location of the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL41::getUniformLocation}. {@see GL41::programUniform} operates on the program object specified by
     * $program.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform
     * variable specified by $location using the values passed as arguments. The number specified in the command
     * should match the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1}
     * for `float`, `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The
     * suffix {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer
     * values are being passed, and this type should also match the data type of the specified uniform variable. The
     * {@see GL46::i} variants of this function should be used to provide values for uniform variables defined as
     * `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be
     * used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays
     * of these. The {@see GL46::f} variants should be used to provide values for uniform variables of type `float`,
     * `vec2`, `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f}
     * variants may be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or
     * arrays of these. The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be
     * set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL41::programUniform} until
     * the next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable
     * or a uniform variable array. These commands pass a count and a pointer to the values to be loaded into a
     * uniform variable or a uniform variable array. A count of 1 should be used if modifying the value of a single
     * uniform variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When
     * loading n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable
     * array, values for all array elements beyond the end of the array will be ignored. The number specified in the
     * name of the command indicates the number of components for each element in $value, and it should match the
     * number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * {@see GL41::programUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL41::programUniform3f} or {@see GL41::programUniform3fv} can be used to load
     * a uniform variable array of type vec3). The number of elements of the uniform variable array to be modified is
     * specified by $count
     *
     * The commands {@see GL41::programUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix
     * or an array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3
     * × 3 matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values).
     * Non-square matrix dimensionality is explicit, with the first number representing the number of columns and the
     * second number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2
     * columns and 4 rows (i.e., 8 values). If $transpose is {@see GL41::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL41::GL_TRUE}, each matrix is assumed to be supplied
     * in row major order. The $count argument indicates the number of matrices to be passed. A count of 1 should be
     * used if modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of
     * matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param CData|null $value
     * @return void
     */
    public function programUniform4iv(int $program, int $location, int $count, ?CData $value): void
    {
        $__proc = $this->proc('glProgramUniform4iv',
            'void (*)(GLuint program, GLint location, GLsizei count, const GLint *value)');
        $__proc($program, $location, $count, $value);
    }

    /**
     * {@see GL41::programUniform} modifies the value of a uniform variable or a uniform variable array. The
     * location of the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL41::getUniformLocation}. {@see GL41::programUniform} operates on the program object specified by
     * $program.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform
     * variable specified by $location using the values passed as arguments. The number specified in the command
     * should match the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1}
     * for `float`, `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The
     * suffix {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer
     * values are being passed, and this type should also match the data type of the specified uniform variable. The
     * {@see GL46::i} variants of this function should be used to provide values for uniform variables defined as
     * `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be
     * used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays
     * of these. The {@see GL46::f} variants should be used to provide values for uniform variables of type `float`,
     * `vec2`, `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f}
     * variants may be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or
     * arrays of these. The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be
     * set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL41::programUniform} until
     * the next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable
     * or a uniform variable array. These commands pass a count and a pointer to the values to be loaded into a
     * uniform variable or a uniform variable array. A count of 1 should be used if modifying the value of a single
     * uniform variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When
     * loading n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable
     * array, values for all array elements beyond the end of the array will be ignored. The number specified in the
     * name of the command indicates the number of components for each element in $value, and it should match the
     * number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * {@see GL41::programUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL41::programUniform3f} or {@see GL41::programUniform3fv} can be used to load
     * a uniform variable array of type vec3). The number of elements of the uniform variable array to be modified is
     * specified by $count
     *
     * The commands {@see GL41::programUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix
     * or an array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3
     * × 3 matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values).
     * Non-square matrix dimensionality is explicit, with the first number representing the number of columns and the
     * second number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2
     * columns and 4 rows (i.e., 8 values). If $transpose is {@see GL41::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL41::GL_TRUE}, each matrix is assumed to be supplied
     * in row major order. The $count argument indicates the number of matrices to be passed. A count of 1 should be
     * used if modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of
     * matrices.
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
    public function programUniform4ui(int $program, int $location, int $v0, int $v1, int $v2, int $v3): void
    {
        $__proc = $this->proc('glProgramUniform4ui',
            'void (*)(GLuint program, GLint location, GLuint v0, GLuint v1, GLuint v2, GLuint v3)');
        $__proc($program, $location, $v0, $v1, $v2, $v3);
    }

    /**
     * {@see GL41::programUniform} modifies the value of a uniform variable or a uniform variable array. The
     * location of the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL41::getUniformLocation}. {@see GL41::programUniform} operates on the program object specified by
     * $program.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform
     * variable specified by $location using the values passed as arguments. The number specified in the command
     * should match the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1}
     * for `float`, `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The
     * suffix {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer
     * values are being passed, and this type should also match the data type of the specified uniform variable. The
     * {@see GL46::i} variants of this function should be used to provide values for uniform variables defined as
     * `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be
     * used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays
     * of these. The {@see GL46::f} variants should be used to provide values for uniform variables of type `float`,
     * `vec2`, `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f}
     * variants may be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or
     * arrays of these. The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be
     * set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL41::programUniform} until
     * the next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable
     * or a uniform variable array. These commands pass a count and a pointer to the values to be loaded into a
     * uniform variable or a uniform variable array. A count of 1 should be used if modifying the value of a single
     * uniform variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When
     * loading n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable
     * array, values for all array elements beyond the end of the array will be ignored. The number specified in the
     * name of the command indicates the number of components for each element in $value, and it should match the
     * number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * {@see GL41::programUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL41::programUniform3f} or {@see GL41::programUniform3fv} can be used to load
     * a uniform variable array of type vec3). The number of elements of the uniform variable array to be modified is
     * specified by $count
     *
     * The commands {@see GL41::programUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix
     * or an array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3
     * × 3 matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values).
     * Non-square matrix dimensionality is explicit, with the first number representing the number of columns and the
     * second number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2
     * columns and 4 rows (i.e., 8 values). If $transpose is {@see GL41::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL41::GL_TRUE}, each matrix is assumed to be supplied
     * in row major order. The $count argument indicates the number of matrices to be passed. A count of 1 should be
     * used if modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of
     * matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param CData|null $value
     * @return void
     */
    public function programUniform4uiv(int $program, int $location, int $count, ?CData $value): void
    {
        $__proc = $this->proc('glProgramUniform4uiv',
            'void (*)(GLuint program, GLint location, GLsizei count, const GLuint *value)');
        $__proc($program, $location, $count, $value);
    }

    /**
     * {@see GL41::programUniform} modifies the value of a uniform variable or a uniform variable array. The
     * location of the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL41::getUniformLocation}. {@see GL41::programUniform} operates on the program object specified by
     * $program.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform
     * variable specified by $location using the values passed as arguments. The number specified in the command
     * should match the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1}
     * for `float`, `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The
     * suffix {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer
     * values are being passed, and this type should also match the data type of the specified uniform variable. The
     * {@see GL46::i} variants of this function should be used to provide values for uniform variables defined as
     * `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be
     * used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays
     * of these. The {@see GL46::f} variants should be used to provide values for uniform variables of type `float`,
     * `vec2`, `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f}
     * variants may be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or
     * arrays of these. The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be
     * set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL41::programUniform} until
     * the next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable
     * or a uniform variable array. These commands pass a count and a pointer to the values to be loaded into a
     * uniform variable or a uniform variable array. A count of 1 should be used if modifying the value of a single
     * uniform variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When
     * loading n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable
     * array, values for all array elements beyond the end of the array will be ignored. The number specified in the
     * name of the command indicates the number of components for each element in $value, and it should match the
     * number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * {@see GL41::programUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL41::programUniform3f} or {@see GL41::programUniform3fv} can be used to load
     * a uniform variable array of type vec3). The number of elements of the uniform variable array to be modified is
     * specified by $count
     *
     * The commands {@see GL41::programUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix
     * or an array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3
     * × 3 matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values).
     * Non-square matrix dimensionality is explicit, with the first number representing the number of columns and the
     * second number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2
     * columns and 4 rows (i.e., 8 values). If $transpose is {@see GL41::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL41::GL_TRUE}, each matrix is assumed to be supplied
     * in row major order. The $count argument indicates the number of matrices to be passed. A count of 1 should be
     * used if modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of
     * matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param CData|null $value
     * @return void
     */
    public function programUniformMatrix2dv(
        int $program,
        int $location,
        int $count,
        int $transpose,
        ?CData $value
    ): void {
        $__proc = $this->proc('glProgramUniformMatrix2dv',
            'void (*)(GLuint program, GLint location, GLsizei count, GLboolean transpose, const GLdouble *value)');
        $__proc($program, $location, $count, $transpose, $value);
    }

    /**
     * {@see GL41::programUniform} modifies the value of a uniform variable or a uniform variable array. The
     * location of the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL41::getUniformLocation}. {@see GL41::programUniform} operates on the program object specified by
     * $program.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform
     * variable specified by $location using the values passed as arguments. The number specified in the command
     * should match the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1}
     * for `float`, `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The
     * suffix {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer
     * values are being passed, and this type should also match the data type of the specified uniform variable. The
     * {@see GL46::i} variants of this function should be used to provide values for uniform variables defined as
     * `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be
     * used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays
     * of these. The {@see GL46::f} variants should be used to provide values for uniform variables of type `float`,
     * `vec2`, `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f}
     * variants may be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or
     * arrays of these. The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be
     * set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL41::programUniform} until
     * the next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable
     * or a uniform variable array. These commands pass a count and a pointer to the values to be loaded into a
     * uniform variable or a uniform variable array. A count of 1 should be used if modifying the value of a single
     * uniform variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When
     * loading n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable
     * array, values for all array elements beyond the end of the array will be ignored. The number specified in the
     * name of the command indicates the number of components for each element in $value, and it should match the
     * number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * {@see GL41::programUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL41::programUniform3f} or {@see GL41::programUniform3fv} can be used to load
     * a uniform variable array of type vec3). The number of elements of the uniform variable array to be modified is
     * specified by $count
     *
     * The commands {@see GL41::programUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix
     * or an array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3
     * × 3 matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values).
     * Non-square matrix dimensionality is explicit, with the first number representing the number of columns and the
     * second number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2
     * columns and 4 rows (i.e., 8 values). If $transpose is {@see GL41::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL41::GL_TRUE}, each matrix is assumed to be supplied
     * in row major order. The $count argument indicates the number of matrices to be passed. A count of 1 should be
     * used if modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of
     * matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param CData|null $value
     * @return void
     */
    public function programUniformMatrix2fv(
        int $program,
        int $location,
        int $count,
        int $transpose,
        ?CData $value
    ): void {
        $__proc = $this->proc('glProgramUniformMatrix2fv',
            'void (*)(GLuint program, GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $__proc($program, $location, $count, $transpose, $value);
    }

    /**
     * {@see GL41::programUniform} modifies the value of a uniform variable or a uniform variable array. The
     * location of the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL41::getUniformLocation}. {@see GL41::programUniform} operates on the program object specified by
     * $program.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform
     * variable specified by $location using the values passed as arguments. The number specified in the command
     * should match the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1}
     * for `float`, `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The
     * suffix {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer
     * values are being passed, and this type should also match the data type of the specified uniform variable. The
     * {@see GL46::i} variants of this function should be used to provide values for uniform variables defined as
     * `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be
     * used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays
     * of these. The {@see GL46::f} variants should be used to provide values for uniform variables of type `float`,
     * `vec2`, `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f}
     * variants may be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or
     * arrays of these. The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be
     * set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL41::programUniform} until
     * the next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable
     * or a uniform variable array. These commands pass a count and a pointer to the values to be loaded into a
     * uniform variable or a uniform variable array. A count of 1 should be used if modifying the value of a single
     * uniform variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When
     * loading n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable
     * array, values for all array elements beyond the end of the array will be ignored. The number specified in the
     * name of the command indicates the number of components for each element in $value, and it should match the
     * number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * {@see GL41::programUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL41::programUniform3f} or {@see GL41::programUniform3fv} can be used to load
     * a uniform variable array of type vec3). The number of elements of the uniform variable array to be modified is
     * specified by $count
     *
     * The commands {@see GL41::programUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix
     * or an array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3
     * × 3 matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values).
     * Non-square matrix dimensionality is explicit, with the first number representing the number of columns and the
     * second number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2
     * columns and 4 rows (i.e., 8 values). If $transpose is {@see GL41::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL41::GL_TRUE}, each matrix is assumed to be supplied
     * in row major order. The $count argument indicates the number of matrices to be passed. A count of 1 should be
     * used if modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of
     * matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param CData|null $value
     * @return void
     */
    public function programUniformMatrix2x3dv(
        int $program,
        int $location,
        int $count,
        int $transpose,
        ?CData $value
    ): void {
        $__proc = $this->proc('glProgramUniformMatrix2x3dv',
            'void (*)(GLuint program, GLint location, GLsizei count, GLboolean transpose, const GLdouble *value)');
        $__proc($program, $location, $count, $transpose, $value);
    }

    /**
     * {@see GL41::programUniform} modifies the value of a uniform variable or a uniform variable array. The
     * location of the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL41::getUniformLocation}. {@see GL41::programUniform} operates on the program object specified by
     * $program.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform
     * variable specified by $location using the values passed as arguments. The number specified in the command
     * should match the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1}
     * for `float`, `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The
     * suffix {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer
     * values are being passed, and this type should also match the data type of the specified uniform variable. The
     * {@see GL46::i} variants of this function should be used to provide values for uniform variables defined as
     * `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be
     * used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays
     * of these. The {@see GL46::f} variants should be used to provide values for uniform variables of type `float`,
     * `vec2`, `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f}
     * variants may be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or
     * arrays of these. The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be
     * set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL41::programUniform} until
     * the next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable
     * or a uniform variable array. These commands pass a count and a pointer to the values to be loaded into a
     * uniform variable or a uniform variable array. A count of 1 should be used if modifying the value of a single
     * uniform variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When
     * loading n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable
     * array, values for all array elements beyond the end of the array will be ignored. The number specified in the
     * name of the command indicates the number of components for each element in $value, and it should match the
     * number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * {@see GL41::programUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL41::programUniform3f} or {@see GL41::programUniform3fv} can be used to load
     * a uniform variable array of type vec3). The number of elements of the uniform variable array to be modified is
     * specified by $count
     *
     * The commands {@see GL41::programUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix
     * or an array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3
     * × 3 matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values).
     * Non-square matrix dimensionality is explicit, with the first number representing the number of columns and the
     * second number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2
     * columns and 4 rows (i.e., 8 values). If $transpose is {@see GL41::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL41::GL_TRUE}, each matrix is assumed to be supplied
     * in row major order. The $count argument indicates the number of matrices to be passed. A count of 1 should be
     * used if modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of
     * matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param CData|null $value
     * @return void
     */
    public function programUniformMatrix2x3fv(
        int $program,
        int $location,
        int $count,
        int $transpose,
        ?CData $value
    ): void {
        $__proc = $this->proc('glProgramUniformMatrix2x3fv',
            'void (*)(GLuint program, GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $__proc($program, $location, $count, $transpose, $value);
    }

    /**
     * {@see GL41::programUniform} modifies the value of a uniform variable or a uniform variable array. The
     * location of the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL41::getUniformLocation}. {@see GL41::programUniform} operates on the program object specified by
     * $program.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform
     * variable specified by $location using the values passed as arguments. The number specified in the command
     * should match the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1}
     * for `float`, `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The
     * suffix {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer
     * values are being passed, and this type should also match the data type of the specified uniform variable. The
     * {@see GL46::i} variants of this function should be used to provide values for uniform variables defined as
     * `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be
     * used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays
     * of these. The {@see GL46::f} variants should be used to provide values for uniform variables of type `float`,
     * `vec2`, `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f}
     * variants may be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or
     * arrays of these. The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be
     * set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL41::programUniform} until
     * the next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable
     * or a uniform variable array. These commands pass a count and a pointer to the values to be loaded into a
     * uniform variable or a uniform variable array. A count of 1 should be used if modifying the value of a single
     * uniform variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When
     * loading n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable
     * array, values for all array elements beyond the end of the array will be ignored. The number specified in the
     * name of the command indicates the number of components for each element in $value, and it should match the
     * number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * {@see GL41::programUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL41::programUniform3f} or {@see GL41::programUniform3fv} can be used to load
     * a uniform variable array of type vec3). The number of elements of the uniform variable array to be modified is
     * specified by $count
     *
     * The commands {@see GL41::programUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix
     * or an array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3
     * × 3 matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values).
     * Non-square matrix dimensionality is explicit, with the first number representing the number of columns and the
     * second number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2
     * columns and 4 rows (i.e., 8 values). If $transpose is {@see GL41::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL41::GL_TRUE}, each matrix is assumed to be supplied
     * in row major order. The $count argument indicates the number of matrices to be passed. A count of 1 should be
     * used if modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of
     * matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param CData|null $value
     * @return void
     */
    public function programUniformMatrix2x4dv(
        int $program,
        int $location,
        int $count,
        int $transpose,
        ?CData $value
    ): void {
        $__proc = $this->proc('glProgramUniformMatrix2x4dv',
            'void (*)(GLuint program, GLint location, GLsizei count, GLboolean transpose, const GLdouble *value)');
        $__proc($program, $location, $count, $transpose, $value);
    }

    /**
     * {@see GL41::programUniform} modifies the value of a uniform variable or a uniform variable array. The
     * location of the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL41::getUniformLocation}. {@see GL41::programUniform} operates on the program object specified by
     * $program.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform
     * variable specified by $location using the values passed as arguments. The number specified in the command
     * should match the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1}
     * for `float`, `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The
     * suffix {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer
     * values are being passed, and this type should also match the data type of the specified uniform variable. The
     * {@see GL46::i} variants of this function should be used to provide values for uniform variables defined as
     * `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be
     * used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays
     * of these. The {@see GL46::f} variants should be used to provide values for uniform variables of type `float`,
     * `vec2`, `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f}
     * variants may be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or
     * arrays of these. The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be
     * set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL41::programUniform} until
     * the next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable
     * or a uniform variable array. These commands pass a count and a pointer to the values to be loaded into a
     * uniform variable or a uniform variable array. A count of 1 should be used if modifying the value of a single
     * uniform variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When
     * loading n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable
     * array, values for all array elements beyond the end of the array will be ignored. The number specified in the
     * name of the command indicates the number of components for each element in $value, and it should match the
     * number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * {@see GL41::programUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL41::programUniform3f} or {@see GL41::programUniform3fv} can be used to load
     * a uniform variable array of type vec3). The number of elements of the uniform variable array to be modified is
     * specified by $count
     *
     * The commands {@see GL41::programUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix
     * or an array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3
     * × 3 matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values).
     * Non-square matrix dimensionality is explicit, with the first number representing the number of columns and the
     * second number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2
     * columns and 4 rows (i.e., 8 values). If $transpose is {@see GL41::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL41::GL_TRUE}, each matrix is assumed to be supplied
     * in row major order. The $count argument indicates the number of matrices to be passed. A count of 1 should be
     * used if modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of
     * matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param CData|null $value
     * @return void
     */
    public function programUniformMatrix2x4fv(
        int $program,
        int $location,
        int $count,
        int $transpose,
        ?CData $value
    ): void {
        $__proc = $this->proc('glProgramUniformMatrix2x4fv',
            'void (*)(GLuint program, GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $__proc($program, $location, $count, $transpose, $value);
    }

    /**
     * {@see GL41::programUniform} modifies the value of a uniform variable or a uniform variable array. The
     * location of the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL41::getUniformLocation}. {@see GL41::programUniform} operates on the program object specified by
     * $program.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform
     * variable specified by $location using the values passed as arguments. The number specified in the command
     * should match the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1}
     * for `float`, `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The
     * suffix {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer
     * values are being passed, and this type should also match the data type of the specified uniform variable. The
     * {@see GL46::i} variants of this function should be used to provide values for uniform variables defined as
     * `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be
     * used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays
     * of these. The {@see GL46::f} variants should be used to provide values for uniform variables of type `float`,
     * `vec2`, `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f}
     * variants may be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or
     * arrays of these. The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be
     * set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL41::programUniform} until
     * the next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable
     * or a uniform variable array. These commands pass a count and a pointer to the values to be loaded into a
     * uniform variable or a uniform variable array. A count of 1 should be used if modifying the value of a single
     * uniform variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When
     * loading n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable
     * array, values for all array elements beyond the end of the array will be ignored. The number specified in the
     * name of the command indicates the number of components for each element in $value, and it should match the
     * number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * {@see GL41::programUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL41::programUniform3f} or {@see GL41::programUniform3fv} can be used to load
     * a uniform variable array of type vec3). The number of elements of the uniform variable array to be modified is
     * specified by $count
     *
     * The commands {@see GL41::programUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix
     * or an array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3
     * × 3 matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values).
     * Non-square matrix dimensionality is explicit, with the first number representing the number of columns and the
     * second number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2
     * columns and 4 rows (i.e., 8 values). If $transpose is {@see GL41::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL41::GL_TRUE}, each matrix is assumed to be supplied
     * in row major order. The $count argument indicates the number of matrices to be passed. A count of 1 should be
     * used if modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of
     * matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param CData|null $value
     * @return void
     */
    public function programUniformMatrix3dv(
        int $program,
        int $location,
        int $count,
        int $transpose,
        ?CData $value
    ): void {
        $__proc = $this->proc('glProgramUniformMatrix3dv',
            'void (*)(GLuint program, GLint location, GLsizei count, GLboolean transpose, const GLdouble *value)');
        $__proc($program, $location, $count, $transpose, $value);
    }

    /**
     * {@see GL41::programUniform} modifies the value of a uniform variable or a uniform variable array. The
     * location of the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL41::getUniformLocation}. {@see GL41::programUniform} operates on the program object specified by
     * $program.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform
     * variable specified by $location using the values passed as arguments. The number specified in the command
     * should match the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1}
     * for `float`, `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The
     * suffix {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer
     * values are being passed, and this type should also match the data type of the specified uniform variable. The
     * {@see GL46::i} variants of this function should be used to provide values for uniform variables defined as
     * `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be
     * used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays
     * of these. The {@see GL46::f} variants should be used to provide values for uniform variables of type `float`,
     * `vec2`, `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f}
     * variants may be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or
     * arrays of these. The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be
     * set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL41::programUniform} until
     * the next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable
     * or a uniform variable array. These commands pass a count and a pointer to the values to be loaded into a
     * uniform variable or a uniform variable array. A count of 1 should be used if modifying the value of a single
     * uniform variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When
     * loading n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable
     * array, values for all array elements beyond the end of the array will be ignored. The number specified in the
     * name of the command indicates the number of components for each element in $value, and it should match the
     * number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * {@see GL41::programUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL41::programUniform3f} or {@see GL41::programUniform3fv} can be used to load
     * a uniform variable array of type vec3). The number of elements of the uniform variable array to be modified is
     * specified by $count
     *
     * The commands {@see GL41::programUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix
     * or an array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3
     * × 3 matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values).
     * Non-square matrix dimensionality is explicit, with the first number representing the number of columns and the
     * second number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2
     * columns and 4 rows (i.e., 8 values). If $transpose is {@see GL41::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL41::GL_TRUE}, each matrix is assumed to be supplied
     * in row major order. The $count argument indicates the number of matrices to be passed. A count of 1 should be
     * used if modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of
     * matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param CData|null $value
     * @return void
     */
    public function programUniformMatrix3fv(
        int $program,
        int $location,
        int $count,
        int $transpose,
        ?CData $value
    ): void {
        $__proc = $this->proc('glProgramUniformMatrix3fv',
            'void (*)(GLuint program, GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $__proc($program, $location, $count, $transpose, $value);
    }

    /**
     * {@see GL41::programUniform} modifies the value of a uniform variable or a uniform variable array. The
     * location of the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL41::getUniformLocation}. {@see GL41::programUniform} operates on the program object specified by
     * $program.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform
     * variable specified by $location using the values passed as arguments. The number specified in the command
     * should match the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1}
     * for `float`, `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The
     * suffix {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer
     * values are being passed, and this type should also match the data type of the specified uniform variable. The
     * {@see GL46::i} variants of this function should be used to provide values for uniform variables defined as
     * `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be
     * used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays
     * of these. The {@see GL46::f} variants should be used to provide values for uniform variables of type `float`,
     * `vec2`, `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f}
     * variants may be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or
     * arrays of these. The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be
     * set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL41::programUniform} until
     * the next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable
     * or a uniform variable array. These commands pass a count and a pointer to the values to be loaded into a
     * uniform variable or a uniform variable array. A count of 1 should be used if modifying the value of a single
     * uniform variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When
     * loading n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable
     * array, values for all array elements beyond the end of the array will be ignored. The number specified in the
     * name of the command indicates the number of components for each element in $value, and it should match the
     * number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * {@see GL41::programUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL41::programUniform3f} or {@see GL41::programUniform3fv} can be used to load
     * a uniform variable array of type vec3). The number of elements of the uniform variable array to be modified is
     * specified by $count
     *
     * The commands {@see GL41::programUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix
     * or an array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3
     * × 3 matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values).
     * Non-square matrix dimensionality is explicit, with the first number representing the number of columns and the
     * second number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2
     * columns and 4 rows (i.e., 8 values). If $transpose is {@see GL41::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL41::GL_TRUE}, each matrix is assumed to be supplied
     * in row major order. The $count argument indicates the number of matrices to be passed. A count of 1 should be
     * used if modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of
     * matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param CData|null $value
     * @return void
     */
    public function programUniformMatrix3x2dv(
        int $program,
        int $location,
        int $count,
        int $transpose,
        ?CData $value
    ): void {
        $__proc = $this->proc('glProgramUniformMatrix3x2dv',
            'void (*)(GLuint program, GLint location, GLsizei count, GLboolean transpose, const GLdouble *value)');
        $__proc($program, $location, $count, $transpose, $value);
    }

    /**
     * {@see GL41::programUniform} modifies the value of a uniform variable or a uniform variable array. The
     * location of the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL41::getUniformLocation}. {@see GL41::programUniform} operates on the program object specified by
     * $program.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform
     * variable specified by $location using the values passed as arguments. The number specified in the command
     * should match the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1}
     * for `float`, `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The
     * suffix {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer
     * values are being passed, and this type should also match the data type of the specified uniform variable. The
     * {@see GL46::i} variants of this function should be used to provide values for uniform variables defined as
     * `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be
     * used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays
     * of these. The {@see GL46::f} variants should be used to provide values for uniform variables of type `float`,
     * `vec2`, `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f}
     * variants may be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or
     * arrays of these. The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be
     * set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL41::programUniform} until
     * the next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable
     * or a uniform variable array. These commands pass a count and a pointer to the values to be loaded into a
     * uniform variable or a uniform variable array. A count of 1 should be used if modifying the value of a single
     * uniform variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When
     * loading n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable
     * array, values for all array elements beyond the end of the array will be ignored. The number specified in the
     * name of the command indicates the number of components for each element in $value, and it should match the
     * number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * {@see GL41::programUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL41::programUniform3f} or {@see GL41::programUniform3fv} can be used to load
     * a uniform variable array of type vec3). The number of elements of the uniform variable array to be modified is
     * specified by $count
     *
     * The commands {@see GL41::programUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix
     * or an array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3
     * × 3 matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values).
     * Non-square matrix dimensionality is explicit, with the first number representing the number of columns and the
     * second number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2
     * columns and 4 rows (i.e., 8 values). If $transpose is {@see GL41::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL41::GL_TRUE}, each matrix is assumed to be supplied
     * in row major order. The $count argument indicates the number of matrices to be passed. A count of 1 should be
     * used if modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of
     * matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param CData|null $value
     * @return void
     */
    public function programUniformMatrix3x2fv(
        int $program,
        int $location,
        int $count,
        int $transpose,
        ?CData $value
    ): void {
        $__proc = $this->proc('glProgramUniformMatrix3x2fv',
            'void (*)(GLuint program, GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $__proc($program, $location, $count, $transpose, $value);
    }

    /**
     * {@see GL41::programUniform} modifies the value of a uniform variable or a uniform variable array. The
     * location of the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL41::getUniformLocation}. {@see GL41::programUniform} operates on the program object specified by
     * $program.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform
     * variable specified by $location using the values passed as arguments. The number specified in the command
     * should match the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1}
     * for `float`, `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The
     * suffix {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer
     * values are being passed, and this type should also match the data type of the specified uniform variable. The
     * {@see GL46::i} variants of this function should be used to provide values for uniform variables defined as
     * `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be
     * used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays
     * of these. The {@see GL46::f} variants should be used to provide values for uniform variables of type `float`,
     * `vec2`, `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f}
     * variants may be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or
     * arrays of these. The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be
     * set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL41::programUniform} until
     * the next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable
     * or a uniform variable array. These commands pass a count and a pointer to the values to be loaded into a
     * uniform variable or a uniform variable array. A count of 1 should be used if modifying the value of a single
     * uniform variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When
     * loading n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable
     * array, values for all array elements beyond the end of the array will be ignored. The number specified in the
     * name of the command indicates the number of components for each element in $value, and it should match the
     * number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * {@see GL41::programUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL41::programUniform3f} or {@see GL41::programUniform3fv} can be used to load
     * a uniform variable array of type vec3). The number of elements of the uniform variable array to be modified is
     * specified by $count
     *
     * The commands {@see GL41::programUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix
     * or an array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3
     * × 3 matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values).
     * Non-square matrix dimensionality is explicit, with the first number representing the number of columns and the
     * second number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2
     * columns and 4 rows (i.e., 8 values). If $transpose is {@see GL41::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL41::GL_TRUE}, each matrix is assumed to be supplied
     * in row major order. The $count argument indicates the number of matrices to be passed. A count of 1 should be
     * used if modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of
     * matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param CData|null $value
     * @return void
     */
    public function programUniformMatrix3x4dv(
        int $program,
        int $location,
        int $count,
        int $transpose,
        ?CData $value
    ): void {
        $__proc = $this->proc('glProgramUniformMatrix3x4dv',
            'void (*)(GLuint program, GLint location, GLsizei count, GLboolean transpose, const GLdouble *value)');
        $__proc($program, $location, $count, $transpose, $value);
    }

    /**
     * {@see GL41::programUniform} modifies the value of a uniform variable or a uniform variable array. The
     * location of the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL41::getUniformLocation}. {@see GL41::programUniform} operates on the program object specified by
     * $program.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform
     * variable specified by $location using the values passed as arguments. The number specified in the command
     * should match the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1}
     * for `float`, `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The
     * suffix {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer
     * values are being passed, and this type should also match the data type of the specified uniform variable. The
     * {@see GL46::i} variants of this function should be used to provide values for uniform variables defined as
     * `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be
     * used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays
     * of these. The {@see GL46::f} variants should be used to provide values for uniform variables of type `float`,
     * `vec2`, `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f}
     * variants may be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or
     * arrays of these. The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be
     * set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL41::programUniform} until
     * the next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable
     * or a uniform variable array. These commands pass a count and a pointer to the values to be loaded into a
     * uniform variable or a uniform variable array. A count of 1 should be used if modifying the value of a single
     * uniform variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When
     * loading n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable
     * array, values for all array elements beyond the end of the array will be ignored. The number specified in the
     * name of the command indicates the number of components for each element in $value, and it should match the
     * number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * {@see GL41::programUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL41::programUniform3f} or {@see GL41::programUniform3fv} can be used to load
     * a uniform variable array of type vec3). The number of elements of the uniform variable array to be modified is
     * specified by $count
     *
     * The commands {@see GL41::programUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix
     * or an array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3
     * × 3 matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values).
     * Non-square matrix dimensionality is explicit, with the first number representing the number of columns and the
     * second number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2
     * columns and 4 rows (i.e., 8 values). If $transpose is {@see GL41::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL41::GL_TRUE}, each matrix is assumed to be supplied
     * in row major order. The $count argument indicates the number of matrices to be passed. A count of 1 should be
     * used if modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of
     * matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param CData|null $value
     * @return void
     */
    public function programUniformMatrix3x4fv(
        int $program,
        int $location,
        int $count,
        int $transpose,
        ?CData $value
    ): void {
        $__proc = $this->proc('glProgramUniformMatrix3x4fv',
            'void (*)(GLuint program, GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $__proc($program, $location, $count, $transpose, $value);
    }

    /**
     * {@see GL41::programUniform} modifies the value of a uniform variable or a uniform variable array. The
     * location of the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL41::getUniformLocation}. {@see GL41::programUniform} operates on the program object specified by
     * $program.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform
     * variable specified by $location using the values passed as arguments. The number specified in the command
     * should match the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1}
     * for `float`, `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The
     * suffix {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer
     * values are being passed, and this type should also match the data type of the specified uniform variable. The
     * {@see GL46::i} variants of this function should be used to provide values for uniform variables defined as
     * `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be
     * used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays
     * of these. The {@see GL46::f} variants should be used to provide values for uniform variables of type `float`,
     * `vec2`, `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f}
     * variants may be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or
     * arrays of these. The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be
     * set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL41::programUniform} until
     * the next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable
     * or a uniform variable array. These commands pass a count and a pointer to the values to be loaded into a
     * uniform variable or a uniform variable array. A count of 1 should be used if modifying the value of a single
     * uniform variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When
     * loading n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable
     * array, values for all array elements beyond the end of the array will be ignored. The number specified in the
     * name of the command indicates the number of components for each element in $value, and it should match the
     * number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * {@see GL41::programUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL41::programUniform3f} or {@see GL41::programUniform3fv} can be used to load
     * a uniform variable array of type vec3). The number of elements of the uniform variable array to be modified is
     * specified by $count
     *
     * The commands {@see GL41::programUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix
     * or an array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3
     * × 3 matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values).
     * Non-square matrix dimensionality is explicit, with the first number representing the number of columns and the
     * second number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2
     * columns and 4 rows (i.e., 8 values). If $transpose is {@see GL41::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL41::GL_TRUE}, each matrix is assumed to be supplied
     * in row major order. The $count argument indicates the number of matrices to be passed. A count of 1 should be
     * used if modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of
     * matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param CData|null $value
     * @return void
     */
    public function programUniformMatrix4dv(
        int $program,
        int $location,
        int $count,
        int $transpose,
        ?CData $value
    ): void {
        $__proc = $this->proc('glProgramUniformMatrix4dv',
            'void (*)(GLuint program, GLint location, GLsizei count, GLboolean transpose, const GLdouble *value)');
        $__proc($program, $location, $count, $transpose, $value);
    }

    /**
     * {@see GL41::programUniform} modifies the value of a uniform variable or a uniform variable array. The
     * location of the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL41::getUniformLocation}. {@see GL41::programUniform} operates on the program object specified by
     * $program.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform
     * variable specified by $location using the values passed as arguments. The number specified in the command
     * should match the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1}
     * for `float`, `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The
     * suffix {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer
     * values are being passed, and this type should also match the data type of the specified uniform variable. The
     * {@see GL46::i} variants of this function should be used to provide values for uniform variables defined as
     * `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be
     * used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays
     * of these. The {@see GL46::f} variants should be used to provide values for uniform variables of type `float`,
     * `vec2`, `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f}
     * variants may be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or
     * arrays of these. The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be
     * set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL41::programUniform} until
     * the next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable
     * or a uniform variable array. These commands pass a count and a pointer to the values to be loaded into a
     * uniform variable or a uniform variable array. A count of 1 should be used if modifying the value of a single
     * uniform variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When
     * loading n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable
     * array, values for all array elements beyond the end of the array will be ignored. The number specified in the
     * name of the command indicates the number of components for each element in $value, and it should match the
     * number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * {@see GL41::programUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL41::programUniform3f} or {@see GL41::programUniform3fv} can be used to load
     * a uniform variable array of type vec3). The number of elements of the uniform variable array to be modified is
     * specified by $count
     *
     * The commands {@see GL41::programUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix
     * or an array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3
     * × 3 matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values).
     * Non-square matrix dimensionality is explicit, with the first number representing the number of columns and the
     * second number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2
     * columns and 4 rows (i.e., 8 values). If $transpose is {@see GL41::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL41::GL_TRUE}, each matrix is assumed to be supplied
     * in row major order. The $count argument indicates the number of matrices to be passed. A count of 1 should be
     * used if modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of
     * matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param CData|null $value
     * @return void
     */
    public function programUniformMatrix4fv(
        int $program,
        int $location,
        int $count,
        int $transpose,
        ?CData $value
    ): void {
        $__proc = $this->proc('glProgramUniformMatrix4fv',
            'void (*)(GLuint program, GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $__proc($program, $location, $count, $transpose, $value);
    }

    /**
     * {@see GL41::programUniform} modifies the value of a uniform variable or a uniform variable array. The
     * location of the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL41::getUniformLocation}. {@see GL41::programUniform} operates on the program object specified by
     * $program.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform
     * variable specified by $location using the values passed as arguments. The number specified in the command
     * should match the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1}
     * for `float`, `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The
     * suffix {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer
     * values are being passed, and this type should also match the data type of the specified uniform variable. The
     * {@see GL46::i} variants of this function should be used to provide values for uniform variables defined as
     * `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be
     * used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays
     * of these. The {@see GL46::f} variants should be used to provide values for uniform variables of type `float`,
     * `vec2`, `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f}
     * variants may be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or
     * arrays of these. The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be
     * set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL41::programUniform} until
     * the next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable
     * or a uniform variable array. These commands pass a count and a pointer to the values to be loaded into a
     * uniform variable or a uniform variable array. A count of 1 should be used if modifying the value of a single
     * uniform variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When
     * loading n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable
     * array, values for all array elements beyond the end of the array will be ignored. The number specified in the
     * name of the command indicates the number of components for each element in $value, and it should match the
     * number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * {@see GL41::programUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL41::programUniform3f} or {@see GL41::programUniform3fv} can be used to load
     * a uniform variable array of type vec3). The number of elements of the uniform variable array to be modified is
     * specified by $count
     *
     * The commands {@see GL41::programUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix
     * or an array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3
     * × 3 matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values).
     * Non-square matrix dimensionality is explicit, with the first number representing the number of columns and the
     * second number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2
     * columns and 4 rows (i.e., 8 values). If $transpose is {@see GL41::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL41::GL_TRUE}, each matrix is assumed to be supplied
     * in row major order. The $count argument indicates the number of matrices to be passed. A count of 1 should be
     * used if modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of
     * matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param CData|null $value
     * @return void
     */
    public function programUniformMatrix4x2dv(
        int $program,
        int $location,
        int $count,
        int $transpose,
        ?CData $value
    ): void {
        $__proc = $this->proc('glProgramUniformMatrix4x2dv',
            'void (*)(GLuint program, GLint location, GLsizei count, GLboolean transpose, const GLdouble *value)');
        $__proc($program, $location, $count, $transpose, $value);
    }

    /**
     * {@see GL41::programUniform} modifies the value of a uniform variable or a uniform variable array. The
     * location of the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL41::getUniformLocation}. {@see GL41::programUniform} operates on the program object specified by
     * $program.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform
     * variable specified by $location using the values passed as arguments. The number specified in the command
     * should match the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1}
     * for `float`, `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The
     * suffix {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer
     * values are being passed, and this type should also match the data type of the specified uniform variable. The
     * {@see GL46::i} variants of this function should be used to provide values for uniform variables defined as
     * `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be
     * used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays
     * of these. The {@see GL46::f} variants should be used to provide values for uniform variables of type `float`,
     * `vec2`, `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f}
     * variants may be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or
     * arrays of these. The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be
     * set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL41::programUniform} until
     * the next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable
     * or a uniform variable array. These commands pass a count and a pointer to the values to be loaded into a
     * uniform variable or a uniform variable array. A count of 1 should be used if modifying the value of a single
     * uniform variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When
     * loading n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable
     * array, values for all array elements beyond the end of the array will be ignored. The number specified in the
     * name of the command indicates the number of components for each element in $value, and it should match the
     * number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * {@see GL41::programUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL41::programUniform3f} or {@see GL41::programUniform3fv} can be used to load
     * a uniform variable array of type vec3). The number of elements of the uniform variable array to be modified is
     * specified by $count
     *
     * The commands {@see GL41::programUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix
     * or an array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3
     * × 3 matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values).
     * Non-square matrix dimensionality is explicit, with the first number representing the number of columns and the
     * second number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2
     * columns and 4 rows (i.e., 8 values). If $transpose is {@see GL41::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL41::GL_TRUE}, each matrix is assumed to be supplied
     * in row major order. The $count argument indicates the number of matrices to be passed. A count of 1 should be
     * used if modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of
     * matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param CData|null $value
     * @return void
     */
    public function programUniformMatrix4x2fv(
        int $program,
        int $location,
        int $count,
        int $transpose,
        ?CData $value
    ): void {
        $__proc = $this->proc('glProgramUniformMatrix4x2fv',
            'void (*)(GLuint program, GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $__proc($program, $location, $count, $transpose, $value);
    }

    /**
     * {@see GL41::programUniform} modifies the value of a uniform variable or a uniform variable array. The
     * location of the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL41::getUniformLocation}. {@see GL41::programUniform} operates on the program object specified by
     * $program.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform
     * variable specified by $location using the values passed as arguments. The number specified in the command
     * should match the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1}
     * for `float`, `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The
     * suffix {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer
     * values are being passed, and this type should also match the data type of the specified uniform variable. The
     * {@see GL46::i} variants of this function should be used to provide values for uniform variables defined as
     * `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be
     * used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays
     * of these. The {@see GL46::f} variants should be used to provide values for uniform variables of type `float`,
     * `vec2`, `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f}
     * variants may be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or
     * arrays of these. The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be
     * set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL41::programUniform} until
     * the next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable
     * or a uniform variable array. These commands pass a count and a pointer to the values to be loaded into a
     * uniform variable or a uniform variable array. A count of 1 should be used if modifying the value of a single
     * uniform variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When
     * loading n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable
     * array, values for all array elements beyond the end of the array will be ignored. The number specified in the
     * name of the command indicates the number of components for each element in $value, and it should match the
     * number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * {@see GL41::programUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL41::programUniform3f} or {@see GL41::programUniform3fv} can be used to load
     * a uniform variable array of type vec3). The number of elements of the uniform variable array to be modified is
     * specified by $count
     *
     * The commands {@see GL41::programUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix
     * or an array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3
     * × 3 matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values).
     * Non-square matrix dimensionality is explicit, with the first number representing the number of columns and the
     * second number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2
     * columns and 4 rows (i.e., 8 values). If $transpose is {@see GL41::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL41::GL_TRUE}, each matrix is assumed to be supplied
     * in row major order. The $count argument indicates the number of matrices to be passed. A count of 1 should be
     * used if modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of
     * matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param CData|null $value
     * @return void
     */
    public function programUniformMatrix4x3dv(
        int $program,
        int $location,
        int $count,
        int $transpose,
        ?CData $value
    ): void {
        $__proc = $this->proc('glProgramUniformMatrix4x3dv',
            'void (*)(GLuint program, GLint location, GLsizei count, GLboolean transpose, const GLdouble *value)');
        $__proc($program, $location, $count, $transpose, $value);
    }

    /**
     * {@see GL41::programUniform} modifies the value of a uniform variable or a uniform variable array. The
     * location of the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL41::getUniformLocation}. {@see GL41::programUniform} operates on the program object specified by
     * $program.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform
     * variable specified by $location using the values passed as arguments. The number specified in the command
     * should match the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1}
     * for `float`, `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The
     * suffix {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer
     * values are being passed, and this type should also match the data type of the specified uniform variable. The
     * {@see GL46::i} variants of this function should be used to provide values for uniform variables defined as
     * `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be
     * used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays
     * of these. The {@see GL46::f} variants should be used to provide values for uniform variables of type `float`,
     * `vec2`, `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f}
     * variants may be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or
     * arrays of these. The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be
     * set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL41::programUniform} until
     * the next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL41::programUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable
     * or a uniform variable array. These commands pass a count and a pointer to the values to be loaded into a
     * uniform variable or a uniform variable array. A count of 1 should be used if modifying the value of a single
     * uniform variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When
     * loading n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable
     * array, values for all array elements beyond the end of the array will be ignored. The number specified in the
     * name of the command indicates the number of components for each element in $value, and it should match the
     * number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * {@see GL41::programUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL41::programUniform3f} or {@see GL41::programUniform3fv} can be used to load
     * a uniform variable array of type vec3). The number of elements of the uniform variable array to be modified is
     * specified by $count
     *
     * The commands {@see GL41::programUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix
     * or an array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3
     * × 3 matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values).
     * Non-square matrix dimensionality is explicit, with the first number representing the number of columns and the
     * second number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2
     * columns and 4 rows (i.e., 8 values). If $transpose is {@see GL41::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL41::GL_TRUE}, each matrix is assumed to be supplied
     * in row major order. The $count argument indicates the number of matrices to be passed. A count of 1 should be
     * used if modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of
     * matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param CData|null $value
     * @return void
     */
    public function programUniformMatrix4x3fv(
        int $program,
        int $location,
        int $count,
        int $transpose,
        ?CData $value
    ): void {
        $__proc = $this->proc('glProgramUniformMatrix4x3fv',
            'void (*)(GLuint program, GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $__proc($program, $location, $count, $transpose, $value);
    }

    /**
     * {@see GL41::releaseShaderCompiler} provides a hint to the implementation that it may free internal resources
     * associated with its shader compiler. {@see GL41::compileShader} may subsequently be called and the
     * implementation may at that time reallocate resources previously freed by the call to
     * {@see GL41::releaseShaderCompiler}.
     *
     * @see http://docs.gl/gl4/glReleaseShaderCompiler
     * @since 4.1
     * @return void
     */
    public function releaseShaderCompiler(): void
    {
        $__proc = $this->proc('glReleaseShaderCompiler', 'void (*)()');
        $__proc();
    }

    /**
     * {@see GL41::scissorArrayv} defines rectangles, called scissor boxes, in window coordinates for each
     * viewport. $first specifies the index of the first scissor box to modify and $count specifies the number of
     * scissor boxes to modify. $first must be less than the value of {@see GL41::GL_MAX_VIEWPORTS}, and $first +
     * $count must be less than or equal to the value of {@see GL41::GL_MAX_VIEWPORTS}. $v specifies the address of
     * an array containing integers specifying the lower left corner of the scissor boxes, and the width and height
     * of the scissor boxes, in that order.
     *
     * To enable and disable the scissor test, call {@see GL41::enable} and  {@see GL41::disable} with argument
     * {@see GL41::GL_SCISSOR_TEST}. The test is initially disabled for all viewports. While the test is enabled,
     * only pixels that lie within the scissor box can be modified by drawing commands. Window coordinates have
     * integer values at the shared corners of frame buffer pixels. `glScissor(0,0,1,1)` allows modification of only
     * the lower left pixel in the window, and `glScissor(0,0,0,0)` doesn't allow modification of any pixels in the
     * window.
     *
     * When the scissor test is disabled, it is as though the scissor box includes the entire window.
     *
     * @see http://docs.gl/gl4/glScissorArray
     * @since 4.1
     * @param int $first
     * @param int $count
     * @param CData|null $v
     * @return void
     */
    public function scissorArrayv(int $first, int $count, ?CData $v): void
    {
        $__proc = $this->proc('glScissorArrayv', 'void (*)(GLuint first, GLsizei count, const GLint *v)');
        $__proc($first, $count, $v);
    }

    /**
     * {@see GL41::scissorIndexed} defines the scissor box for a specified viewport. $index specifies the index of
     * scissor box to modify. $index must be less than the value of {@see GL41::GL_MAX_VIEWPORTS}. For
     * {@see GL41::scissorIndexed}, $left, $bottom, $width and $height specify the left, bottom, width and height
     * of the scissor box, in pixels, respectively. For {@see GL41::scissorIndexedv}, $v specifies the address of
     * an array containing integers specifying the lower left corner of the scissor box, and the width and height of
     * the scissor box, in that order.
     *
     * To enable and disable the scissor test, call {@see GL41::enable} and  {@see GL41::disable} with argument
     * {@see GL41::GL_SCISSOR_TEST}. The test is initially disabled for all viewports. While the test is enabled,
     * only pixels that lie within the scissor box can be modified by drawing commands. Window coordinates have
     * integer values at the shared corners of frame buffer pixels. `glScissor(0,0,1,1)` allows modification of only
     * the lower left pixel in the window, and `glScissor(0,0,0,0)` doesn't allow modification of any pixels in the
     * window.
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
    public function scissorIndexed(int $index, int $left, int $bottom, int $width, int $height): void
    {
        $__proc = $this->proc('glScissorIndexed',
            'void (*)(GLuint index, GLint left, GLint bottom, GLsizei width, GLsizei height)');
        $__proc($index, $left, $bottom, $width, $height);
    }

    /**
     * {@see GL41::scissorIndexed} defines the scissor box for a specified viewport. $index specifies the index of
     * scissor box to modify. $index must be less than the value of {@see GL41::GL_MAX_VIEWPORTS}. For
     * {@see GL41::scissorIndexed}, $left, $bottom, $width and $height specify the left, bottom, width and height
     * of the scissor box, in pixels, respectively. For {@see GL41::scissorIndexedv}, $v specifies the address of
     * an array containing integers specifying the lower left corner of the scissor box, and the width and height of
     * the scissor box, in that order.
     *
     * To enable and disable the scissor test, call {@see GL41::enable} and  {@see GL41::disable} with argument
     * {@see GL41::GL_SCISSOR_TEST}. The test is initially disabled for all viewports. While the test is enabled,
     * only pixels that lie within the scissor box can be modified by drawing commands. Window coordinates have
     * integer values at the shared corners of frame buffer pixels. `glScissor(0,0,1,1)` allows modification of only
     * the lower left pixel in the window, and `glScissor(0,0,0,0)` doesn't allow modification of any pixels in the
     * window.
     *
     * When the scissor test is disabled, it is as though the scissor box includes the entire window.
     *
     * @see http://docs.gl/gl4/glScissorIndexed
     * @since 4.1
     * @param int $index
     * @param CData|null $v
     * @return void
     */
    public function scissorIndexedv(int $index, ?CData $v): void
    {
        $__proc = $this->proc('glScissorIndexedv', 'void (*)(GLuint index, const GLint *v)');
        $__proc($index, $v);
    }

    /**
     * {@see GL41::shaderBinary} loads pre-compiled shader binary code into the $count shader objects whose handles
     * are given in $shaders. $binary points to $length bytes of binary shader code stored in client memory.
     * $binaryFormat specifies the format of the pre-compiled code.
     *
     * The binary image contained in $binary will be decoded according to the extension specification defining the
     * specified $binaryFormat token. OpenGL does not define any specific binary formats, but it does provide a
     * mechanism to obtain token vaues for such formats provided by such extensions.
     *
     * Depending on the types of the shader objects in $shaders, {@see GL41::shaderBinary} will individually load
     * binary vertex or fragment shaders, or load an executable binary that contains an optimized pair of vertex and
     * fragment shaders stored in the same binary.
     *
     * @see http://docs.gl/gl4/glShaderBinary
     * @since 4.1
     * @param int $count
     * @param CData|null $shaders
     * @param int $binaryformat
     * @param CData|null $binary
     * @param int $length
     * @return void
     */
    public function shaderBinary(
        int $count,
        ?CData $shaders,
        int $binaryformat,
        ?CData $binary,
        int $length
    ): void {
        $__proc = $this->proc('glShaderBinary',
            'void (*)(GLsizei count, const GLuint *shaders, GLenum binaryformat, const void *binary, GLsizei length)');
        $__proc($count, $shaders, $binaryformat, $binary, $length);
    }

    /**
     * {@see GL41::useProgramStages} binds executables from a program object associated with a specified set of
     * shader stages to the program pipeline object given by $pipeline. $pipeline specifies the program pipeline
     * object to which to bind the executables. $stages contains a logical combination of bits indicating the shader
     * stages to use within $program with the program pipeline object $pipeline. $stages must be a logical
     * combination of {@see GL41::GL_VERTEX_SHADER_BIT}, {@see GL41::GL_TESS_CONTROL_SHADER_BIT},
     * {@see GL41::GL_TESS_EVALUATION_SHADER_BIT}, {@see GL41::GL_GEOMETRY_SHADER_BIT},
     * {@see GL41::GL_FRAGMENT_SHADER_BIT} and {@see GL41::GL_COMPUTE_SHADER_BIT}. Additionally, the special value
     * {@see GL41::GL_ALL_SHADER_BITS} may be specified to indicate that all executables contained in $program should
     * be installed in $pipeline.
     *
     * If $program refers to a program object with a valid shader attached for an indicated shader stage,
     * {@see GL41::useProgramStages} installs the executable code for that stage in the indicated program pipeline
     * object $pipeline. If $program is zero, or refers to a program object with no valid shader executable for a
     * given stage, it is as if the pipeline object has no programmable stage configured for the indicated shader
     * stages. If $stages contains bits other than those listed above, and is not equal to
     * {@see GL41::GL_ALL_SHADER_BITS}, an error is generated.
     *
     * @see http://docs.gl/gl4/glUseProgramStages
     * @since 4.1
     * @param int $pipeline
     * @param int $stages
     * @param int $program
     * @return void
     */
    public function useProgramStages(int $pipeline, int $stages, int $program): void
    {
        $__proc = $this->proc('glUseProgramStages',
            'void (*)(GLuint pipeline, GLbitfield stages, GLuint program)');
        $__proc($pipeline, $stages, $program);
    }

    /**
     * {@see GL41::validateProgramPipeline} instructs the implementation to validate the shader executables
     * contained in $pipeline against the current GL state. The implementation may use this as an opportunity to
     * perform any internal shader modifications that may be required to ensure correct operation of the installed
     * shaders given the current GL state.
     *
     * After a program pipeline has been validated, its validation status is set to {@see GL41::GL_TRUE}. The
     * validation status of a program pipeline object may be queried by calling {@see GL41::getProgramPipeline}
     * with parameter {@see GL41::GL_VALIDATE_STATUS}.
     *
     * If $pipeline is a name previously returned from a call to {@see GL41::genProgramPipelines} but that has not
     * yet been bound by a call to {@see GL41::bindProgramPipeline}, a new program pipeline object is created with
     * name $pipeline and the default state vector.
     *
     * @see http://docs.gl/gl4/glValidateProgramPipeline
     * @since 4.1
     * @param int $pipeline
     * @return void
     */
    public function validateProgramPipeline(int $pipeline): void
    {
        $__proc = $this->proc('glValidateProgramPipeline', 'void (*)(GLuint pipeline)');
        $__proc($pipeline);
    }

    /**
     * The {@see GL41::vertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL41::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL41::vertexAttrib} call that specifies the index of the element to be modified and a value for that
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
     * types may be loaded using the {@see GL41::vertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL41::bindAttribLocation}. This allows an application to use more descriptive variable names
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
     * @since 4.1
     * @param int $index
     * @param float $x
     * @return void
     */
    public function vertexAttribL1d(int $index, float $x): void
    {
        $__proc = $this->proc('glVertexAttribL1d', 'void (*)(GLuint index, GLdouble x)');
        $__proc($index, $x);
    }

    /**
     * The {@see GL41::vertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL41::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL41::vertexAttrib} call that specifies the index of the element to be modified and a value for that
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
     * types may be loaded using the {@see GL41::vertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL41::bindAttribLocation}. This allows an application to use more descriptive variable names
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
     * @since 4.1
     * @param int $index
     * @param CData|null $v
     * @return void
     */
    public function vertexAttribL1dv(int $index, ?CData $v): void
    {
        $__proc = $this->proc('glVertexAttribL1dv', 'void (*)(GLuint index, const GLdouble *v)');
        $__proc($index, $v);
    }

    /**
     * The {@see GL41::vertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL41::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL41::vertexAttrib} call that specifies the index of the element to be modified and a value for that
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
     * types may be loaded using the {@see GL41::vertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL41::bindAttribLocation}. This allows an application to use more descriptive variable names
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
     * @since 4.1
     * @param int $index
     * @param float $x
     * @param float $y
     * @return void
     */
    public function vertexAttribL2d(int $index, float $x, float $y): void
    {
        $__proc = $this->proc('glVertexAttribL2d', 'void (*)(GLuint index, GLdouble x, GLdouble y)');
        $__proc($index, $x, $y);
    }

    /**
     * The {@see GL41::vertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL41::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL41::vertexAttrib} call that specifies the index of the element to be modified and a value for that
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
     * types may be loaded using the {@see GL41::vertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL41::bindAttribLocation}. This allows an application to use more descriptive variable names
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
     * @since 4.1
     * @param int $index
     * @param CData|null $v
     * @return void
     */
    public function vertexAttribL2dv(int $index, ?CData $v): void
    {
        $__proc = $this->proc('glVertexAttribL2dv', 'void (*)(GLuint index, const GLdouble *v)');
        $__proc($index, $v);
    }

    /**
     * The {@see GL41::vertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL41::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL41::vertexAttrib} call that specifies the index of the element to be modified and a value for that
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
     * types may be loaded using the {@see GL41::vertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL41::bindAttribLocation}. This allows an application to use more descriptive variable names
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
     * @since 4.1
     * @param int $index
     * @param float $x
     * @param float $y
     * @param float $z
     * @return void
     */
    public function vertexAttribL3d(int $index, float $x, float $y, float $z): void
    {
        $__proc = $this->proc('glVertexAttribL3d', 'void (*)(GLuint index, GLdouble x, GLdouble y, GLdouble z)');
        $__proc($index, $x, $y, $z);
    }

    /**
     * The {@see GL41::vertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL41::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL41::vertexAttrib} call that specifies the index of the element to be modified and a value for that
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
     * types may be loaded using the {@see GL41::vertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL41::bindAttribLocation}. This allows an application to use more descriptive variable names
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
     * @since 4.1
     * @param int $index
     * @param CData|null $v
     * @return void
     */
    public function vertexAttribL3dv(int $index, ?CData $v): void
    {
        $__proc = $this->proc('glVertexAttribL3dv', 'void (*)(GLuint index, const GLdouble *v)');
        $__proc($index, $v);
    }

    /**
     * The {@see GL41::vertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL41::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL41::vertexAttrib} call that specifies the index of the element to be modified and a value for that
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
     * types may be loaded using the {@see GL41::vertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL41::bindAttribLocation}. This allows an application to use more descriptive variable names
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
     * @since 4.1
     * @param int $index
     * @param float $x
     * @param float $y
     * @param float $z
     * @param float $w
     * @return void
     */
    public function vertexAttribL4d(int $index, float $x, float $y, float $z, float $w): void
    {
        $__proc = $this->proc('glVertexAttribL4d',
            'void (*)(GLuint index, GLdouble x, GLdouble y, GLdouble z, GLdouble w)');
        $__proc($index, $x, $y, $z, $w);
    }

    /**
     * The {@see GL41::vertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL41::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL41::vertexAttrib} call that specifies the index of the element to be modified and a value for that
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
     * types may be loaded using the {@see GL41::vertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL41::bindAttribLocation}. This allows an application to use more descriptive variable names
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
     * @since 4.1
     * @param int $index
     * @param CData|null $v
     * @return void
     */
    public function vertexAttribL4dv(int $index, ?CData $v): void
    {
        $__proc = $this->proc('glVertexAttribL4dv', 'void (*)(GLuint index, const GLdouble *v)');
        $__proc($index, $v);
    }

    /**
     * {@see GL41::vertexAttribPointer}, {@see GL41::vertexAttribIPointer} and
     * {@see GL41::vertexAttribLPointer} specify the location and data format of the array of generic vertex
     * attributes at index $index to use when rendering. $size specifies the number of components per attribute and
     * must be 1, 2, 3, 4, or {@see GL41::GL_BGRA}. $type specifies the data type of each component, and $stride
     * specifies the byte stride from one attribute to the next, allowing vertices and attributes to be packed into a
     * single array or stored in separate arrays.
     *
     * For {@see GL41::vertexAttribPointer}, if $normalized is set to {@see GL41::GL_TRUE}, it indicates that
     * values stored in an integer format are to be mapped to the range [-1,1] (for signed values) or [0,1] (for
     * unsigned values) when they are accessed and converted to floating point. Otherwise, values will be converted
     * to floats directly without normalization.
     *
     * For {@see GL41::vertexAttribIPointer}, only the integer types {@see GL41::GL_BYTE},
     * {@see GL41::GL_UNSIGNED_BYTE}, {@see GL41::GL_SHORT}, {@see GL41::GL_UNSIGNED_SHORT}, {@see GL41::GL_INT},
     * {@see GL41::GL_UNSIGNED_INT} are accepted. Values are always left as integer values.
     *
     * {@see GL41::vertexAttribLPointer} specifies state for a generic vertex attribute array associated with a
     * shader attribute variable declared with 64-bit double precision components. $type must be
     * {@see GL41::GL_DOUBLE}. $index, $size, and $stride behave as described for {@see GL41::vertexAttribPointer}
     * and {@see GL41::vertexAttribIPointer}.
     *
     * If $pointer is not `NULL`, a non-zero named buffer object must be bound to the {@see GL41::GL_ARRAY_BUFFER}
     * target (see {@see GL41::bindBuffer}), otherwise an error is generated. $pointer is treated as a byte offset
     * into the buffer object's data store. The buffer object binding ({@see GL41::GL_ARRAY_BUFFER_BINDING}) is saved
     * as generic vertex attribute array state ({@see GL41::GL_VERTEX_ATTRIB_ARRAY_BUFFER_BINDING}) for index $index.
     *
     * When a generic vertex attribute array is specified, $size, $type, $normalized, $stride, and $pointer are saved
     * as vertex array state, in addition to the current vertex array buffer object binding.
     *
     * To enable and disable a generic vertex attribute array, call {@see GL41::enableVertexAttribArray} and
     * {@see GL41::disableVertexAttribArray} with $index. If enabled, the generic vertex attribute array is used
     * when {@see GL41::drawArrays}, {@see GL41::multiDrawArrays}, {@see GL41::drawElements},
     * {@see GL41::multiDrawElements}, or {@see GL41::drawRangeElements} is called.
     *
     * @see http://docs.gl/gl2/glVertexAttribPointer
     * @see http://docs.gl/gl4/glVertexAttribPointer
     * @since 4.1
     * @param int $index
     * @param int $size
     * @param int $type
     * @param int $stride
     * @param CData|null $pointer
     * @return void
     */
    public function vertexAttribLPointer(int $index, int $size, int $type, int $stride, ?CData $pointer): void
    {
        $__proc = $this->proc('glVertexAttribLPointer',
            'void (*)(GLuint index, GLint size, GLenum type, GLsizei stride, const void *pointer)');
        $__proc($index, $size, $type, $stride, $pointer);
    }

    /**
     * {@see GL41::viewportArrayv} specifies the parameters for multiple viewports simulataneously. $first
     * specifies the index of the first viewport to modify and $count specifies the number of viewports to modify.
     * $first must be less than the value of {@see GL41::GL_MAX_VIEWPORTS}, and $first + $count must be less than or
     * equal to the value of {@see GL41::GL_MAX_VIEWPORTS}. Viewports whose indices lie outside the range [$first,
     * $first + $count) are not modified. $v contains the address of an array of floating point values specifying the
     * left (x), bottom (y), width (w), and height (h) of each viewport, in that order. x and y give the location of
     * the viewport's lower left corner, and w and h give the width and height of the viewport, respectively. The
     * viewport specifies the affine transformation of x and y from normalized device coordinates to window
     * coordinates. Let    x nd  y nd    be normalized device coordinates. Then the window coordinates    x w  y w
     * are computed as follows:
     *
     *    x w  =    x nd  + 1   &amp;it;   width 2   + x
     *
     *    y w  =    y nd  + 1   &amp;it;   height 2   + y
     *
     * The location of the viewport's bottom left corner, given by (x, y) is clamped to be within the
     * implementaiton-dependent viewport bounds range. The viewport bounds range [min, max] can be determined by
     * calling {@see GL41::get} with argument {@see GL41::GL_VIEWPORT_BOUNDS_RANGE}. Viewport width and height are
     * silently clamped to a range that depends on the implementation. To query this range, call {@see GL41::get}
     * with argument {@see GL41::GL_MAX_VIEWPORT_DIMS}.
     *
     * The precision with which the GL interprets the floating point viewport bounds is implementation-dependent and
     * may be determined by querying the impementation-defined constant {@see GL41::GL_VIEWPORT_SUBPIXEL_BITS}.
     *
     * @see http://docs.gl/gl4/glViewportArray
     * @since 4.1
     * @param int $first
     * @param int $count
     * @param CData|null $v
     * @return void
     */
    public function viewportArrayv(int $first, int $count, ?CData $v): void
    {
        $__proc = $this->proc('glViewportArrayv', 'void (*)(GLuint first, GLsizei count, const GLfloat *v)');
        $__proc($first, $count, $v);
    }

    /**
     * {@see GL41::viewportIndexedf} and {@see GL41::viewportIndexedfv} specify the parameters for a single
     * viewport. $index specifies the index of the viewport to modify. $index must be less than the value of
     * {@see GL41::GL_MAX_VIEWPORTS}. For {@see GL41::viewportIndexedf}, $x, $y, $w, and $h specify the left,
     * bottom, width and height of the viewport in pixels, respectively. For {@see GL41::viewportIndexedfv}, $v
     * contains the address of an array of floating point values specifying the left (x), bottom (y), width (w), and
     * height (h) of each viewport, in that order. x and y give the location of the viewport's lower left corner, and
     * w and h give the width and height of the viewport, respectively. The viewport specifies the affine
     * transformation of x and y from normalized device coordinates to window coordinates. Let    x nd  y nd    be
     * normalized device coordinates. Then the window coordinates    x w  y w    are computed as follows:
     *
     *    x w  =    x nd  + 1   &amp;it;   width 2   + x
     *
     *    y w  =    y nd  + 1   &amp;it;   height 2   + y
     *
     * The location of the viewport's bottom left corner, given by (x, y) is clamped to be within the
     * implementaiton-dependent viewport bounds range. The viewport bounds range [min, max] can be determined by
     * calling {@see GL41::get} with argument {@see GL41::GL_VIEWPORT_BOUNDS_RANGE}. Viewport width and height are
     * silently clamped to a range that depends on the implementation. To query this range, call {@see GL41::get}
     * with argument {@see GL41::GL_MAX_VIEWPORT_DIMS}.
     *
     * The precision with which the GL interprets the floating point viewport bounds is implementation-dependent and
     * may be determined by querying the impementation-defined constant {@see GL41::GL_VIEWPORT_SUBPIXEL_BITS}.
     *
     * Calling {@see GL41::viewportIndexedfv} is equivalent to calling {@see GL41::viewportArray} with $first set
     * to $index, $count set to 1 and $v passsed directly. {@see GL41::viewportIndexedf} is equivalent to:
     *
     * <code>
     *     void glViewportIndexedf(GLuint index, GLfloat x, GLfloat y, GLfloat w, GLfloat h) {
     *         const float v[4]  = { x, y, w, h };
     *         glViewportArrayv(index, 1, v);
     *     }
     * </code>
     *
     * @see http://docs.gl/gl4/glViewportIndexed
     * @since 4.1
     * @param int $index
     * @param float $x
     * @param float $y
     * @param float $w
     * @param float $h
     * @return void
     */
    public function viewportIndexedf(int $index, float $x, float $y, float $w, float $h): void
    {
        $__proc = $this->proc('glViewportIndexedf',
            'void (*)(GLuint index, GLfloat x, GLfloat y, GLfloat w, GLfloat h)');
        $__proc($index, $x, $y, $w, $h);
    }

    /**
     * {@see GL41::viewportIndexedf} and {@see GL41::viewportIndexedfv} specify the parameters for a single
     * viewport. $index specifies the index of the viewport to modify. $index must be less than the value of
     * {@see GL41::GL_MAX_VIEWPORTS}. For {@see GL41::viewportIndexedf}, $x, $y, $w, and $h specify the left,
     * bottom, width and height of the viewport in pixels, respectively. For {@see GL41::viewportIndexedfv}, $v
     * contains the address of an array of floating point values specifying the left (x), bottom (y), width (w), and
     * height (h) of each viewport, in that order. x and y give the location of the viewport's lower left corner, and
     * w and h give the width and height of the viewport, respectively. The viewport specifies the affine
     * transformation of x and y from normalized device coordinates to window coordinates. Let    x nd  y nd    be
     * normalized device coordinates. Then the window coordinates    x w  y w    are computed as follows:
     *
     *    x w  =    x nd  + 1   &amp;it;   width 2   + x
     *
     *    y w  =    y nd  + 1   &amp;it;   height 2   + y
     *
     * The location of the viewport's bottom left corner, given by (x, y) is clamped to be within the
     * implementaiton-dependent viewport bounds range. The viewport bounds range [min, max] can be determined by
     * calling {@see GL41::get} with argument {@see GL41::GL_VIEWPORT_BOUNDS_RANGE}. Viewport width and height are
     * silently clamped to a range that depends on the implementation. To query this range, call {@see GL41::get}
     * with argument {@see GL41::GL_MAX_VIEWPORT_DIMS}.
     *
     * The precision with which the GL interprets the floating point viewport bounds is implementation-dependent and
     * may be determined by querying the impementation-defined constant {@see GL41::GL_VIEWPORT_SUBPIXEL_BITS}.
     *
     * Calling {@see GL41::viewportIndexedfv} is equivalent to calling {@see GL41::viewportArray} with $first set
     * to $index, $count set to 1 and $v passsed directly. {@see GL41::viewportIndexedf} is equivalent to:
     *
     * <code>
     *     void glViewportIndexedf(GLuint index, GLfloat x, GLfloat y, GLfloat w, GLfloat h) {
     *         const float v[4]  = { x, y, w, h };
     *         glViewportArrayv(index, 1, v);
     *     }
     * </code>
     *
     * @see http://docs.gl/gl4/glViewportIndexed
     * @since 4.1
     * @param int $index
     * @param CData|null $v
     * @return void
     */
    public function viewportIndexedfv(int $index, ?CData $v): void
    {
        $__proc = $this->proc('glViewportIndexedfv', 'void (*)(GLuint index, const GLfloat *v)');
        $__proc($index, $v);
    }
}
