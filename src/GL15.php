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

use Serafim\OpenGL\Type\Type;

/**
 * The OpenGL functionality up to version 1.5. Includes the deprecated symbols of the Compatibility Profile.
 *
 * Extensions promoted to core in this release:
 *
 * - ARB_vertex_buffer_object @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_vertex_buffer_object.txt
 * - ARB_occlusion_query @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_occlusion_query.txt
 * - EXT_shadow_funcs @see https://www.khronos.org/registry/OpenGL/extensions/EXT/EXT_shadow_funcs.txt
 */
class GL15 extends GL14
{
    /**
     * @var int
     * @since 1.5
     */
    public const GL_BUFFER_SIZE = 0x8764;
    /**
     * @var int
     * @since 1.5
     */
    public const GL_BUFFER_USAGE = 0x8765;
    /**
     * @var int
     * @since 1.5
     */
    public const GL_QUERY_COUNTER_BITS = 0x8864;
    /**
     * @var int
     * @since 1.5
     */
    public const GL_CURRENT_QUERY = 0x8865;
    /**
     * @var int
     * @since 1.5
     */
    public const GL_QUERY_RESULT = 0x8866;
    /**
     * @var int
     * @since 1.5
     */
    public const GL_QUERY_RESULT_AVAILABLE = 0x8867;
    /**
     * @var int
     * @since 1.5
     */
    public const GL_ARRAY_BUFFER = 0x8892;
    /**
     * @var int
     * @since 1.5
     */
    public const GL_ELEMENT_ARRAY_BUFFER = 0x8893;
    /**
     * @var int
     * @since 1.5
     */
    public const GL_ARRAY_BUFFER_BINDING = 0x8894;
    /**
     * @var int
     * @since 1.5
     */
    public const GL_ELEMENT_ARRAY_BUFFER_BINDING = 0x8895;
    /**
     * @var int
     * @since 1.5
     */
    public const GL_VERTEX_ATTRIB_ARRAY_BUFFER_BINDING = 0x889f;
    /**
     * @var int
     * @since 1.5
     */
    public const GL_READ_ONLY = 0x88b8;
    /**
     * @var int
     * @since 1.5
     */
    public const GL_WRITE_ONLY = 0x88b9;
    /**
     * @var int
     * @since 1.5
     */
    public const GL_READ_WRITE = 0x88ba;
    /**
     * @var int
     * @since 1.5
     */
    public const GL_BUFFER_ACCESS = 0x88bb;
    /**
     * @var int
     * @since 1.5
     */
    public const GL_BUFFER_MAPPED = 0x88bc;
    /**
     * @var int
     * @since 1.5
     */
    public const GL_BUFFER_MAP_POINTER = 0x88bd;
    /**
     * @var int
     * @since 1.5
     */
    public const GL_STREAM_DRAW = 0x88e0;
    /**
     * @var int
     * @since 1.5
     */
    public const GL_STREAM_READ = 0x88e1;
    /**
     * @var int
     * @since 1.5
     */
    public const GL_STREAM_COPY = 0x88e2;
    /**
     * @var int
     * @since 1.5
     */
    public const GL_STATIC_DRAW = 0x88e4;
    /**
     * @var int
     * @since 1.5
     */
    public const GL_STATIC_READ = 0x88e5;
    /**
     * @var int
     * @since 1.5
     */
    public const GL_STATIC_COPY = 0x88e6;
    /**
     * @var int
     * @since 1.5
     */
    public const GL_DYNAMIC_DRAW = 0x88e8;
    /**
     * @var int
     * @since 1.5
     */
    public const GL_DYNAMIC_READ = 0x88e9;
    /**
     * @var int
     * @since 1.5
     */
    public const GL_DYNAMIC_COPY = 0x88ea;
    /**
     * @var int
     * @since 1.5
     */
    public const GL_SAMPLES_PASSED = 0x8914;
    /**
     * @var int
     * @since 1.5
     */
    public const GL_SRC1_ALPHA = 0x8589;

    /**
     * {@see GL46::glGenQueries} returns $n query object names in $ids. There is no guarantee that the names form a
     * contiguous set of integers; however, it is guaranteed that none of the returned names was in use immediately
     * before the call to {@see GL46::glGenQueries}.
     *
     * Query object names returned by a call to {@see GL46::glGenQueries} are not returned by subsequent calls,
     * unless they are first deleted with {@see GL46::glDeleteQueries}.
     *
     * No query objects are associated with the returned query object names until they are first used by calling
     * {@see GL46::glBeginQuery}.
     *
     * @see http://docs.gl/gl2/glGenQueries
     * @see http://docs.gl/gl4/glGenQueries
     * @since 1.5
     * @param int|\FFI\CData|\FFI\CInt $n
     * @param \FFI\CData|\FFI\CIntPtr|null $ids
     * @return void
     */
    public function genQueries($n, ?\FFI\CData $ids): void
    {
        $n = $n instanceof \FFI\CData ? $n->cdata : $n;

        assert(Type::isInt16($n), 'Argument $n must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGenQueries', 'void (*)(GLsizei n, GLuint *ids)');
        $proc($n, $ids);
    }

