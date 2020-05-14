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
 * The OpenGL functionality up to version 1.5. Includes the deprecated symbols of the Compatibility Profile.
 *
 * Extensions promoted to core in this release:
 *
 * - ARB_vertex_buffer_object @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_vertex_buffer_object.txt
 * - ARB_occlusion_query @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_occlusion_query.txt
 * - EXT_shadow_funcs @see https://www.khronos.org/registry/OpenGL/extensions/EXT/EXT_shadow_funcs.txt
 *
 * @version 1.5
 */
class GL15 extends GL14
{
    /**
     * New token names.
     *
     * @since 1.5
     * @var int
     */
    public const
        GL_FOG_COORD_SRC = 0x8450,
        GL_FOG_COORD = 0x8451,
        GL_CURRENT_FOG_COORD = 0x8453,
        GL_FOG_COORD_ARRAY_TYPE = 0x8454,
        GL_FOG_COORD_ARRAY_STRIDE = 0x8455,
        GL_FOG_COORD_ARRAY_POINTER = 0x8456,
        GL_FOG_COORD_ARRAY = 0x8457,
        GL_FOG_COORD_ARRAY_BUFFER_BINDING = 0x889D,
        GL_SRC0_RGB = 0x8580,
        GL_SRC1_RGB = 0x8581,
        GL_SRC2_RGB = 0x8582,
        GL_SRC0_ALPHA = 0x8588,
        GL_SRC1_ALPHA = 0x8589,
        GL_SRC2_ALPHA = 0x858A;

    /**
     * Accepted by the $target parameters of BindBuffer, BufferData, BufferSubData, MapBuffer, UnmapBuffer,
     * GetBufferSubData, GetBufferParameteriv, and GetBufferPointerv.
     *
     * @since 1.5
     * @var int
     */
    public const
        GL_ARRAY_BUFFER = 0x8892,
        GL_ELEMENT_ARRAY_BUFFER = 0x8893;

    /**
     * Accepted by the $pname parameter of GetBooleanv, GetIntegerv, GetFloatv, and GetDoublev.
     *
     * @since 1.5
     * @var int
     */
    public const
        GL_ARRAY_BUFFER_BINDING = 0x8894,
        GL_ELEMENT_ARRAY_BUFFER_BINDING = 0x8895,
        GL_VERTEX_ARRAY_BUFFER_BINDING = 0x8896,
        GL_NORMAL_ARRAY_BUFFER_BINDING = 0x8897,
        GL_COLOR_ARRAY_BUFFER_BINDING = 0x8898,
        GL_INDEX_ARRAY_BUFFER_BINDING = 0x8899,
        GL_TEXTURE_COORD_ARRAY_BUFFER_BINDING = 0x889A,
        GL_EDGE_FLAG_ARRAY_BUFFER_BINDING = 0x889B,
        GL_SECONDARY_COLOR_ARRAY_BUFFER_BINDING = 0x889C,
        GL_FOG_COORDINATE_ARRAY_BUFFER_BINDING = 0x889D,
        GL_WEIGHT_ARRAY_BUFFER_BINDING = 0x889E;

    /**
     * Accepted by the $pname parameter of GetVertexAttribiv.
     *
     * @since 1.5
     * @var int
     */
    public const GL_VERTEX_ATTRIB_ARRAY_BUFFER_BINDING = 0x889F;

    /**
     * Accepted by the $usage parameter of BufferData.
     *
     * @since 1.5
     * @var int
     */
    public const
        GL_STREAM_DRAW = 0x88E0,
        GL_STREAM_READ = 0x88E1,
        GL_STREAM_COPY = 0x88E2,
        GL_STATIC_DRAW = 0x88E4,
        GL_STATIC_READ = 0x88E5,
        GL_STATIC_COPY = 0x88E6,
        GL_DYNAMIC_DRAW = 0x88E8,
        GL_DYNAMIC_READ = 0x88E9,
        GL_DYNAMIC_COPY = 0x88EA;

    /**
     * Accepted by the $access parameter of MapBuffer.
     *
     * @since 1.5
     * @var int
     */
    public const
        GL_READ_ONLY = 0x88B8,
        GL_WRITE_ONLY = 0x88B9,
        GL_READ_WRITE = 0x88BA;

    /**
     * Accepted by the $pname parameter of GetBufferParameteriv.
     *
     * @since 1.5
     * @var int
     */
    public const
        GL_BUFFER_SIZE = 0x8764,
        GL_BUFFER_USAGE = 0x8765,
        GL_BUFFER_ACCESS = 0x88BB,
        GL_BUFFER_MAPPED = 0x88BC;

    /**
     * Accepted by the $pname parameter of GetBufferPointerv.
     *
     * @since 1.5
     * @var int
     */
    public const GL_BUFFER_MAP_POINTER = 0x88BD;

    /**
     * Accepted by the $target parameter of BeginQuery, EndQuery, and GetQueryiv.
     *
     * @since 1.5
     * @var int
     */
    public const GL_SAMPLES_PASSED = 0x8914;

