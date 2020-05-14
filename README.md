# OpenGL

This package provides an OpenGL bindings, including:
- OpenGL 1.0 - 4.6 (GL)
- ~~OpenGL Extensions~~ 
    - Please use `$gl->proc()` function instead.
```php
$wglSwapIntervalEXT = $gl->proc('wglSwapIntervalEXT', 'int (*)(int interval)');
$wglSwapIntervalEXT(0);
```
- ~~OpenGL Utility Library (GLU)~~ (not yet)
- WGL (Windows Platform)
- ~~GLX (X11)~~ (not yet)

## Requirements

- PHP >= 7.4
    - Note: Some types are supported only in x64 platform (like `int64`, `uint64` and `float80`).
    - Note: ZTS mode may cause errors (for example, to work with environment you should use kernel32 or other system functions instead of the built-in functions).
- ext-ffi

### Note 1

Some things are not optimized.

### Note 2

Code checked on Windows and quite possibly the code will work on Linux.

### Note 3

Some functional/API can be rewritten.

## Examples

See [example](example/example.php) for details.
