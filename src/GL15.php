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
     * Returns *`n`* query object names in *`ids`*. There is no guarantee that the names form a contiguous set of
     * integers; however, it is guaranteed that none of the returned names was in use immediately before the call to
     * `glGenQueries`.
     *
     * Query object names returned by a call to `glGenQueries` are not returned by subsequent calls, unless they are
     * first deleted with {@see glDeleteQueries}.
     *
     * No query objects are associated with the returned query object names until they are first used by calling
     * {@see glBeginQuery}.
     *
     * @see http://docs.gl/gl2/glGenQueries
     * @see http://docs.gl/gl3/glGenQueries
     * @see http://docs.gl/gl4/glGenQueries
     * @since 1.5
     * @param int $n
     * @param \FFI\CData|\FFI\CIntPtr|null $ids
     * @return void
     */
    public static function glGenQueries(int $n, ?\FFI\CData $ids): void
    {
        assert(version_compare(self::$info->version, '1.5') >= 0, __FUNCTION__ . ' is available since OpenGL 1.5, but only OpenGL '. self::$info->version . ' is available');
        assert($n >= \PHP_INT_MIN && $n <= \PHP_INT_MAX, 'Argument $n overflow: C type GLsizei is required');

        $proc = self::getProc('glGenQueries', 'void (*)(GLsizei n, GLuint *ids)');
        $proc($n, $ids);
    }

    /**
     * Deletes *`n`* query objects named by the elements of the array *`ids`*. After a query object is deleted, it
     * has no contents, and its name is free for reuse (for example by {@see glGenQueries}).
     *
     *  - `glDeleteQueries` silently ignores 0's and names that do not correspond to existing query objects.
     *
     * @see http://docs.gl/gl2/glDeleteQueries
     * @see http://docs.gl/gl3/glDeleteQueries
     * @see http://docs.gl/gl4/glDeleteQueries
     * @since 1.5
     * @param int $n
     * @param \FFI\CData|\FFI\CIntPtr|null $ids
     * @return void
     */
    public static function glDeleteQueries(int $n, ?\FFI\CData $ids): void
    {
        assert(version_compare(self::$info->version, '1.5') >= 0, __FUNCTION__ . ' is available since OpenGL 1.5, but only OpenGL '. self::$info->version . ' is available');
        assert($n >= \PHP_INT_MIN && $n <= \PHP_INT_MAX, 'Argument $n overflow: C type GLsizei is required');

        $proc = self::getProc('glDeleteQueries', 'void (*)(GLsizei n, const GLuint *ids)');
        $proc($n, $ids);
    }

    /**
     * Returns `GL_TRUE` if *`id`* is currently the name of a query object. If *`id`* is zero, or is a non-zero value
     * that is not currently the name of a query object, or if an error occurs, `glIsQuery` returns `GL_FALSE`.
     *
     * A name returned by {@see glGenQueries}, but not yet associated with a query object by calling
     * {@see glBeginQuery}, is not the name of a query object.
     *
     * @see http://docs.gl/gl2/glIsQuery
     * @see http://docs.gl/gl3/glIsQuery
     * @see http://docs.gl/gl4/glIsQuery
     * @since 1.5
     * @param int $id
     * @return int
     */
    public static function glIsQuery(int $id): int
    {
        assert(version_compare(self::$info->version, '1.5') >= 0, __FUNCTION__ . ' is available since OpenGL 1.5, but only OpenGL '. self::$info->version . ' is available');
        assert($id >= 0 && $id <= 4_294_967_295, 'Argument $id overflow: C type GLuint is required');

        $proc = self::getProc('glIsQuery', 'GLboolean (*)(GLuint id)');
        return $proc($id);
    }

    /**
     * And {@see glEndQuery} delimit the boundaries of a query object. If a query object with name *`id`* does
     * not yet exist it is created.
     *
     * When `glBeginQuery` is executed, the query object's samples-passed counter is reset to 0. Subsequent rendering
     * will increment the counter once for every sample that passes the depth test. When `glEndQuery` is executed,
     * the samples-passed counter is assigned to the query object's result value. This value can be queried by
     * calling {@see glGetQueryObject} with *`pname`* `GL_QUERY_RESULT`.
     *
     * Querying the `GL_QUERY_RESULT` implicitly flushes the GL pipeline until the rendering delimited by the query
     * object has completed and the result is available. `GL_QUERY_RESULT_AVAILABLE` can be queried to determine if
     * the result is immediately available or if the rendering is not yet complete.
     *
     * @see http://docs.gl/gl2/glBeginQuery
     * @see http://docs.gl/gl3/glBeginQuery
     * @see http://docs.gl/gl4/glBeginQuery
     * @since 1.5
     * @param int $target
     * @param int $id
     * @return void
     */
    public static function glBeginQuery(int $target, int $id): void
    {
        assert(version_compare(self::$info->version, '1.5') >= 0, __FUNCTION__ . ' is available since OpenGL 1.5, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($id >= 0 && $id <= 4_294_967_295, 'Argument $id overflow: C type GLuint is required');

        $proc = self::getProc('glBeginQuery', 'void (*)(GLenum target, GLuint id)');
        $proc($target, $id);
    }

    /**
     * @see http://docs.gl/gl2/glEndQuery
     * @see http://docs.gl/gl3/glEndQuery
     * @see http://docs.gl/gl4/glEndQuery
     * @since 1.5
     * @param int $target
     * @return void
     */
    public static function glEndQuery(int $target): void
    {
        assert(version_compare(self::$info->version, '1.5') >= 0, __FUNCTION__ . ' is available since OpenGL 1.5, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');

        $proc = self::getProc('glEndQuery', 'void (*)(GLenum target)');
        $proc($target);
    }

    /**
     * Returns in *`params`* a selected parameter of the query object target specified by *`target`*.
     *
     * *`pname`* names a specific query object target parameter. When *`target`* is `GL_SAMPLES_PASSED`, *`pname`*
     * can be as follows:
     *
     *  - `GL_CURRENT_QUERY` *`params`* returns the name of the currently active occlusion query object. If no
     * occlusion query is active, 0 is returned. The initial value is 0.
     *
     *  - `GL_QUERY_COUNTER_BITS` *`params`* returns the number of bits in the query counter used to accumulate
     * passing samples. If the number of bits returned is 0, the implementation does not support a query counter, and
     * the results obtained from {@see glGetQueryObject} are useless.
     *
     * @see http://docs.gl/gl2/glGetQueryiv
     * @see http://docs.gl/gl3/glGetQueryiv
     * @see http://docs.gl/gl4/glGetQueryiv
     * @since 1.5
     * @param int $target
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glGetQueryiv(int $target, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '1.5') >= 0, __FUNCTION__ . ' is available since OpenGL 1.5, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        $proc = self::getProc('glGetQueryiv', 'void (*)(GLenum target, GLenum pname, GLint *params)');
        $proc($target, $pname, $params);
    }

    /**
     * @since 1.5
     * @param int $id
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glGetQueryObjectiv(int $id, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '1.5') >= 0, __FUNCTION__ . ' is available since OpenGL 1.5, but only OpenGL '. self::$info->version . ' is available');
        assert($id >= 0 && $id <= 4_294_967_295, 'Argument $id overflow: C type GLuint is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        $proc = self::getProc('glGetQueryObjectiv', 'void (*)(GLuint id, GLenum pname, GLint *params)');
        $proc($id, $pname, $params);
    }

    /**
     * @since 1.5
     * @param int $id
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glGetQueryObjectuiv(int $id, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '1.5') >= 0, __FUNCTION__ . ' is available since OpenGL 1.5, but only OpenGL '. self::$info->version . ' is available');
        assert($id >= 0 && $id <= 4_294_967_295, 'Argument $id overflow: C type GLuint is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        $proc = self::getProc('glGetQueryObjectuiv', 'void (*)(GLuint id, GLenum pname, GLuint *params)');
        $proc($id, $pname, $params);
    }

    /**
     * Lets you create or use a named buffer object. Calling `glBindBuffer` with *`target`* set to `GL_ARRAY_BUFFER`,
     * `GL_ELEMENT_ARRAY_BUFFER`, `GL_PIXEL_PACK_BUFFER` or `GL_PIXEL_UNPACK_BUFFER` and *`buffer`* set to the name
     * of the new buffer object binds the buffer object name to the target. When a buffer object is bound to a
     * target, the previous binding for that target is automatically broken.
     *
     * Buffer object names are unsigned integers. The value zero is reserved, but there is no default buffer object
     * for each buffer object target. Instead, *`buffer`* set to zero effectively unbinds any buffer object
     * previously bound, and restores client memory usage for that buffer object target. Buffer object names and the
     * corresponding buffer object contents are local to the shared display-list space (see
     * {@see glXCreateContext}) of the current GL rendering context; two rendering contexts share buffer
     * object names only if they also share display lists.
     *
     * You may use {@see glGenBuffers} to generate a set of new buffer object names.
     *
     * The state of a buffer object immediately after it is first bound is an unmapped zero-sized memory buffer with
     * `GL_READ_WRITE` access and `GL_STATIC_DRAW` usage.
     *
     * While a non-zero buffer object name is bound, GL operations on the target to which it is bound affect the
     * bound buffer object, and queries of the target to which it is bound return state from the bound buffer object.
     * While buffer object name zero is bound, as in the initial state, attempts to modify or query state on the
     * target to which it is bound generates an `GL_INVALID_OPERATION` error.
     *
     * When vertex array pointer state is changed, for example by a call to {@see glNormalPointer}, the
     * current buffer object binding (`GL_ARRAY_BUFFER_BINDING`) is copied into the corresponding client state for
     * the vertex array type being changed, for example `GL_NORMAL_ARRAY_BUFFER_BINDING`. While a non-zero buffer
     * object is bound to the `GL_ARRAY_BUFFER` target, the vertex array pointer parameter that is traditionally
     * interpreted as a pointer to client-side memory is instead interpreted as an offset within the buffer object
     * measured in basic machine units.
     *
     * While a non-zero buffer object is bound to the `GL_ELEMENT_ARRAY_BUFFER` target, the indices parameter of
     * {@see glDrawElements}, {@see glDrawRangeElements}, or
     * {@see glMultiDrawElements} that is traditionally interpreted as a pointer to client-side
     * memory is instead interpreted as an offset within the buffer object measured in basic machine units.
     *
     * While a non-zero buffer object is bound to the `GL_PIXEL_PACK_BUFFER` target, the following commands are
     * affected: {@see glGetCompressedTexImage},
     * {@see glGetConvolutionFilter}, {@see glGetHistogram},
     * {@see glGetMinmax}, {@see glGetPixelMap}, {@see glGetPolygonStipple},
     * {@see glGetSeparableFilter}, {@see glGetTexImage}, and
     * {@see glReadPixels}. The pointer parameter that is traditionally interpreted as a pointer to
     * client-side memory where the pixels are to be packed is instead interpreted as an offset within the buffer
     * object measured in basic machine units.
     *
     * While a non-zero buffer object is bound to the `GL_PIXEL_UNPACK_BUFFER` target, the following commands are
     * affected: {@see glBitmap}, {@see glColorSubTable}, {@see glColorTable},
     * {@see glCompressedTexImage1D}, {@see glCompressedTexImage2D},
     * {@see glCompressedTexImage3D}, {@see glCompressedTexSubImage1D},
     * {@see glCompressedTexSubImage2D},
     * {@see glCompressedTexSubImage3D}, {@see glConvolutionFilter1D},
     * {@see glConvolutionFilter2D}, {@see glDrawPixels}, {@see glPixelMap},
     * {@see glPolygonStipple}, {@see glSeparableFilter2D},
     * {@see glTexImage1D}, {@see glTexImage2D}, {@see glTexImage3D},
     * {@see glTexSubImage1D}, {@see glTexSubImage2D}, and
     * {@see glTexSubImage3D}. The pointer parameter that is traditionally interpreted as a pointer to
     * client-side memory from which the pixels are to be unpacked is instead interpreted as an offset within the
     * buffer object measured in basic machine units.
     *
     * A buffer object binding created with `glBindBuffer` remains active until a different buffer object name is
     * bound to the same target, or until the bound buffer object is deleted with {@see glDeleteBuffers}.
     *
     * Once created, a named buffer object may be re-bound to any target as often as needed. However, the GL
     * implementation may make choices about how to optimize the storage of a buffer object based on its initial
     * binding target.
     *
     * @see http://docs.gl/gl2/glBindBuffer
     * @see http://docs.gl/gl3/glBindBuffer
     * @see http://docs.gl/gl4/glBindBuffer
     * @since 1.5
     * @param int $target
     * @param int $buffer
     * @return void
     */
    public static function glBindBuffer(int $target, int $buffer): void
    {
        assert(version_compare(self::$info->version, '1.5') >= 0, __FUNCTION__ . ' is available since OpenGL 1.5, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($buffer >= 0 && $buffer <= 4_294_967_295, 'Argument $buffer overflow: C type GLuint is required');

        $proc = self::getProc('glBindBuffer', 'void (*)(GLenum target, GLuint buffer)');
        $proc($target, $buffer);
    }

    /**
     * Deletes *`n`* buffer objects named by the elements of the array *`buffers`*. After a buffer object is deleted,
     * it has no contents, and its name is free for reuse (for example by {@see glGenBuffers}). If a buffer
     * object that is currently bound is deleted, the binding reverts to 0 (the absence of any buffer object, which
     * reverts to client memory usage).
     *
     *  - `glDeleteBuffers` silently ignores 0's and names that do not correspond to existing buffer objects.
     *
     * @see http://docs.gl/gl2/glDeleteBuffers
     * @see http://docs.gl/gl3/glDeleteBuffers
     * @see http://docs.gl/gl4/glDeleteBuffers
     * @since 1.5
     * @param int $n
     * @param \FFI\CData|\FFI\CIntPtr|null $buffers
     * @return void
     */
    public static function glDeleteBuffers(int $n, ?\FFI\CData $buffers): void
    {
        assert(version_compare(self::$info->version, '1.5') >= 0, __FUNCTION__ . ' is available since OpenGL 1.5, but only OpenGL '. self::$info->version . ' is available');
        assert($n >= \PHP_INT_MIN && $n <= \PHP_INT_MAX, 'Argument $n overflow: C type GLsizei is required');

        $proc = self::getProc('glDeleteBuffers', 'void (*)(GLsizei n, const GLuint *buffers)');
        $proc($n, $buffers);
    }

    /**
     * Returns *`n`* buffer object names in *`buffers`*. There is no guarantee that the names form a contiguous set
     * of integers; however, it is guaranteed that none of the returned names was in use immediately before the call
     * to `glGenBuffers`.
     *
     * Buffer object names returned by a call to `glGenBuffers` are not returned by subsequent calls, unless they are
     * first deleted with {@see glDeleteBuffers}.
     *
     * No buffer objects are associated with the returned buffer object names until they are first bound by calling
     * {@see glBindBuffer}.
     *
     * @see http://docs.gl/gl2/glGenBuffers
     * @see http://docs.gl/gl3/glGenBuffers
     * @see http://docs.gl/gl4/glGenBuffers
     * @since 1.5
     * @param int $n
     * @param \FFI\CData|\FFI\CIntPtr|null $buffers
     * @return void
     */
    public static function glGenBuffers(int $n, ?\FFI\CData $buffers): void
    {
        assert(version_compare(self::$info->version, '1.5') >= 0, __FUNCTION__ . ' is available since OpenGL 1.5, but only OpenGL '. self::$info->version . ' is available');
        assert($n >= \PHP_INT_MIN && $n <= \PHP_INT_MAX, 'Argument $n overflow: C type GLsizei is required');

        $proc = self::getProc('glGenBuffers', 'void (*)(GLsizei n, GLuint *buffers)');
        $proc($n, $buffers);
    }

    /**
     * Returns `GL_TRUE` if *`buffer`* is currently the name of a buffer object. If *`buffer`* is zero, or is a
     * non-zero value that is not currently the name of a buffer object, or if an error occurs, `glIsBuffer` returns
     * `GL_FALSE`.
     *
     * A name returned by {@see glGenBuffers}, but not yet associated with a buffer object by calling
     * {@see glBindBuffer}, is not the name of a buffer object.
     *
     * @see http://docs.gl/gl2/glIsBuffer
     * @see http://docs.gl/gl3/glIsBuffer
     * @see http://docs.gl/gl4/glIsBuffer
     * @since 1.5
     * @param int $buffer
     * @return int
     */
    public static function glIsBuffer(int $buffer): int
    {
        assert(version_compare(self::$info->version, '1.5') >= 0, __FUNCTION__ . ' is available since OpenGL 1.5, but only OpenGL '. self::$info->version . ' is available');
        assert($buffer >= 0 && $buffer <= 4_294_967_295, 'Argument $buffer overflow: C type GLuint is required');

        $proc = self::getProc('glIsBuffer', 'GLboolean (*)(GLuint buffer)');
        return $proc($buffer);
    }

    /**
     * Creates a new data store for the buffer object currently bound to *`target`*. Any pre-existing data store is
     * deleted. The new data store is created with the specified *`size`* in bytes and *`usage`*. If *`data`* is not
     * `NULL`, the data store is initialized with data from this pointer. In its initial state, the new data store is
     * not mapped, it has a `NULL` mapped pointer, and its mapped access is `GL_READ_WRITE`.
     *
     * *`usage`* is a hint to the GL implementation as to how a buffer object's data store will be accessed. This
     * enables the GL implementation to make more intelligent decisions that may significantly impact buffer object
     * performance. It does not, however, constrain the actual usage of the data store. *`usage`* can be broken down
     * into two parts: first, the frequency of access (modification and usage), and second, the nature of that
     * access. The frequency of access may be one of these:
     *
     * STREAM The data store contents will be modified once and used at most a few times.
     *
     * STATIC The data store contents will be modified once and used many times.
     *
     * DYNAMIC The data store contents will be modified repeatedly and used many times.
     *
     * The nature of access may be one of these:
     *
     * DRAW The data store contents are modified by the application, and used as the source for GL drawing and image
     * specification commands.
     *
     * READ The data store contents are modified by reading data from the GL, and used to return that data when
     * queried by the application.
     *
     * COPY The data store contents are modified by reading data from the GL, and used as the source for GL drawing
     * and image specification commands.
     *
     * @see http://docs.gl/gl2/glBufferData
     * @see http://docs.gl/gl3/glBufferData
     * @see http://docs.gl/gl4/glBufferData
     * @since 1.5
     * @param int $target
     * @param int $size
     * @param \FFI\CData|\FFI\CPtr|null $data
     * @param int $usage
     * @return void
     */
    public static function glBufferData(int $target, int $size, ?\FFI\CData $data, int $usage): void
    {
        assert(version_compare(self::$info->version, '1.5') >= 0, __FUNCTION__ . ' is available since OpenGL 1.5, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($size >= 0 && $size <= \PHP_INT_MAX, 'Argument $size overflow: C type GLsizeiptr is required');
        assert($usage >= 0 && $usage <= 4_294_967_295, 'Argument $usage overflow: C type GLenum is required');

        $proc = self::getProc('glBufferData', 'void (*)(GLenum target, GLsizeiptr size, const void *data, GLenum usage)');
        $proc($target, $size, $data, $usage);
    }

    /**
     * Redefines some or all of the data store for the buffer object currently bound to *`target`*. Data starting at
     * byte offset *`offset`* and extending for *`size`* bytes is copied to the data store from the memory pointed to
     * by *`data`*. An error is thrown if *`offset`* and *`size`* together define a range beyond the bounds of the
     * buffer object's data store.
     *
     * @see http://docs.gl/gl2/glBufferSubData
     * @see http://docs.gl/gl3/glBufferSubData
     * @see http://docs.gl/gl4/glBufferSubData
     * @since 1.5
     * @param int $target
     * @param int $offset
     * @param int $size
     * @param \FFI\CData|\FFI\CPtr|null $data
     * @return void
     */
    public static function glBufferSubData(int $target, int $offset, int $size, ?\FFI\CData $data): void
    {
        assert(version_compare(self::$info->version, '1.5') >= 0, __FUNCTION__ . ' is available since OpenGL 1.5, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($offset >= 0 && $offset <= \PHP_INT_MAX, 'Argument $offset overflow: C type GLintptr is required');
        assert($size >= 0 && $size <= \PHP_INT_MAX, 'Argument $size overflow: C type GLsizeiptr is required');

        $proc = self::getProc('glBufferSubData', 'void (*)(GLenum target, GLintptr offset, GLsizeiptr size, const void *data)');
        $proc($target, $offset, $size, $data);
    }

    /**
     * Returns some or all of the data from the buffer object currently bound to *`target`*. Data starting at byte
     * offset *`offset`* and extending for *`size`* bytes is copied from the data store to the memory pointed to by
     * *`data`*. An error is thrown if the buffer object is currently mapped, or if *`offset`* and *`size`* together
     * define a range beyond the bounds of the buffer object's data store.
     *
     * @see http://docs.gl/gl2/glGetBufferSubData
     * @see http://docs.gl/gl3/glGetBufferSubData
     * @see http://docs.gl/gl4/glGetBufferSubData
     * @since 1.5
     * @param int $target
     * @param int $offset
     * @param int $size
     * @param \FFI\CData|\FFI\CPtr|null $data
     * @return void
     */
    public static function glGetBufferSubData(int $target, int $offset, int $size, ?\FFI\CData $data): void
    {
        assert(version_compare(self::$info->version, '1.5') >= 0, __FUNCTION__ . ' is available since OpenGL 1.5, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($offset >= 0 && $offset <= \PHP_INT_MAX, 'Argument $offset overflow: C type GLintptr is required');
        assert($size >= 0 && $size <= \PHP_INT_MAX, 'Argument $size overflow: C type GLsizeiptr is required');

        $proc = self::getProc('glGetBufferSubData', 'void (*)(GLenum target, GLintptr offset, GLsizeiptr size, void *data)');
        $proc($target, $offset, $size, $data);
    }

    /**
     * Maps to the client's address space the entire data store of the buffer object currently bound to *`target`*.
     * The data can then be directly read and/or written relative to the returned pointer, depending on the specified
     * *`access`* policy. If the GL is unable to map the buffer object's data store, `glMapBuffer` generates an error
     * and returns `NULL`. This may occur for system-specific reasons, such as low virtual memory availability.
     *
     * If a mapped data store is accessed in a way inconsistent with the specified *`access`* policy, no error is
     * generated, but performance may be negatively impacted and system errors, including program termination, may
     * result. Unlike the *`usage`* parameter of `glBufferData`, *`access`* is not a hint, and does in fact constrain
     * the usage of the mapped data store on some GL implementations. In order to achieve the highest performance
     * available, a buffer object's data store should be used in ways consistent with both its specified *`usage`*
     * and *`access`* parameters.
     *
     * A mapped data store must be unmapped with `glUnmapBuffer` before its buffer object is used. Otherwise an error
     * will be generated by any GL command that attempts to dereference the buffer object's data store. When a data
     * store is unmapped, the pointer to its data store becomes invalid. `glUnmapBuffer` returns `GL_TRUE` unless the
     * data store contents have become corrupt during the time the data store was mapped. This can occur for
     * system-specific reasons that affect the availability of graphics memory, such as screen mode changes. In such
     * situations, `GL_FALSE` is returned and the data store contents are undefined. An application must detect this
     * rare condition and reinitialize the data store.
     *
     * A buffer object's mapped data store is automatically unmapped when the buffer object is deleted or its data
     * store is recreated with `glBufferData`.
     *
     * @see http://docs.gl/gl2/glMapBuffer
     * @see http://docs.gl/gl3/glMapBuffer
     * @see http://docs.gl/gl4/glMapBuffer
     * @since 1.5
     * @param int $target
     * @param int $access
     * @return \FFI\CData|\FFI\CPtr|null
     */
    public static function glMapBuffer(int $target, int $access): \FFI\CData
    {
        assert(version_compare(self::$info->version, '1.5') >= 0, __FUNCTION__ . ' is available since OpenGL 1.5, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($access >= 0 && $access <= 4_294_967_295, 'Argument $access overflow: C type GLenum is required');

        $proc = self::getProc('glMapBuffer', 'void * (*)(GLenum target, GLenum access)');
        return $proc($target, $access);
    }

    /**
     * @see http://docs.gl/gl2/glUnmapBuffer
     * @see http://docs.gl/gl3/glUnmapBuffer
     * @see http://docs.gl/gl4/glUnmapBuffer
     * @since 1.5
     * @param int $target
     * @return int
     */
    public static function glUnmapBuffer(int $target): int
    {
        assert(version_compare(self::$info->version, '1.5') >= 0, __FUNCTION__ . ' is available since OpenGL 1.5, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');

        $proc = self::getProc('glUnmapBuffer', 'GLboolean (*)(GLenum target)');
        return $proc($target);
    }

    /**
     * Returns in *`data`* a selected parameter of the buffer object specified by *`target`*.
     *
     * *`value`* names a specific buffer object parameter, as follows:
     *
     *  - `GL_BUFFER_ACCESS` *`params`* returns the access policy set while mapping the buffer object. The initial
     * value is `GL_READ_WRITE`.
     *
     *  - `GL_BUFFER_MAPPED` *`params`* returns a flag indicating whether the buffer object is currently mapped. The
     * initial value is `GL_FALSE`.
     *
     *  - `GL_BUFFER_SIZE` *`params`* returns the size of the buffer object, measured in bytes. The initial value is
     * 0.
     *
     *  - `GL_BUFFER_USAGE` *`params`* returns the buffer object's usage pattern. The initial value is
     * `GL_STATIC_DRAW`.
     *
     * @see http://docs.gl/gl2/glGetBufferParameteriv
     * @since 1.5
     * @param int $target
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glGetBufferParameteriv(int $target, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '1.5') >= 0, __FUNCTION__ . ' is available since OpenGL 1.5, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        $proc = self::getProc('glGetBufferParameteriv', 'void (*)(GLenum target, GLenum pname, GLint *params)');
        $proc($target, $pname, $params);
    }

    /**
     * Returns pointer information. *`pname`* is a symbolic constant indicating the pointer to be returned, which
     * must be `GL_BUFFER_MAP_POINTER`, the pointer to which the buffer object's data store is mapped. If the data
     * store is not currently mapped, `NULL` is returned. *`params`* is a pointer to a location in which to place the
     * returned pointer value.
     *
     * @see http://docs.gl/gl2/glGetBufferPointerv
     * @see http://docs.gl/gl3/glGetBufferPointerv
     * @see http://docs.gl/gl4/glGetBufferPointerv
     * @since 1.5
     * @param int $target
     * @param int $pname
     * @param \FFI\CData|\FFI\CPtrPtr|null $params
     * @return void
     */
    public static function glGetBufferPointerv(int $target, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '1.5') >= 0, __FUNCTION__ . ' is available since OpenGL 1.5, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        $proc = self::getProc('glGetBufferPointerv', 'void (*)(GLenum target, GLenum pname, void **params)');
        $proc($target, $pname, $params);
    }
}