    /**
     * Accepted by the $pname parameter of GetQueryiv.
     *
     * @since 1.5
     * @var int
     */
    public const
        GL_QUERY_COUNTER_BITS = 0x8864,
        GL_CURRENT_QUERY = 0x8865;

    /**
     * Accepted by the $pname parameter of GetQueryObjectiv and GetQueryObjectuiv.
     *
     * @since 1.5
     * @var int
     */
    public const
        GL_QUERY_RESULT = 0x8866,
        GL_QUERY_RESULT_AVAILABLE = 0x8867;


    /**
     * {@see GL15::beginQuery} and  {@see GL15::endQuery} delimit the boundaries of a query object. $query must
     * be a name previously returned from a call to {@see GL15::genQueries}. If a query object with name $id does
     * not yet exist it is created with the type determined by $target. $target must be one of
     * {@see GL15::GL_SAMPLES_PASSED}, {@see GL15::GL_ANY_SAMPLES_PASSED}, {@see GL15::GL_PRIMITIVES_GENERATED},
     * {@see GL15::GL_TRANSFORM_FEEDBACK_PRIMITIVES_WRITTEN}, or {@see GL15::GL_TIME_ELAPSED}. The behavior of the
     * query object depends on its type and is as follows.
     *
     * If $target is {@see GL15::GL_SAMPLES_PASSED}, $id must be an unused name, or the name of an existing occlusion
     * query object. When {@see GL15::beginQuery} is executed, the query object's samples-passed counter is reset
     * to 0. Subsequent rendering will increment the counter for every sample that passes the depth test. If the
     * value of {@see GL15::GL_SAMPLE_BUFFERS} is 0, then the samples-passed count is incremented by 1 for each
     * fragment. If the value of {@see GL15::GL_SAMPLE_BUFFERS} is 1, then the samples-passed count is incremented by
     * the number of samples whose coverage bit is set. However, implementations, at their discression may instead
     * increase the samples-passed count by the value of {@see GL15::GL_SAMPLES} if any sample in the fragment is
     * covered. When {@see GL15::endQuery} is executed, the samples-passed counter is assigned to the query
     * object's result value. This value can be queried by calling {@see GL15::getQueryObject} with $pname
     * {@see GL15::GL_QUERY_RESULT}.
     *
     * If $target is {@see GL15::GL_ANY_SAMPLES_PASSED} or {@see GL15::GL_ANY_SAMPLES_PASSED_CONSERVATIVE}, $id must
     * be an unused name, or the name of an existing boolean occlusion query object. When {@see GL15::beginQuery}
     * is executed, the query object's samples-passed flag is reset to {@see GL15::GL_FALSE}. Subsequent rendering
     * causes the flag to be set to {@see GL15::GL_TRUE} if any sample passes the depth test in the case of
     * {@see GL15::GL_ANY_SAMPLES_PASSED}, or if the implementation determines that any sample might pass the depth
     * test in the case of {@see GL15::GL_ANY_SAMPLES_PASSED_CONSERVATIVE}. The implementation may be able to provide
     * a more efficient test in the case of {@see GL15::GL_ANY_SAMPLES_PASSED_CONSERVATIVE} if some false positives
     * are acceptable to the application. When {@see GL15::endQuery} is executed, the samples-passed flag is
     * assigned to the query object's result value. This value can be queried by calling
     * {@see GL15::getQueryObject} with $pname {@see GL15::GL_QUERY_RESULT}.
     *
     * If $target is {@see GL15::GL_PRIMITIVES_GENERATED}, $id must be an unused name, or the name of an existing
     * primitive query object previously bound to the {@see GL15::GL_PRIMITIVES_GENERATED} query binding. When
     * {@see GL15::beginQuery} is executed, the query object's primitives-generated counter is reset to 0.
     * Subsequent rendering will increment the counter once for every vertex that is emitted from the geometry
     * shader, or from the vertex shader if no geometry shader is present. When {@see GL15::endQuery} is executed,
     * the primitives-generated counter is assigned to the query object's result value. This value can be queried by
     * calling {@see GL15::getQueryObject} with $pname {@see GL15::GL_QUERY_RESULT}.
     *
     * If $target is {@see GL15::GL_TRANSFORM_FEEDBACK_PRIMITIVES_WRITTEN}, $id must be an unused name, or the name
     * of an existing primitive query object previously bound to the
     * {@see GL15::GL_TRANSFORM_FEEDBACK_PRIMITIVES_WRITTEN} query binding. When {@see GL15::beginQuery} is
     * executed, the query object's primitives-written counter is reset to 0. Subsequent rendering will increment the
     * counter once for every vertex that is written into the bound transform feedback buffer(s). If transform
     * feedback mode is not activated between the call to {@see GL15::beginQuery} and {@see GL15::endQuery}, the
     * counter will not be incremented. When {@see GL15::endQuery} is executed, the primitives-written counter is
     * assigned to the query object's result value. This value can be queried by calling
     * {@see GL15::getQueryObject} with $pname {@see GL15::GL_QUERY_RESULT}.
     *
     * If $target is {@see GL15::GL_TIME_ELAPSED}, $id must be an unused name, or the name of an existing timer query
     * object previously bound to the {@see GL15::GL_TIME_ELAPSED} query binding. When {@see GL15::beginQuery} is
     * executed, the query object's time counter is reset to 0. When {@see GL15::endQuery} is executed, the elapsed
     * server time that has passed since the call to {@see GL15::beginQuery} is written into the query object's
     * time counter. This value can be queried by calling {@see GL15::getQueryObject} with $pname
     * {@see GL15::GL_QUERY_RESULT}.
     *
     * Querying the {@see GL15::GL_QUERY_RESULT} implicitly flushes the GL pipeline until the rendering delimited by
     * the query object has completed and the result is available. {@see GL15::GL_QUERY_RESULT_AVAILABLE} can be
     * queried to determine if the result is immediately available or if the rendering is not yet complete.
     *
     * @see http://docs.gl/gl2/glBeginQuery
     * @see http://docs.gl/gl4/glBeginQuery
     * @since 1.5
     * @param int $target
     * @param int $id
     * @return void
     */
    public function beginQuery(int $target, int $id): void
    {
        $__proc = $this->proc('glBeginQuery', 'void (*)(GLenum target, GLuint id)');
        $__proc($target, $id);
    }