    /**
     * {@see GL46::glDeleteQueries} deletes $n query objects named by the elements of the array $ids. After a query
     * object is deleted, it has no contents, and its name is free for reuse (for example by
     * {@see GL46::glGenQueries}).
     *
     * {@see GL46::glDeleteQueries} silently ignores 0's and names that do not correspond to existing query objects.
     *
     * @see http://docs.gl/gl2/glDeleteQueries
     * @see http://docs.gl/gl4/glDeleteQueries
     * @since 1.5
     * @param int|\FFI\CData|\FFI\CInt $n
     * @param \FFI\CData|\FFI\CIntPtr|null $ids
     * @return void
     */
    public function deleteQueries($n, ?\FFI\CData $ids): void
    {
        $n = $n instanceof \FFI\CData ? $n->cdata : $n;

        assert(Type::isInt16($n), 'Argument $n must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glDeleteQueries', 'void (*)(GLsizei n, const GLuint *ids)');
        $proc($n, $ids);
    }

    /**
     * {@see GL46::glIsQuery} returns {@see GL46::GL_TRUE} if $id is currently the name of a query object. If $id is
     * zero, or is a non-zero value that is not currently the name of a query object, or if an error occurs,
     * {@see GL46::glIsQuery} returns {@see GL46::GL_FALSE}.
     *
     * A name returned by {@see GL46::glGenQueries}, but not yet associated with a query object by calling
     * {@see GL46::glBeginQuery}, is not the name of a query object.
     *
     * @see http://docs.gl/gl2/glIsQuery
     * @see http://docs.gl/gl4/glIsQuery
     * @since 1.5
     * @param int|\FFI\CData|\FFI\CInt $id
     * @return int|\FFI\CData|\FFI\CInt
     */
    public function isQuery($id): int
    {
        $id = $id instanceof \FFI\CData ? $id->cdata : $id;

        assert(Type::isUint16($id), 'Argument $id must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glIsQuery', 'GLboolean (*)(GLuint id)');
        return $proc($id);
    }

