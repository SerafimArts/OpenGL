<?php
declare(strict_types=1);

use Serafim\OpenGL\GL43 as GL;
use Serafim\OpenGL\Support\GLLibrary;
use Serafim\SDL\Event;
use Serafim\SDL\Kernel\Event\Type;
use Serafim\SDL\SDL;

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/utils.php';

$sdl = SDL::getInstance();
$sdl->SDL_Init(SDL::SDL_INIT_VIDEO);

$mid = SDL::SDL_WINDOWPOS_CENTERED;
$window = $sdl->SDL_CreateWindow('Window', $mid, $mid, 1920, 1080, SDL::SDL_WINDOW_OPENGL | SDL::SDL_WINDOW_SHOWN);

$sdl->SDL_GL_SetAttribute(SDL::SDL_GL_CONTEXT_MAJOR_VERSION, 3);
$sdl->SDL_GL_SetAttribute(SDL::SDL_GL_CONTEXT_MINOR_VERSION, 3);
$sdl->SDL_GL_SetAttribute(SDL::SDL_GL_CONTEXT_PROFILE_MASK, SDL::SDL_GL_CONTEXT_PROFILE_CORE);

$context = $sdl->SDL_GL_CreateContext($window);

$gl = new GL();

$gl->getProcAddress('wglSwapIntervalEXT', 'int (*)(int interval)')(0);

echo 'Renderer: ' . FFI::string($gl->cast('char*', $gl->getString(GL::GL_RENDERER))) . "\n";
echo 'Version: ' . FFI::string($gl->cast('char*', $gl->getString(GL::GL_VERSION))) . "\n";

$gl->enable(GL::GL_DEPTH_TEST);
$gl->enable(GL::GL_LESS);

enable_logger($gl);

$program = load_shaders($gl, __DIR__ . '/shader.vert', __DIR__ . '/shader.frag');

$vertices = new \Serafim\OpenGL\Type\Float32Array(
     0.0,  0.5,  0.0,
     0.5, -0.5,  0.0,
    -0.5, -0.5,  0.0,
);

$vbo = $gl->new('GLuint');
$gl->genBuffers(1, \FFI::addr($vbo));
$gl->bindBuffer(GL::GL_ARRAY_BUFFER, $vbo);
$gl->bufferData(GL::GL_ARRAY_BUFFER, $vertices->sizeOf(), $vertices->cdata, GL::GL_STATIC_DRAW);

$vao = $gl->new('GLuint');
$gl->genVertexArrays(1, \FFI::addr($vao));
$gl->bindVertexArray($vao);
$gl->enableVertexAttribArray(0);
$gl->bindBuffer(GL::GL_ARRAY_BUFFER, $vbo);
$gl->vertexAttribPointer(0, 3, GL::GL_FLOAT, GL::GL_FALSE, 0, null);

$event = $sdl->new(Event::class);
while ($running ??= true) {
    $sdl->SDL_PollEvent(SDL::addr($event));
    if ($event->type === Type::SDL_QUIT) {
        $running = false;
    }

    $gl->clear(GL::GL_COLOR_BUFFER_BIT | GL::GL_DEPTH_BUFFER_BIT);
    $gl->useProgram($program);
    $gl->bindVertexArray($vao);
    $gl->drawArrays(GL::GL_TRIANGLES, 0, 3);

    $sdl->SDL_GL_SwapWindow($window);
}