    /**
     * {@see GL15::bindBuffer} binds a buffer object to the specified buffer binding point. Calling
     * {@see GL15::bindBuffer} with $target set to one of the accepted symbolic constants and $buffer set to the
     * name of a buffer object binds that buffer object name to the target. If no buffer object with name $buffer
     * exists, one is created with that name. When a buffer object is bound to a target, the previous binding for
     * that target is automatically broken.
     *
     * Buffer object names are unsigned integers. The value zero is reserved, but there is no default buffer object
     * for each buffer object target. Instead, $buffer set to zero effectively unbinds any buffer object previously
     * bound, and restores client memory usage for that buffer object target (if supported for that target). Buffer
     * object names and the corresponding buffer object contents are local to the shared object space of the current
     * GL rendering context; two rendering contexts share buffer object names only if they explicitly enable sharing
     * between contexts through the appropriate GL windows interfaces functions.
     *
     * {@see GL15::genBuffers} must be used to generate a set of unused buffer object names.
     *
     * The state of a buffer object immediately after it is first bound is an unmapped zero-sized memory buffer with
     * {@see GL15::GL_READ_WRITE} access and {@see GL15::GL_STATIC_DRAW} usage.
     *
     * While a non-zero buffer object name is bound, GL operations on the target to which it is bound affect the
     * bound buffer object, and queries of the target to which it is bound return state from the bound buffer object.
     * While buffer object name zero is bound, as in the initial state, attempts to modify or query state on the
     * target to which it is bound generates an {@see GL15::GL_INVALID_OPERATION} error.
     *
     * When a non-zero buffer object is bound to the {@see GL15::GL_ARRAY_BUFFER} target, the vertex array pointer
     * parameter is interpreted as an offset within the buffer object measured in basic machine units.
     *
     * When a non-zero buffer object is bound to the {@see GL15::GL_DRAW_INDIRECT_BUFFER} target, parameters for
     * draws issued through {@see GL15::drawArraysIndirect} and {@see GL15::drawElementsIndirect} are sourced
     * from the specified offset in that buffer object's data store.
     *
     * When a non-zero buffer object is bound to the {@see GL15::GL_DISPATCH_INDIRECT_BUFFER} target, the parameters
     * for compute dispatches issued through {@see GL15::dispatchComputeIndirect} are sourced from the specified
     * offset in that buffer object's data store.
     *
     * While a non-zero buffer object is bound to the {@see GL15::GL_ELEMENT_ARRAY_BUFFER} target, the indices
     * parameter of {@see GL15::drawElements}, {@see GL15::drawElementsInstanced},
     * {@see GL15::drawElementsBaseVertex}, {@see GL15::drawRangeElements},
     * {@see GL15::drawRangeElementsBaseVertex}, {@see GL15::multiDrawElements}, or
     * {@see GL15::multiDrawElementsBaseVertex} is interpreted as an offset within the buffer object measured in
     * basic machine units.
     *
     * While a non-zero buffer object is bound to the {@see GL15::GL_PIXEL_PACK_BUFFER} target, the following
     * commands are affected: {@see GL15::getCompressedTexImage}, {@see GL15::getTexImage}, and
     * {@see GL15::readPixels}. The pointer parameter is interpreted as an offset within the buffer object measured
     * in basic machine units.
     *
     * While a non-zero buffer object is bound to the {@see GL15::GL_PIXEL_UNPACK_BUFFER} target, the following
     * commands are affected: {@see GL15::compressedTexImage1D}, {@see GL15::compressedTexImage2D},
     * {@see GL15::compressedTexImage3D}, {@see GL15::compressedTexSubImage1D},
     * {@see GL15::compressedTexSubImage2D}, {@see GL15::compressedTexSubImage3D}, {@see GL15::texImage1D},
     * {@see GL15::texImage2D}, {@see GL15::texImage3D}, {@see GL15::texSubImage1D},
     * {@see GL15::texSubImage2D}, and {@see GL15::texSubImage3D}. The pointer parameter is interpreted as an
     * offset within the buffer object measured in basic machine units.
     *
     * The buffer targets {@see GL15::GL_COPY_READ_BUFFER} and {@see GL15::GL_COPY_WRITE_BUFFER} are provided to
     * allow {@see GL15::copyBufferSubData} to be used without disturbing the state of other bindings. However,
     * {@see GL15::copyBufferSubData} may be used with any pair of buffer binding points.
     *
     * The {@see GL15::GL_TRANSFORM_FEEDBACK_BUFFER} buffer binding point may be passed to {@see GL15::bindBuffer},
     * but will not directly affect transform feedback state. Instead, the indexed
     * {@see GL15::GL_TRANSFORM_FEEDBACK_BUFFER} bindings must be used through a call to
     * {@see GL15::bindBufferBase} or {@see GL15::bindBufferRange}. This will affect the generic
     * {@see GL15::GL_TRANSFORM_FEEDBACK_BUFFER} binding.
     *
     * Likewise, the {@see GL15::GL_UNIFORM_BUFFER}, {@see GL15::GL_ATOMIC_COUNTER_BUFFER} and
     * {@see GL15::GL_SHADER_STORAGE_BUFFER} buffer binding points may be used, but do not directly affect uniform
     * buffer, atomic counter buffer or shader storage buffer state, respectively. {@see GL15::bindBufferBase} or
     * {@see GL15::bindBufferRange} must be used to bind a buffer to an indexed uniform buffer, atomic counter
     * buffer or shader storage buffer binding point.
     *
     * The {@see GL15::GL_QUERY_BUFFER} binding point is used to specify a buffer object that is to receive the
     * results of query objects through calls to the {@see GL15::getQueryObject} family of commands.
     *
     * A buffer object binding created with {@see GL15::bindBuffer} remains active until a different buffer object
     * name is bound to the same target, or until the bound buffer object is deleted with
     * {@see GL15::deleteBuffers}.
     *
     * Once created, a named buffer object may be re-bound to any target as often as needed. However, the GL
     * implementation may make choices about how to optimize the storage of a buffer object based on its initial
     * binding target.
     *
     * @see http://docs.gl/gl2/glBindBuffer
     * @see http://docs.gl/gl4/glBindBuffer
     * @since 1.5
     * @param int $target
     * @param int $buffer
     * @return void
     */
    public function bindBuffer(int $target, int $buffer): void
    {
        $__proc = $this->proc('glBindBuffer', 'void (*)(GLenum target, GLuint buffer)');
        $__proc($target, $buffer);
    }