    /**
     * {@see GL46::glBeginQuery} and  {@see GL46::glEndQuery} delimit the boundaries of a query object. $query must
     * be a name previously returned from a call to {@see GL46::glGenQueries}. If a query object with name $id does
     * not yet exist it is created with the type determined by $target. $target must be one of
     * {@see GL46::GL_SAMPLES_PASSED}, {@see GL46::GL_ANY_SAMPLES_PASSED}, {@see GL46::GL_PRIMITIVES_GENERATED},
     * {@see GL46::GL_TRANSFORM_FEEDBACK_PRIMITIVES_WRITTEN}, or {@see GL46::GL_TIME_ELAPSED}. The behavior of the
     * query object depends on its type and is as follows.
     *
     * If $target is {@see GL46::GL_SAMPLES_PASSED}, $id must be an unused name, or the name of an existing occlusion
     * query object. When {@see GL46::glBeginQuery} is executed, the query object's samples-passed counter is reset
     * to 0. Subsequent rendering will increment the counter for every sample that passes the depth test. If the
     * value of {@see GL46::GL_SAMPLE_BUFFERS} is 0, then the samples-passed count is incremented by 1 for each
     * fragment. If the value of {@see GL46::GL_SAMPLE_BUFFERS} is 1, then the samples-passed count is incremented by
     * the number of samples whose coverage bit is set. However, implementations, at their discression may instead
     * increase the samples-passed count by the value of {@see GL46::GL_SAMPLES} if any sample in the fragment is
     * covered. When {@see GL46::glEndQuery} is executed, the samples-passed counter is assigned to the query
     * object's result value. This value can be queried by calling {@see GL46::glGetQueryObject} with $pname
     * {@see GL46::GL_QUERY_RESULT}.
     *
     * If $target is {@see GL46::GL_ANY_SAMPLES_PASSED} or {@see GL46::GL_ANY_SAMPLES_PASSED_CONSERVATIVE}, $id must
     * be an unused name, or the name of an existing boolean occlusion query object. When {@see GL46::glBeginQuery}
     * is executed, the query object's samples-passed flag is reset to {@see GL46::GL_FALSE}. Subsequent rendering
     * causes the flag to be set to {@see GL46::GL_TRUE} if any sample passes the depth test in the case of
     * {@see GL46::GL_ANY_SAMPLES_PASSED}, or if the implementation determines that any sample might pass the depth
     * test in the case of {@see GL46::GL_ANY_SAMPLES_PASSED_CONSERVATIVE}. The implementation may be able to provide
     * a more efficient test in the case of {@see GL46::GL_ANY_SAMPLES_PASSED_CONSERVATIVE} if some false positives
     * are acceptable to the application. When {@see GL46::glEndQuery} is executed, the samples-passed flag is
     * assigned to the query object's result value. This value can be queried by calling
     * {@see GL46::glGetQueryObject} with $pname {@see GL46::GL_QUERY_RESULT}.
     *
     * If $target is {@see GL46::GL_PRIMITIVES_GENERATED}, $id must be an unused name, or the name of an existing
     * primitive query object previously bound to the {@see GL46::GL_PRIMITIVES_GENERATED} query binding. When
     * {@see GL46::glBeginQuery} is executed, the query object's primitives-generated counter is reset to 0.
     * Subsequent rendering will increment the counter once for every vertex that is emitted from the geometry
     * shader, or from the vertex shader if no geometry shader is present. When {@see GL46::glEndQuery} is executed,
     * the primitives-generated counter is assigned to the query object's result value. This value can be queried by
     * calling {@see GL46::glGetQueryObject} with $pname {@see GL46::GL_QUERY_RESULT}.
     *
     * If $target is {@see GL46::GL_TRANSFORM_FEEDBACK_PRIMITIVES_WRITTEN}, $id must be an unused name, or the name
     * of an existing primitive query object previously bound to the
     * {@see GL46::GL_TRANSFORM_FEEDBACK_PRIMITIVES_WRITTEN} query binding. When {@see GL46::glBeginQuery} is
     * executed, the query object's primitives-written counter is reset to 0. Subsequent rendering will increment the
     * counter once for every vertex that is written into the bound transform feedback buffer(s). If transform
     * feedback mode is not activated between the call to {@see GL46::glBeginQuery} and {@see GL46::glEndQuery}, the
     * counter will not be incremented. When {@see GL46::glEndQuery} is executed, the primitives-written counter is
     * assigned to the query object's result value. This value can be queried by calling
     * {@see GL46::glGetQueryObject} with $pname {@see GL46::GL_QUERY_RESULT}.
     *
     * If $target is {@see GL46::GL_TIME_ELAPSED}, $id must be an unused name, or the name of an existing timer query
     * object previously bound to the {@see GL46::GL_TIME_ELAPSED} query binding. When {@see GL46::glBeginQuery} is
     * executed, the query object's time counter is reset to 0. When {@see GL46::glEndQuery} is executed, the elapsed
     * server time that has passed since the call to {@see GL46::glBeginQuery} is written into the query object's
     * time counter. This value can be queried by calling {@see GL46::glGetQueryObject} with $pname
     * {@see GL46::GL_QUERY_RESULT}.
     *
     * Querying the {@see GL46::GL_QUERY_RESULT} implicitly flushes the GL pipeline until the rendering delimited by
     * the query object has completed and the result is available. {@see GL46::GL_QUERY_RESULT_AVAILABLE} can be
     * queried to determine if the result is immediately available or if the rendering is not yet complete.
     *
     * @see http://docs.gl/gl2/glBeginQuery
     * @see http://docs.gl/gl4/glBeginQuery
     * @since 1.5
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $id
     * @return void
     */
    public function beginQuery($target, $id): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $id = $id instanceof \FFI\CData ? $id->cdata : $id;

