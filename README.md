# OpenGL

This package provides an OpenGL bindings, including:
- OpenGL 1.0 - 4.6 (GL)
- ~~OpenGL Utility Library (GLU)~~ (not yet)
- ~~WGL (Windows Platform)~~ (not yet)
- ~~GLX (X11)~~ (not yet)

## Requirements

- PHP >= 7.4
    - Note: Some types are supported only in x64 platform (like `int64`, `uint64` and `float80`).
    - Note: ZTS mode may cause errors (for example, to work with environment you should use kernel32 or other system functions instead of the built-in functions).
- ext-ffi

### Note 1

Some methods are not yet adapted for PHP.

#### Example 1

Current behaviour:

```php
// GL::genBuffers(int $n, ?\FFI\CData $buffers): void;

$vbo = $gl->new('GLuint');
$gl->genBuffers(1, FFI::addr($vbo));
```

Instead of:

```php
// GL::genBuffers(int $n, int &$buffers): void;

$vbo = 0;
$gl->genBuffers(1, $vbo);
```

#### Example 2

Current behaviour:

```php
$vertices = GL::arrayOf('GLfloat', [
    -1.0, -1.0, 0.0,
     1.0, -1.0, 0.0,
     0.0,  1.0, 0.0,
]);

$sizeOf = \FFI::sizeof(\FFI::addr($vertices));

$gl->bufferData(GL::GL_ARRAY_BUFFER, $sizeOf, $vertices, GL::GL_STATIC_DRAW);
```

Instead of:

```php
$vertices = new Float32Array(
    -1.0, -1.0, 0.0,
     1.0, -1.0, 0.0,
     0.0,  1.0, 0.0,
);

$gl->bufferData(GL::GL_ARRAY_BUFFER, $vertices->sizeOf(), $vertices, GL::GL_STATIC_DRAW);
```

### Note 2

Some things are not optimized.

### Note 3

Code checked on Windows and quite possibly the code will work on Linux.

### Note 4

Some functional/API can be rewritten.

## Examples

See [/example](/example) for details.