    /**
     * {@see GL15::bufferData} and {@see GL15::namedBufferData} create a new data store for a buffer object. In
     * case of {@see GL15::bufferData}, the buffer object currently bound to $target is used. For
     * {@see GL15::namedBufferData}, a buffer object associated with ID specified by the caller in $buffer will be
     * used instead.
     *
     * While creating the new storage, any pre-existing data store is deleted. The new data store is created with the
     * specified $size in bytes and $usage. If $data is not {@see GL46::NULL}, the data store is initialized with
     * data from this pointer. In its initial state, the new data store is not mapped, it has a {@see GL46::NULL}
     * mapped pointer, and its mapped access is {@see GL15::GL_READ_WRITE}.
     *
     * $usage is a hint to the GL implementation as to how a buffer object's data store will be accessed. This
     * enables the GL implementation to make more intelligent decisions that may significantly impact buffer object
     * performance. It does not, however, constrain the actual usage of the data store. $usage can be broken down
     * into two parts: first, the frequency of access (modification and usage), and second, the nature of that
     * access. The frequency of access may be one of these:
     *
     *  - {@see GL46::STREAM}: The data store contents will be modified once and
     *    used at most a few times.
     *
     *  - {@see GL46::STATIC}: The data store contents will be modified once and
     *    used many times.
     *
     *  - {@see GL46::DYNAMIC}: The data store contents will be modified
     *    repeatedly and used many times.
     *
     * The nature of access may be one of these:
     *
     *  - {@see GL46::DRAW}: The data store contents are modified by the
     *    application, and used as the source for GL drawing and image
     *    specification commands.
     *
     *  - {@see GL46::READ}: The data store contents are modified by reading
     *    data from the GL, and used to return that data when queried by
     *    the application.
     *
     *  - {@see GL46::COPY}: The data store contents are modified by reading
     *    data from the GL, and used as the source for GL drawing and
     *    image specification commands.
     *
     * @see http://docs.gl/gl2/glBufferData
     * @see http://docs.gl/gl4/glBufferData
     * @since 1.5
     * @param int $target
     * @param int $size
     * @param CData|null $data
     * @param int $usage
     * @return void
     */
    public function bufferData(int $target, int $size, ?CData $data, int $usage): void
    {
        $__proc = $this->proc('glBufferData',
            'void (*)(GLenum target, GLsizeiptr size, const void *data, GLenum usage)');
        $__proc($target, $size, $data, $usage);
    }

