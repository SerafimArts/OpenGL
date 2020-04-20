<?php

/**
 * This file is part of OpenGL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

use Serafim\OpenGL\GL43 as GL;

function assert_program(int $id, int $status): void
{
    GL::glGetProgramiv($id, $status, FFI::addr($result = GL::new('GLint')));
    GL::glGetProgramiv($id, GL::GL_INFO_LOG_LENGTH, FFI::addr($infoLogLength = GL::new('int')));

    if ($result->cdata === GL::GL_FALSE) {
        $ptr = GL::charPtr(\str_repeat(' ', $infoLogLength->cdata));
        GL::glGetShaderInfoLog($id, $infoLogLength->cdata, null, $ptr);

        throw new \RuntimeException( FFI::string($ptr));
    }
}

function assert_shader(int $id, int $status): void
{
    GL::glGetShaderiv($id, $status, FFI::addr($result = GL::new('GLint')));
    GL::glGetShaderiv($id, GL::GL_INFO_LOG_LENGTH, FFI::addr($infoLogLength = GL::new('int')));

    if ($result->cdata === GL::GL_FALSE) {
        $ptr = GL::charPtr(\str_repeat(' ', $infoLogLength->cdata));
        GL::glGetShaderInfoLog($id, $infoLogLength->cdata, null, $ptr);

        throw new \RuntimeException( FFI::string($ptr));
    }
}

function compile_shader(string $file, int $type): int
{
    $source = \trim(\file_get_contents($file));
    $source = \str_replace("\r", '', $source);

    $string = GL::charPtr($source);

    $id = GL::glCreateShader($type);
    GL::glShaderSource($id, 1, FFI::addr($string), null);
    GL::glCompileShader($id);

    $out = GL::charPtr($source);

    GL::glGetShaderSource($id, 512, null, $out);
    try {
        assert_shader($id, GL::GL_COMPILE_STATUS);

        return $id;
    } catch (\Throwable $e) {
        throw new \RuntimeException($e->getMessage() . ' in shader ' . \realpath($file) . ':0');
    } finally {
        FFI::free($string);
    }
}

/**
 * @param int $n
 * @return \FFI\CData|\FFI\CInt
 */
function gen_vbo(int $n = 1): \FFI\CData
{
    $vbo = GL::new('GLuint');
    GL::glGenBuffers($n, \FFI::addr($vbo)); // Generate 1 buffer

    return $vbo;
}

/**
 * @param int $n
 * @return \FFI\CData|\FFI\CInt
 */
function gen_vao(int $n = 1): \FFI\CData
{
    $vao = GL::new('GLuint');
    GL::glGenVertexArrays($n, \FFI::addr($vao));

    return $vao;
}

function load_shaders(string $vertex, string $fragment)
{
    $program = GL::glCreateProgram();

    $vertexId = compile_shader($vertex, GL::GL_VERTEX_SHADER);
    $fragmentId = compile_shader($fragment, GL::GL_FRAGMENT_SHADER);

    GL::glAttachShader($program, $vertexId);
    GL::glAttachShader($program, $fragmentId);
    GL::glLinkProgram($program);

    try {
        assert_program($program, GL::GL_LINK_STATUS);
    } catch (\Throwable $e) {
        throw new \RuntimeException($e->getMessage() . ' in shader [' . $vertex . ', ' . $fragment . ']');
    }

    GL::glDeleteShader($vertexId);
    GL::glDeleteShader($fragmentId);

    return $program;
}

function enable_logger(): void
{
    GL::glEnable(GL::GL_DEBUG_OUTPUT);
    GL::glDebugMessageCallback(function ($src, $type, $id, $severity, $len, $message, $user) {
        $message = \substr($message, 0, $len) . "\n";

        switch ($type) {
            case GL::GL_DEBUG_TYPE_ERROR:
                \fwrite(\STDERR, '[ERROR]: ' . $message);
                break;

            case GL::GL_DEBUG_TYPE_DEPRECATED_BEHAVIOR:
                \fwrite(\STDERR, '[WARNING]: ' . $message);
                break;

            case GL::GL_DEBUG_TYPE_OTHER:
                \fwrite(\STDERR, '[INFO]: ' . $message);
                break;

            case GL::GL_DEBUG_TYPE_PERFORMANCE:
                \fwrite(\STDERR, '[PERFORMANCE]: ' . $message);
                break;

            case GL::GL_DEBUG_TYPE_PORTABILITY:
                \fwrite(\STDERR, '[PORTABILITY]: ' . $message);
                break;

            case GL::GL_DEBUG_TYPE_UNDEFINED_BEHAVIOR:
                \fwrite(\STDERR, '[UNDEFINED BEHAVIOR]: ' . $message);
                break;

            default:
                \fwrite(\STDERR, '[OTHER]: ' . $message);
        }

    }, GL::new('void*'));
}
