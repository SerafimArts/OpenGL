<?php

/**
 * This file is part of OpenGL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

use Serafim\OpenGL\GL43 as GL;

function assert_program(GL $gl, int $id, int $status): void
{
    $gl->getProgramiv($id, $status, FFI::addr($result = $gl->new('GLint')));
    $gl->getProgramiv($id, GL::GL_INFO_LOG_LENGTH, FFI::addr($infoLogLength = $gl->new('int')));

    if ($result->cdata === GL::GL_FALSE) {
        $ptr = $gl->charPtr(\str_repeat(' ', $infoLogLength->cdata));
        $gl->getShaderInfoLog($id, $infoLogLength->cdata, null, $ptr);

        throw new \RuntimeException(FFI::string($ptr));
    }
}

function assert_shader(GL $gl, int $id, int $status): void
{
    $gl->getShaderiv($id, $status, FFI::addr($result = $gl->new('GLint')));
    $gl->getShaderiv($id, GL::GL_INFO_LOG_LENGTH, FFI::addr($infoLogLength = $gl->new('int')));

    if ($result->cdata === GL::GL_FALSE) {
        $ptr = $gl->charPtr(\str_repeat(' ', $infoLogLength->cdata));
        $gl->getShaderInfoLog($id, $infoLogLength->cdata, null, $ptr);

        throw new \RuntimeException(FFI::string($ptr));
    }
}

function compile_shader(GL $gl, string $file, int $type): int
{
    $source = \trim(\file_get_contents($file));
    $source = \str_replace("\r", '', $source);

    $string = $gl->charPtr($source);

    $id = $gl->createShader($type);
    $gl->shaderSource($id, 1, FFI::addr($string), null);
    $gl->compileShader($id);

    $out = $gl->charPtr($source);

    $gl->getShaderSource($id, 512, null, $out);
    try {
        assert_shader($gl, $id, GL::GL_COMPILE_STATUS);

        return $id;
    } catch (\Throwable $e) {
        throw new \RuntimeException($e->getMessage() . ' in shader ' . \realpath($file) . ':0', 0, $e);
    } finally {
        FFI::free($string);
    }
}

function load_shaders(GL $gl, string $vertex, string $fragment)
{
    $program = $gl->createProgram();

    $vertexId = compile_shader($gl, $vertex, GL::GL_VERTEX_SHADER);
    $fragmentId = compile_shader($gl, $fragment, GL::GL_FRAGMENT_SHADER);

    $gl->attachShader($program, $vertexId);
    $gl->attachShader($program, $fragmentId);
    $gl->linkProgram($program);

    try {
        assert_program($gl, $program, GL::GL_LINK_STATUS);
    } catch (\Throwable $e) {
        throw new \RuntimeException($e->getMessage() . ' in shader [' . $vertex . ', ' . $fragment . ']');
    }

    $gl->deleteShader($vertexId);
    $gl->deleteShader($fragmentId);

    return $program;
}

function enable_logger(GL $gl): void
{
    $gl->enable(GL::GL_DEBUG_OUTPUT);
    $gl->debugMessageCallback(function ($src, $type, $id, $severity, $len, $message, $user) {
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
    }, $gl->new('void*'));
}