    /**
     * {@see GL15::bufferSubData} and {@see GL15::namedBufferSubData} redefine some or all of the data store for
     * the specified buffer object. Data starting at byte offset $offset and extending for $size bytes is copied to
     * the data store from the memory pointed to by $data. $offset and $size must define a range lying entirely
     * within the buffer object's data store.
     *
     * @see http://docs.gl/gl2/glBufferSubData
     * @see http://docs.gl/gl4/glBufferSubData
     * @since 1.5
     * @param int $target
     * @param int $offset
     * @param int $size
     * @param CData|null $data
     * @return void
     */
    public function bufferSubData(int $target, int $offset, int $size, ?CData $data): void
    {
        $__proc = $this->proc('glBufferSubData',
            'void (*)(GLenum target, GLintptr offset, GLsizeiptr size, const void *data)');
        $__proc($target, $offset, $size, $data);
    }

    /**
     * {@see GL15::deleteBuffers} deletes $n buffer objects named by the elements of the array $buffers. After a
     * buffer object is deleted, it has no contents, and its name is free for reuse (for example by
     * {@see GL15::genBuffers}). If a buffer object that is currently bound is deleted, the binding reverts to 0
     * (the absence of any buffer object).
     *
     * {@see GL15::deleteBuffers} silently ignores 0's and names that do not correspond to existing buffer objects.
     *
     * @see http://docs.gl/gl2/glDeleteBuffers
     * @see http://docs.gl/gl4/glDeleteBuffers
     * @since 1.5
     * @param int $n
     * @param CData|null $buffers
     * @return void
     */
    public function deleteBuffers(int $n, ?CData $buffers): void
    {
        $__proc = $this->proc('glDeleteBuffers', 'void (*)(GLsizei n, const GLuint *buffers)');
        $__proc($n, $buffers);
    }

    /**
     * {@see GL15::deleteQueries} deletes $n query objects named by the elements of the array $ids. After a query
     * object is deleted, it has no contents, and its name is free for reuse (for example by
     * {@see GL15::genQueries}).
     *
     * {@see GL15::deleteQueries} silently ignores 0's and names that do not correspond to existing query objects.
     *
     * @see http://docs.gl/gl2/glDeleteQueries
     * @see http://docs.gl/gl4/glDeleteQueries
     * @since 1.5
     * @param int $n
     * @param CData|null $ids
     * @return void
     */
    public function deleteQueries(int $n, ?CData $ids): void
    {
        $__proc = $this->proc('glDeleteQueries', 'void (*)(GLsizei n, const GLuint *ids)');
        $__proc($n, $ids);
    }

    /**
     * {@see GL15::isQuery} returns {@see GL15::GL_TRUE} if $id is currently the name of a query object. If $id is
     * zero, or is a non-zero value that is not currently the name of a query object, or if an error occurs,
     * {@see GL15::isQuery} returns {@see GL15::GL_FALSE}.
     *
     * A name returned by {@see GL15::genQueries}, but not yet associated with a query object by calling
     * {@see GL15::beginQuery}, is not the name of a query object.
     *
     * @see http://docs.gl/gl2/glIsQuery
     * @see http://docs.gl/gl4/glIsQuery
     * @since 1.5
     * @param int $target
     * @return void
     */
    public function endQuery(int $target): void
    {
        $__proc = $this->proc('glEndQuery', 'void (*)(GLenum target)');
        $__proc($target);
    }

    /**
     * {@see GL15::genBuffers} returns $n buffer object names in $buffers. There is no guarantee that the names
     * form a contiguous set of integers; however, it is guaranteed that none of the returned names was in use
     * immediately before the call to {@see GL15::genBuffers}.
     *
     * Buffer object names returned by a call to {@see GL15::genBuffers} are not returned by subsequent calls,
     * unless they are first deleted with {@see GL15::deleteBuffers}.
     *
     * No buffer objects are associated with the returned buffer object names until they are first bound by calling
     * {@see GL15::bindBuffer}.
     *
     * @see http://docs.gl/gl2/glGenBuffers
     * @see http://docs.gl/gl4/glGenBuffers
     * @since 1.5
     * @param int $n
     * @param int|null $buffers
     * @return void
     */
    public function genBuffers(int $n, ?int &$buffers): void
    {
        $buffersCType = $this->info->ffi->new('GLuint', false);
        try {
            $__proc = $this->proc('glGenBuffers', 'void (*)(GLsizei n, GLuint *buffers)');
            $__proc($n, \FFI::addr($buffersCType));
        } finally {
            $buffers = $buffersCType->cdata;
            \FFI::free($buffersCType);
        }
    }

    /**
     * {@see GL15::genQueries} returns $n query object names in $ids. There is no guarantee that the names form a
     * contiguous set of integers; however, it is guaranteed that none of the returned names was in use immediately
     * before the call to {@see GL15::genQueries}.
     *
     * Query object names returned by a call to {@see GL15::genQueries} are not returned by subsequent calls,
     * unless they are first deleted with {@see GL15::deleteQueries}.
     *
     * No query objects are associated with the returned query object names until they are first used by calling
     * {@see GL15::beginQuery}.
     *
     * @see http://docs.gl/gl2/glGenQueries
     * @see http://docs.gl/gl4/glGenQueries
     * @since 1.5
     * @param int $n
     * @param int|null $ids
     * @return void
     */
    public function genQueries(int $n, ?int &$ids): void
    {
        $idsCType = $this->info->ffi->new('GLuint', false);
        try {
            $__proc = $this->proc('glGenQueries', 'void (*)(GLsizei n, GLuint *ids)');
            $__proc($n, \FFI::addr($idsCType));
        } finally {
            $ids = $idsCType->cdata;
            \FFI::free($idsCType);
        }
    }