        assert(Type::isUint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isUint16($id), 'Argument $id must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glBeginQuery', 'void (*)(GLenum target, GLuint id)');
        $proc($target, $id);
    }

    /**
     * {@see GL46::glIsQuery} returns {@see GL46::GL_TRUE} if $id is currently the name of a query object. If $id is
     * zero, or is a non-zero value that is not currently the name of a query object, or if an error occurs,
     * {@see GL46::glIsQuery} returns {@see GL46::GL_FALSE}.
     *
     * A name returned by {@see GL46::glGenQueries}, but not yet associated with a query object by calling
     * {@see GL46::glBeginQuery}, is not the name of a query object.
     *
     * @see http://docs.gl/gl2/glIsQuery
     * @see http://docs.gl/gl4/glIsQuery
     * @since 1.5
     * @param int|\FFI\CData|\FFI\CInt $target
     * @return void
     */
    public function endQuery($target): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;

        assert(Type::isUint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glEndQuery', 'void (*)(GLenum target)');
        $proc($target);
    }

    /**
     * {@see GL46::glGetQueryiv} returns in $params a selected parameter of the query object target specified by
     * $target.
     *
     * $pname names a specific query object target parameter. When $pname is {@see GL46::GL_CURRENT_QUERY}, the name
     * of the currently active query for $target, or zero if no query is active, will be placed in $params. If $pname
     * is {@see GL46::GL_QUERY_COUNTER_BITS}, the implementation-dependent number of bits used to hold the result of
     * queries for $target is returned in $params.
     *
     * @see http://docs.gl/gl2/glGetQueryiv
     * @see http://docs.gl/gl4/glGetQueryiv
     * @since 1.5
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public function getQueryiv($target, $pname, ?\FFI\CData $params): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $pname = $pname instanceof \FFI\CData ? $pname->cdata : $pname;

        assert(Type::isUint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isUint16($pname), 'Argument $pname must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetQueryiv', 'void (*)(GLenum target, GLenum pname, GLint *params)');
        $proc($target, $pname, $params);
    }

    /**
     * These commands return a selected parameter of the query object specified by $id. {@see GL46::glGetQueryObject}
     * returns in $params a selected parameter of the query object specified by $id.
     * {@see GL46::glGetQueryBufferObject} returns in $buffer a selected parameter of the query object specified by
     * $id, by writing it to $buffer's data store at the byte offset specified by $offset.
     *
     * $pname names a specific query object parameter. $pname can be as follows:
     *
     *  - {@see GL46::GL_QUERY_RESULT}: $params or $buffer returns the value of
     *    the query object's passed samples counter. The initial value is 0.
     *
     *  - {@see GL46::GL_QUERY_RESULT_NO_WAIT}: If the result of the query is
     *    available (that is, a query of {@see GL46::GL_QUERY_RESULT_AVAILABLE}
     *    would
     *    return non-zero), then $params or $buffer returns the value of the
     *    query object's passed samples counter,
     *    otherwise, the data referred to by $params or $buffer is not modified.
     *    The initial value is 0.
     *
     *  - {@see GL46::GL_QUERY_RESULT_AVAILABLE}: $params or $buffer returns
     *    whether the passed samples counter is immediately available. If a
     *    delay would
     *    occur waiting for the query result, {@see GL46::GL_FALSE} is returned.
     *    Otherwise, {@see GL46::GL_TRUE} is
     *    returned, which also indicates that the results of all previous
     *    queries are available as well.
     *
     * @see http://docs.gl/gl2/glGetQueryObject
     * @see http://docs.gl/gl4/glGetQueryObject
     * @since 1.5
     * @param int|\FFI\CData|\FFI\CInt $id
     * @param int|\FFI\CData|\FFI\CInt $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public function getQueryObjectiv($id, $pname, ?\FFI\CData $params): void
    {
        $id = $id instanceof \FFI\CData ? $id->cdata : $id;
        $pname = $pname instanceof \FFI\CData ? $pname->cdata : $pname;

        assert(Type::isUint16($id), 'Argument $id must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isUint16($pname), 'Argument $pname must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetQueryObjectiv', 'void (*)(GLuint id, GLenum pname, GLint *params)');
        $proc($id, $pname, $params);
    }

    /**
     * These commands return a selected parameter of the query object specified by $id. {@see GL46::glGetQueryObject}
     * returns in $params a selected parameter of the query object specified by $id.
     * {@see GL46::glGetQueryBufferObject} returns in $buffer a selected parameter of the query object specified by
     * $id, by writing it to $buffer's data store at the byte offset specified by $offset.
     *
     * $pname names a specific query object parameter. $pname can be as follows:
     *
     *  - {@see GL46::GL_QUERY_RESULT}: $params or $buffer returns the value of
     *    the query object's passed samples counter. The initial value is 0.
     *
     *  - {@see GL46::GL_QUERY_RESULT_NO_WAIT}: If the result of the query is
     *    available (that is, a query of {@see GL46::GL_QUERY_RESULT_AVAILABLE}
     *    would
     *    return non-zero), then $params or $buffer returns the value of the
     *    query object's passed samples counter,
     *    otherwise, the data referred to by $params or $buffer is not modified.
     *    The initial value is 0.
     *
     *  - {@see GL46::GL_QUERY_RESULT_AVAILABLE}: $params or $buffer returns
     *    whether the passed samples counter is immediately available. If a
     *    delay would
     *    occur waiting for the query result, {@see GL46::GL_FALSE} is returned.
     *    Otherwise, {@see GL46::GL_TRUE} is
     *    returned, which also indicates that the results of all previous
     *    queries are available as well.
     *
     * @see http://docs.gl/gl2/glGetQueryObject
     * @see http://docs.gl/gl4/glGetQueryObject
     * @since 1.5
     * @param int|\FFI\CData|\FFI\CInt $id
     * @param int|\FFI\CData|\FFI\CInt $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public function getQueryObjectuiv($id, $pname, ?\FFI\CData $params): void
    {
        $id = $id instanceof \FFI\CData ? $id->cdata : $id;
        $pname = $pname instanceof \FFI\CData ? $pname->cdata : $pname;

        assert(Type::isUint16($id), 'Argument $id must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isUint16($pname), 'Argument $pname must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetQueryObjectuiv', 'void (*)(GLuint id, GLenum pname, GLuint *params)');
        $proc($id, $pname, $params);
    }

    /**
     * {@see GL46::glBindBuffer} binds a buffer object to the specified buffer binding point. Calling
     * {@see GL46::glBindBuffer} with $target set to one of the accepted symbolic constants and $buffer set to the
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
     * {@see GL46::glGenBuffers} must be used to generate a set of unused buffer object names.
     *
     * The state of a buffer object immediately after it is first bound is an unmapped zero-sized memory buffer with
     * {@see GL46::GL_READ_WRITE} access and {@see GL46::GL_STATIC_DRAW} usage.
     *
     * While a non-zero buffer object name is bound, GL operations on the target to which it is bound affect the
     * bound buffer object, and queries of the target to which it is bound return state from the bound buffer object.
     * While buffer object name zero is bound, as in the initial state, attempts to modify or query state on the
     * target to which it is bound generates an {@see GL46::GL_INVALID_OPERATION} error.
     *
     * When a non-zero buffer object is bound to the {@see GL46::GL_ARRAY_BUFFER} target, the vertex array pointer
     * parameter is interpreted as an offset within the buffer object measured in basic machine units.
     *
     * When a non-zero buffer object is bound to the {@see GL46::GL_DRAW_INDIRECT_BUFFER} target, parameters for
     * draws issued through {@see GL46::glDrawArraysIndirect} and {@see GL46::glDrawElementsIndirect} are sourced
     * from the specified offset in that buffer object's data store.
     *
     * When a non-zero buffer object is bound to the {@see GL46::GL_DISPATCH_INDIRECT_BUFFER} target, the parameters
     * for compute dispatches issued through {@see GL46::glDispatchComputeIndirect} are sourced from the specified
     * offset in that buffer object's data store.
     *
     * While a non-zero buffer object is bound to the {@see GL46::GL_ELEMENT_ARRAY_BUFFER} target, the indices
     * parameter of {@see GL46::glDrawElements}, {@see GL46::glDrawElementsInstanced},
     * {@see GL46::glDrawElementsBaseVertex}, {@see GL46::glDrawRangeElements},
     * {@see GL46::glDrawRangeElementsBaseVertex}, {@see GL46::glMultiDrawElements}, or
     * {@see GL46::glMultiDrawElementsBaseVertex} is interpreted as an offset within the buffer object measured in
     * basic machine units.
     *
     * While a non-zero buffer object is bound to the {@see GL46::GL_PIXEL_PACK_BUFFER} target, the following
     * commands are affected: {@see GL46::glGetCompressedTexImage}, {@see GL46::glGetTexImage}, and
     * {@see GL46::glReadPixels}. The pointer parameter is interpreted as an offset within the buffer object measured
     * in basic machine units.
     *
     * While a non-zero buffer object is bound to the {@see GL46::GL_PIXEL_UNPACK_BUFFER} target, the following
     * commands are affected: {@see GL46::glCompressedTexImage1D}, {@see GL46::glCompressedTexImage2D},
     * {@see GL46::glCompressedTexImage3D}, {@see GL46::glCompressedTexSubImage1D},
     * {@see GL46::glCompressedTexSubImage2D}, {@see GL46::glCompressedTexSubImage3D}, {@see GL46::glTexImage1D},
     * {@see GL46::glTexImage2D}, {@see GL46::glTexImage3D}, {@see GL46::glTexSubImage1D},
     * {@see GL46::glTexSubImage2D}, and {@see GL46::glTexSubImage3D}. The pointer parameter is interpreted as an
     * offset within the buffer object measured in basic machine units.
     *
     * The buffer targets {@see GL46::GL_COPY_READ_BUFFER} and {@see GL46::GL_COPY_WRITE_BUFFER} are provided to
     * allow {@see GL46::glCopyBufferSubData} to be used without disturbing the state of other bindings. However,
     * {@see GL46::glCopyBufferSubData} may be used with any pair of buffer binding points.
     *
     * The {@see GL46::GL_TRANSFORM_FEEDBACK_BUFFER} buffer binding point may be passed to {@see GL46::glBindBuffer},
     * but will not directly affect transform feedback state. Instead, the indexed
     * {@see GL46::GL_TRANSFORM_FEEDBACK_BUFFER} bindings must be used through a call to
     * {@see GL46::glBindBufferBase} or {@see GL46::glBindBufferRange}. This will affect the generic
     * {@see GL46::GL_TRANSFORM_FEEDBACK_BUFFER} binding.
     *
     * Likewise, the {@see GL46::GL_UNIFORM_BUFFER}, {@see GL46::GL_ATOMIC_COUNTER_BUFFER} and
     * {@see GL46::GL_SHADER_STORAGE_BUFFER} buffer binding points may be used, but do not directly affect uniform
     * buffer, atomic counter buffer or shader storage buffer state, respectively. {@see GL46::glBindBufferBase} or
     * {@see GL46::glBindBufferRange} must be used to bind a buffer to an indexed uniform buffer, atomic counter
     * buffer or shader storage buffer binding point.
     *
     * The {@see GL46::GL_QUERY_BUFFER} binding point is used to specify a buffer object that is to receive the
     * results of query objects through calls to the {@see GL46::glGetQueryObject} family of commands.
     *
     * A buffer object binding created with {@see GL46::glBindBuffer} remains active until a different buffer object
     * name is bound to the same target, or until the bound buffer object is deleted with
     * {@see GL46::glDeleteBuffers}.
     *
     * Once created, a named buffer object may be re-bound to any target as often as needed. However, the GL
     * implementation may make choices about how to optimize the storage of a buffer object based on its initial
     * binding target.
     *
     * @see http://docs.gl/gl2/glBindBuffer
     * @see http://docs.gl/gl4/glBindBuffer
     * @since 1.5
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $buffer
     * @return void
     */
    public function bindBuffer($target, $buffer): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $buffer = $buffer instanceof \FFI\CData ? $buffer->cdata : $buffer;

        assert(Type::isUint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isUint16($buffer), 'Argument $buffer must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glBindBuffer', 'void (*)(GLenum target, GLuint buffer)');
        $proc($target, $buffer);
    }

    /**
     * {@see GL46::glDeleteBuffers} deletes $n buffer objects named by the elements of the array $buffers. After a
     * buffer object is deleted, it has no contents, and its name is free for reuse (for example by
     * {@see GL46::glGenBuffers}). If a buffer object that is currently bound is deleted, the binding reverts to 0
     * (the absence of any buffer object).
     *
     * {@see GL46::glDeleteBuffers} silently ignores 0's and names that do not correspond to existing buffer objects.
     *
     * @see http://docs.gl/gl2/glDeleteBuffers
     * @see http://docs.gl/gl4/glDeleteBuffers
     * @since 1.5
     * @param int|\FFI\CData|\FFI\CInt $n
     * @param \FFI\CData|\FFI\CIntPtr|null $buffers
     * @return void
     */
    public function deleteBuffers($n, ?\FFI\CData $buffers): void
    {
        $n = $n instanceof \FFI\CData ? $n->cdata : $n;

        assert(Type::isInt16($n), 'Argument $n must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glDeleteBuffers', 'void (*)(GLsizei n, const GLuint *buffers)');
        $proc($n, $buffers);
    }

    /**
     * {@see GL46::glGenBuffers} returns $n buffer object names in $buffers. There is no guarantee that the names
     * form a contiguous set of integers; however, it is guaranteed that none of the returned names was in use
     * immediately before the call to {@see GL46::glGenBuffers}.
     *
     * Buffer object names returned by a call to {@see GL46::glGenBuffers} are not returned by subsequent calls,
     * unless they are first deleted with {@see GL46::glDeleteBuffers}.
     *
     * No buffer objects are associated with the returned buffer object names until they are first bound by calling
     * {@see GL46::glBindBuffer}.
     *
     * @see http://docs.gl/gl2/glGenBuffers
     * @see http://docs.gl/gl4/glGenBuffers
     * @since 1.5
     * @param int|\FFI\CData|\FFI\CInt $n
     * @param \FFI\CData|\FFI\CIntPtr|null $buffers
     * @return void
     */
    public function genBuffers($n, ?\FFI\CData $buffers): void
    {
        $n = $n instanceof \FFI\CData ? $n->cdata : $n;

        assert(Type::isInt16($n), 'Argument $n must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGenBuffers', 'void (*)(GLsizei n, GLuint *buffers)');
        $proc($n, $buffers);
    }

    /**
     * {@see GL46::glIsBuffer} returns {@see GL46::GL_TRUE} if $buffer is currently the name of a buffer object. If
     * $buffer is zero, or is a non-zero value that is not currently the name of a buffer object, or if an error
     * occurs, {@see GL46::glIsBuffer} returns {@see GL46::GL_FALSE}.
     *
     * A name returned by {@see GL46::glGenBuffers}, but not yet associated with a buffer object by calling
     * {@see GL46::glBindBuffer}, is not the name of a buffer object.
     *
     * @see http://docs.gl/gl2/glIsBuffer
     * @see http://docs.gl/gl4/glIsBuffer
     * @since 1.5
     * @param int|\FFI\CData|\FFI\CInt $buffer
     * @return int|\FFI\CData|\FFI\CInt
     */
    public function isBuffer($buffer): int
    {
        $buffer = $buffer instanceof \FFI\CData ? $buffer->cdata : $buffer;

        assert(Type::isUint16($buffer), 'Argument $buffer must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glIsBuffer', 'GLboolean (*)(GLuint buffer)');
        return $proc($buffer);
    }

    /**
     * {@see GL46::glBufferData} and {@see GL46::glNamedBufferData} create a new data store for a buffer object. In
     * case of {@see GL46::glBufferData}, the buffer object currently bound to $target is used. For
     * {@see GL46::glNamedBufferData}, a buffer object associated with ID specified by the caller in $buffer will be
     * used instead.
     *
     * While creating the new storage, any pre-existing data store is deleted. The new data store is created with the
     * specified $size in bytes and $usage. If $data is not {@see GL46::NULL}, the data store is initialized with
     * data from this pointer. In its initial state, the new data store is not mapped, it has a {@see GL46::NULL}
     * mapped pointer, and its mapped access is {@see GL46::GL_READ_WRITE}.
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
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param mixed|float|string|int|\FFI\CData|\FFI\CInt $size
     * @param \FFI\CData|\FFI\CPtr|null $data
     * @param int|\FFI\CData|\FFI\CInt $usage
     * @return void
     */
    public function bufferData($target, $size, ?\FFI\CData $data, $usage): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $usage = $usage instanceof \FFI\CData ? $usage->cdata : $usage;

        assert(Type::isUint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isInt64($size), 'Argument $size must be a C-like GLsizeiptr, but incompatible or overflow value given');
        assert(Type::isUint16($usage), 'Argument $usage must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glBufferData', 'void (*)(GLenum target, GLsizeiptr size, const void *data, GLenum usage)');
        $proc($target, $size, $data, $usage);
    }

    /**
     * {@see GL46::glBufferSubData} and {@see GL46::glNamedBufferSubData} redefine some or all of the data store for
     * the specified buffer object. Data starting at byte offset $offset and extending for $size bytes is copied to
     * the data store from the memory pointed to by $data. $offset and $size must define a range lying entirely
     * within the buffer object's data store.
     *
     * @see http://docs.gl/gl2/glBufferSubData
     * @see http://docs.gl/gl4/glBufferSubData
     * @since 1.5
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param mixed|float|string|int|\FFI\CData|\FFI\CInt $offset
     * @param mixed|float|string|int|\FFI\CData|\FFI\CInt $size
     * @param \FFI\CData|\FFI\CPtr|null $data
     * @return void
     */
    public function bufferSubData($target, $offset, $size, ?\FFI\CData $data): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;

        assert(Type::isUint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isInt64($offset), 'Argument $offset must be a C-like GLintptr, but incompatible or overflow value given');
        assert(Type::isInt64($size), 'Argument $size must be a C-like GLsizeiptr, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glBufferSubData', 'void (*)(GLenum target, GLintptr offset, GLsizeiptr size, const void *data)');
        $proc($target, $offset, $size, $data);
    }

    /**
     * {@see GL46::glGetBufferSubData} and {@see GL46::glGetNamedBufferSubData} return some or all of the data
     * contents of the data store of the specified buffer object. Data starting at byte offset $offset and extending
     * for $size bytes is copied from the buffer object's data store to the memory pointed to by $data. An error is
     * thrown if the buffer object is currently mapped, or if $offset and $size together define a range beyond the
     * bounds of the buffer object's data store.
     *
     * @see http://docs.gl/gl2/glGetBufferSubData
     * @see http://docs.gl/gl4/glGetBufferSubData
     * @since 1.5
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param mixed|float|string|int|\FFI\CData|\FFI\CInt $offset
     * @param mixed|float|string|int|\FFI\CData|\FFI\CInt $size
     * @param \FFI\CData|\FFI\CPtr|null $data
     * @return void
     */
    public function getBufferSubData($target, $offset, $size, ?\FFI\CData $data): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;

        assert(Type::isUint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isInt64($offset), 'Argument $offset must be a C-like GLintptr, but incompatible or overflow value given');
        assert(Type::isInt64($size), 'Argument $size must be a C-like GLsizeiptr, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetBufferSubData', 'void (*)(GLenum target, GLintptr offset, GLsizeiptr size, void *data)');
        $proc($target, $offset, $size, $data);
    }

    /**
     * {@see GL46::glMapBuffer} and {@see GL46::glMapNamedBuffer} map the entire data store of a specified buffer
     * object into the client's address space. The data can then be directly read and/or written relative to the
     * returned pointer, depending on the specified $access policy.
     *
     * A pointer to the beginning of the mapped range is returned once all pending operations on that buffer object
     * have completed, and may be used to modify and/or query the corresponding range of the data store according to
     * the value of $access:    {@see GL46::GL_READ_ONLY} indicates that the returned pointer may be used to read
     * buffer object data.     {@see GL46::GL_WRITE_ONLY} indicates that the returned pointer may be used to modify
     * buffer object data.     {@see GL46::GL_READ_WRITE} indicates that the returned pointer may be used to read and
     * to modify buffer object data.
     *
     * If an error is generated, a `NULL` pointer is returned.
     *
     * If no error occurs, the returned pointer will reflect an allocation aligned to the value of
     * {@see GL46::GL_MIN_MAP_BUFFER_ALIGNMENT} basic machine units.
     *
     * The returned pointer values may not be passed as parameter values to GL commands. For example, they may not be
     * used to specify array pointers, or to specify or query pixel or texture image data; such actions produce
     * undefined results, although implementations may not check for such behavior for performance reasons.
     *
     * No GL error is generated if the returned pointer is accessed in a way inconsistent with $access (e.g. used to
     * read from a mapping made with $access {@see GL46::GL_WRITE_ONLY} or write to a mapping made with $access
     * {@see GL46::GL_READ_ONLY}), but the result is undefined and system errors (possibly including program
     * termination) may occur.
     *
     * Mappings to the data stores of buffer objects may have nonstandard performance characteristics. For example,
     * such mappings may be marked as uncacheable regions of memory, and in such cases reading from them may be very
     * slow. To ensure optimal performance, the client should use the mapping in a fashion consistent with the values
     * of {@see GL46::GL_BUFFER_USAGE} for the buffer object and of $access. Using a mapping in a fashion
     * inconsistent with these values is liable to be multiple orders of magnitude slower than using normal memory.
     *
     * @see http://docs.gl/gl2/glMapBuffer
     * @see http://docs.gl/gl4/glMapBuffer
     * @since 1.5
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $access
     * @return \FFI\CData|\FFI\CPtr|null
     */
    public function mapBuffer($target, $access): \FFI\CData
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $access = $access instanceof \FFI\CData ? $access->cdata : $access;

        assert(Type::isUint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isUint16($access), 'Argument $access must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glMapBuffer', 'void * (*)(GLenum target, GLenum access)');
        return $proc($target, $access);
    }

    /**
     * {@see GL46::glUnmapBuffer} and {@see GL46::glUnmapNamedBuffer} unmap (release) any mapping of a specified
     * buffer object into the client's address space (see {@see GL46::glMapBufferRange} and
     * {@see GL46::glMapBuffer}).
     *
     * If a mapping is not unmapped before the corresponding buffer object's data store is used by the GL, an error
     * will be generated by any GL command that attempts to dereference the buffer object's data store, unless the
     * buffer was successfully mapped with {@see GL46::GL_MAP_PERSISTENT_BIT} (see {@see GL46::glMapBufferRange}).
     * When a data store is unmapped, the mapped pointer becomes invalid.
     *
     * {@see GL46::glUnmapBuffer} returns {@see GL46::GL_TRUE} unless the data store contents have become corrupt
     * during the time the data store was mapped. This can occur for system-specific reasons that affect the
     * availability of graphics memory, such as screen mode changes. In such situations, {@see GL46::GL_FALSE} is
     * returned and the data store contents are undefined. An application must detect this rare condition and
     * reinitialize the data store.
     *
     * A buffer object's mapped data store is automatically unmapped when the buffer object is deleted or its data
     * store is recreated with {@see GL46::glBufferData}).
     *
     * @see http://docs.gl/gl4/glUnmapBuffer
     * @since 1.5
     * @param int|\FFI\CData|\FFI\CInt $target
     * @return int|\FFI\CData|\FFI\CInt
     */
    public function unmapBuffer($target): int
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;

        assert(Type::isUint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glUnmapBuffer', 'GLboolean (*)(GLenum target)');
        return $proc($target);
    }

    /**
     * {@see GL46::glGetBufferParameteriv} returns in $data a selected parameter of the buffer object specified by
     * $target.
     *
     * $value names a specific buffer object parameter, as follows:
     *
     *  - {@see GL46::GL_BUFFER_ACCESS}: $params returns the access policy set
     *    while mapping the buffer object. The initial value is
     *    {@see GL46::GL_READ_WRITE}.
     *
     *  - {@see GL46::GL_BUFFER_MAPPED}: $params returns a flag indicating
     *    whether the buffer object is currently mapped. The initial value is
     *    {@see GL46::GL_FALSE}.
     *
     *  - {@see GL46::GL_BUFFER_SIZE}: $params returns the size of the buffer
     *    object, measured in bytes. The initial value is 0.
     *
     *  - {@see GL46::GL_BUFFER_USAGE}: $params returns the buffer object's
     *    usage pattern. The initial value is {@see GL46::GL_STATIC_DRAW}.
     *
     * @see http://docs.gl/gl2/glGetBufferParameteriv
     * @since 1.5
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public function getBufferParameteriv($target, $pname, ?\FFI\CData $params): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $pname = $pname instanceof \FFI\CData ? $pname->cdata : $pname;

        assert(Type::isUint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isUint16($pname), 'Argument $pname must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetBufferParameteriv', 'void (*)(GLenum target, GLenum pname, GLint *params)');
        $proc($target, $pname, $params);
    }

    /**
     * {@see GL46::glGetBufferPointerv} and {@see GL46::glGetNamedBufferPointerv} return the buffer pointer $pname,
     * which must be {@see GL46::GL_BUFFER_MAP_POINTER}. The single buffer map pointer is returned in $params. A
     * {@see GL46::NULL} pointer is returned if the buffer object's data store is not currently mapped; or if the
     * requesting context did not map the buffer object's data store, and the implementation is unable to support
     * mappings on multiple clients.
     *
     * @see http://docs.gl/gl2/glGetBufferPointerv
     * @see http://docs.gl/gl4/glGetBufferPointerv
     * @since 1.5
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $pname
     * @param \FFI\CData|\FFI\CPtrPtr|null $params
     * @return void
     */
    public function getBufferPointerv($target, $pname, ?\FFI\CData $params): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $pname = $pname instanceof \FFI\CData ? $pname->cdata : $pname;

        assert(Type::isUint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isUint16($pname), 'Argument $pname must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetBufferPointerv', 'void (*)(GLenum target, GLenum pname, void **params)');
        $proc($target, $pname, $params);
    }
}