    /**
     * {@see GL15::getBufferParameteriv} returns in $data a selected parameter of the buffer object specified by
     * $target.
     *
     * $value names a specific buffer object parameter, as follows:
     *
     *  - {@see GL15::GL_BUFFER_ACCESS}: $params returns the access policy set
     *    while mapping the buffer object. The initial value is
     *    {@see GL15::GL_READ_WRITE}.
     *
     *  - {@see GL15::GL_BUFFER_MAPPED}: $params returns a flag indicating
     *    whether the buffer object is currently mapped. The initial value is
     *    {@see GL15::GL_FALSE}.
     *
     *  - {@see GL15::GL_BUFFER_SIZE}: $params returns the size of the buffer
     *    object, measured in bytes. The initial value is 0.
     *
     *  - {@see GL15::GL_BUFFER_USAGE}: $params returns the buffer object's
     *    usage pattern. The initial value is {@see GL15::GL_STATIC_DRAW}.
     *
     * @see http://docs.gl/gl2/glGetBufferParameteriv
     * @since 1.5
     * @param int $target
     * @param int $pname
     * @param int|null $params
     * @return void
     */
    public function getBufferParameteriv(int $target, int $pname, ?int &$params): void
    {
        $paramsCType = $this->info->ffi->new('GLint', false);
        try {
            $__proc = $this->proc('glGetBufferParameteriv',
                'void (*)(GLenum target, GLenum pname, GLint *params)');
            $__proc($target, $pname, \FFI::addr($paramsCType));
        } finally {
            $params = $paramsCType->cdata;
            \FFI::free($paramsCType);
        }
    }

    /**
     * {@see GL15::getBufferPointerv} and {@see GL15::getNamedBufferPointerv} return the buffer pointer $pname,
     * which must be {@see GL15::GL_BUFFER_MAP_POINTER}. The single buffer map pointer is returned in $params. A
     * {@see GL46::NULL} pointer is returned if the buffer object's data store is not currently mapped; or if the
     * requesting context did not map the buffer object's data store, and the implementation is unable to support
     * mappings on multiple clients.
     *
     * @see http://docs.gl/gl2/glGetBufferPointerv
     * @see http://docs.gl/gl4/glGetBufferPointerv
     * @since 1.5
     * @param int $target
     * @param int $pname
     * @param CData|null $params
     * @return void
     */
    public function getBufferPointerv(int $target, int $pname, ?CData $params): void
    {
        $__proc = $this->proc('glGetBufferPointerv', 'void (*)(GLenum target, GLenum pname, void **params)');
        $__proc($target, $pname, $params);
    }

    /**
     * {@see GL15::getBufferSubData} and {@see GL15::getNamedBufferSubData} return some or all of the data
     * contents of the data store of the specified buffer object. Data starting at byte offset $offset and extending
     * for $size bytes is copied from the buffer object's data store to the memory pointed to by $data. An error is
     * thrown if the buffer object is currently mapped, or if $offset and $size together define a range beyond the
     * bounds of the buffer object's data store.
     *
     * @see http://docs.gl/gl2/glGetBufferSubData
     * @see http://docs.gl/gl4/glGetBufferSubData
     * @since 1.5
     * @param int $target
     * @param int $offset
     * @param int $size
     * @param CData|null $data
     * @return void
     */
    public function getBufferSubData(int $target, int $offset, int $size, ?CData $data): void
    {
        $__proc = $this->proc('glGetBufferSubData',
            'void (*)(GLenum target, GLintptr offset, GLsizeiptr size, void *data)');
        $__proc($target, $offset, $size, $data);
    }

    /**
     * These commands return a selected parameter of the query object specified by $id. {@see GL15::getQueryObject}
     * returns in $params a selected parameter of the query object specified by $id.
     * {@see GL15::getQueryBufferObject} returns in $buffer a selected parameter of the query object specified by
     * $id, by writing it to $buffer's data store at the byte offset specified by $offset.
     *
     * $pname names a specific query object parameter. $pname can be as follows:
     *
     *  - {@see GL15::GL_QUERY_RESULT}: $params or $buffer returns the value of
     *    the query object's passed samples counter. The initial value is 0.
     *
     *  - {@see GL15::GL_QUERY_RESULT_NO_WAIT}: If the result of the query is
     *    available (that is, a query of {@see GL15::GL_QUERY_RESULT_AVAILABLE}
     *    would
     *    return non-zero), then $params or $buffer returns the value of the
     *    query object's passed samples counter,
     *    otherwise, the data referred to by $params or $buffer is not modified.
     *    The initial value is 0.
     *
     *  - {@see GL15::GL_QUERY_RESULT_AVAILABLE}: $params or $buffer returns
     *    whether the passed samples counter is immediately available. If a
     *    delay would
     *    occur waiting for the query result, {@see GL15::GL_FALSE} is returned.
     *    Otherwise, {@see GL15::GL_TRUE} is
     *    returned, which also indicates that the results of all previous
     *    queries are available as well.
     *
     * @see http://docs.gl/gl2/glGetQueryObject
     * @see http://docs.gl/gl4/glGetQueryObject
     * @since 1.5
     * @param int $id
     * @param int $pname
     * @param int|null $params
     * @return void
     */
    public function getQueryObjectiv(int $id, int $pname, ?int &$params): void
    {
        $paramsCType = $this->info->ffi->new('GLint', false);
        try {
            $__proc = $this->proc('glGetQueryObjectiv', 'void (*)(GLuint id, GLenum pname, GLint *params)');
            $__proc($id, $pname, \FFI::addr($paramsCType));
        } finally {
            $params = $paramsCType->cdata;
            \FFI::free($paramsCType);
        }
    }

    /**
     * These commands return a selected parameter of the query object specified by $id. {@see GL15::getQueryObject}
     * returns in $params a selected parameter of the query object specified by $id.
     * {@see GL15::getQueryBufferObject} returns in $buffer a selected parameter of the query object specified by
     * $id, by writing it to $buffer's data store at the byte offset specified by $offset.
     *
     * $pname names a specific query object parameter. $pname can be as follows:
     *
     *  - {@see GL15::GL_QUERY_RESULT}: $params or $buffer returns the value of
     *    the query object's passed samples counter. The initial value is 0.
     *
     *  - {@see GL15::GL_QUERY_RESULT_NO_WAIT}: If the result of the query is
     *    available (that is, a query of {@see GL15::GL_QUERY_RESULT_AVAILABLE}
     *    would
     *    return non-zero), then $params or $buffer returns the value of the
     *    query object's passed samples counter,
     *    otherwise, the data referred to by $params or $buffer is not modified.
     *    The initial value is 0.
     *
     *  - {@see GL15::GL_QUERY_RESULT_AVAILABLE}: $params or $buffer returns
     *    whether the passed samples counter is immediately available. If a
     *    delay would
     *    occur waiting for the query result, {@see GL15::GL_FALSE} is returned.
     *    Otherwise, {@see GL15::GL_TRUE} is
     *    returned, which also indicates that the results of all previous
     *    queries are available as well.
     *
     * @see http://docs.gl/gl2/glGetQueryObject
     * @see http://docs.gl/gl4/glGetQueryObject
     * @since 1.5
     * @param int $id
     * @param int $pname
     * @param int|null $params
     * @return void
     */
    public function getQueryObjectuiv(int $id, int $pname, ?int &$params): void
    {
        $paramsCType = $this->info->ffi->new('GLuint', false);
        try {
            $__proc = $this->proc('glGetQueryObjectuiv', 'void (*)(GLuint id, GLenum pname, GLuint *params)');
            $__proc($id, $pname, \FFI::addr($paramsCType));
        } finally {
            $params = $paramsCType->cdata;
            \FFI::free($paramsCType);
        }
    }

    /**
     * {@see GL15::getQueryiv} returns in $params a selected parameter of the query object target specified by
     * $target.
     *
     * $pname names a specific query object target parameter. When $pname is {@see GL15::GL_CURRENT_QUERY}, the name
     * of the currently active query for $target, or zero if no query is active, will be placed in $params. If $pname
     * is {@see GL15::GL_QUERY_COUNTER_BITS}, the implementation-dependent number of bits used to hold the result of
     * queries for $target is returned in $params.
     *
     * @see http://docs.gl/gl2/glGetQueryiv
     * @see http://docs.gl/gl4/glGetQueryiv
     * @since 1.5
     * @param int $target
     * @param int $pname
     * @param int|null $params
     * @return void
     */
    public function getQueryiv(int $target, int $pname, ?int &$params): void
    {
        $paramsCType = $this->info->ffi->new('GLint', false);
        try {
            $__proc = $this->proc('glGetQueryiv', 'void (*)(GLenum target, GLenum pname, GLint *params)');
            $__proc($target, $pname, \FFI::addr($paramsCType));
        } finally {
            $params = $paramsCType->cdata;
            \FFI::free($paramsCType);
        }
    }

    /**
     * {@see GL15::isBuffer} returns {@see GL15::GL_TRUE} if $buffer is currently the name of a buffer object. If
     * $buffer is zero, or is a non-zero value that is not currently the name of a buffer object, or if an error
     * occurs, {@see GL15::isBuffer} returns {@see GL15::GL_FALSE}.
     *
     * A name returned by {@see GL15::genBuffers}, but not yet associated with a buffer object by calling
     * {@see GL15::bindBuffer}, is not the name of a buffer object.
     *
     * @see http://docs.gl/gl2/glIsBuffer
     * @see http://docs.gl/gl4/glIsBuffer
     * @since 1.5
     * @param int $buffer
     * @return bool
     */
    public function isBuffer(int $buffer): bool
    {
        $__proc = $this->proc('glIsBuffer', 'GLboolean (*)(GLuint buffer)');

        return $__proc($buffer) !== 0;
    }

    /**
     * {@see GL15::isQuery} returns {@see GL15::GL_TRUE} if $id is currently the name of a query object. If $id is
     * zero, or is a non-zero value that is not currently the name of a query object, or if an error occurs,
     * {@see GL15::isQuery} returns {@see GL15::GL_FALSE}.
     *
     * A name returned by {@see GL15::genQueries}, but not yet associated with a query object by calling
     * {@see GL15::beginQuery}, is not the name of a query object.
     *
     * @see http://docs.gl/gl2/glIsQuery
     * @see http://docs.gl/gl4/glIsQuery
     * @since 1.5
     * @param int $id
     * @return bool
     */
    public function isQuery(int $id): bool
    {
        $__proc = $this->proc('glIsQuery', 'GLboolean (*)(GLuint id)');

        return $__proc($id) !== 0;
    }

    /**
     * {@see GL15::mapBuffer} and {@see GL15::mapNamedBuffer} map the entire data store of a specified buffer
     * object into the client's address space. The data can then be directly read and/or written relative to the
     * returned pointer, depending on the specified $access policy.
     *
     * A pointer to the beginning of the mapped range is returned once all pending operations on that buffer object
     * have completed, and may be used to modify and/or query the corresponding range of the data store according to
     * the value of $access:    {@see GL15::GL_READ_ONLY} indicates that the returned pointer may be used to read
     * buffer object data.     {@see GL15::GL_WRITE_ONLY} indicates that the returned pointer may be used to modify
     * buffer object data.     {@see GL15::GL_READ_WRITE} indicates that the returned pointer may be used to read and
     * to modify buffer object data.
     *
     * If an error is generated, a `NULL` pointer is returned.
     *
     * If no error occurs, the returned pointer will reflect an allocation aligned to the value of
     * {@see GL15::GL_MIN_MAP_BUFFER_ALIGNMENT} basic machine units.
     *
     * The returned pointer values may not be passed as parameter values to GL commands. For example, they may not be
     * used to specify array pointers, or to specify or query pixel or texture image data; such actions produce
     * undefined results, although implementations may not check for such behavior for performance reasons.
     *
     * No GL error is generated if the returned pointer is accessed in a way inconsistent with $access (e.g. used to
     * read from a mapping made with $access {@see GL15::GL_WRITE_ONLY} or write to a mapping made with $access
     * {@see GL15::GL_READ_ONLY}), but the result is undefined and system errors (possibly including program
     * termination) may occur.
     *
     * Mappings to the data stores of buffer objects may have nonstandard performance characteristics. For example,
     * such mappings may be marked as uncacheable regions of memory, and in such cases reading from them may be very
     * slow. To ensure optimal performance, the client should use the mapping in a fashion consistent with the values
     * of {@see GL15::GL_BUFFER_USAGE} for the buffer object and of $access. Using a mapping in a fashion
     * inconsistent with these values is liable to be multiple orders of magnitude slower than using normal memory.
     *
     * @see http://docs.gl/gl2/glMapBuffer
     * @see http://docs.gl/gl4/glMapBuffer
     * @since 1.5
     * @param int $target
     * @param int $access
     * @return CData
     */
    public function mapBuffer(int $target, int $access): CData
    {
        $__proc = $this->proc('glMapBuffer', 'void * (*)(GLenum target, GLenum access)');

        return $__proc($target, $access);
    }

    /**
     * {@see GL15::unmapBuffer} and {@see GL15::unmapNamedBuffer} unmap (release) any mapping of a specified
     * buffer object into the client's address space (see {@see GL15::mapBufferRange} and
     * {@see GL15::mapBuffer}).
     *
     * If a mapping is not unmapped before the corresponding buffer object's data store is used by the GL, an error
     * will be generated by any GL command that attempts to dereference the buffer object's data store, unless the
     * buffer was successfully mapped with {@see GL15::GL_MAP_PERSISTENT_BIT} (see {@see GL15::mapBufferRange}).
     * When a data store is unmapped, the mapped pointer becomes invalid.
     *
     * {@see GL15::unmapBuffer} returns {@see GL15::GL_TRUE} unless the data store contents have become corrupt
     * during the time the data store was mapped. This can occur for system-specific reasons that affect the
     * availability of graphics memory, such as screen mode changes. In such situations, {@see GL15::GL_FALSE} is
     * returned and the data store contents are undefined. An application must detect this rare condition and
     * reinitialize the data store.
     *
     * A buffer object's mapped data store is automatically unmapped when the buffer object is deleted or its data
     * store is recreated with {@see GL15::bufferData}).
     *
     * @see http://docs.gl/gl4/glUnmapBuffer
     * @since 1.5
     * @param int $target
     * @return bool
     */
    public function unmapBuffer(int $target): bool
    {
        $__proc = $this->proc('glUnmapBuffer', 'GLboolean (*)(GLenum target)');

        return $__proc($target) !== 0;
    }
}
