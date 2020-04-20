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
$window = $sdl->SDL_CreateWindow('Window', $mid, $mid, 3440, 1440, SDL::SDL_WINDOW_OPENGL | SDL::SDL_WINDOW_SHOWN | SDL::SDL_WINDOW_FULLSCREEN);

$sdl->SDL_GL_SetAttribute(SDL::SDL_GL_CONTEXT_MAJOR_VERSION, 3);
$sdl->SDL_GL_SetAttribute(SDL::SDL_GL_CONTEXT_MINOR_VERSION, 3);
$sdl->SDL_GL_SetAttribute(SDL::SDL_GL_CONTEXT_PROFILE_MASK, SDL::SDL_GL_CONTEXT_PROFILE_CORE);

$context = $sdl->SDL_GL_CreateContext($window);

GL::init(new GLLibrary());
GL::getProc('wglSwapIntervalEXT', 'int (*)(int interval)')(0);

echo 'Renderer: ' . FFI::string(GL::cast('char*', GL::glGetString(GL::GL_RENDERER))) . "\n";
echo 'Version: ' . FFI::string(GL::cast('char*', GL::glGetString(GL::GL_VERSION))) . "\n";

GL::glEnable(GL::GL_DEPTH_TEST);
GL::glEnable(GL::GL_LESS);

//enable_logger();

$program = load_shaders(__DIR__ . '/shader.vert', __DIR__ . '/shader.frag');

$vertices = GL::arrayOf('GLfloat', [
     0.0,  0.5,  0.0,
     0.5, -0.5,  0.0,
    -0.5, -0.5,  0.0,
]);

$vbo = GL::new('GLuint');
GL::glGenBuffers(1, \FFI::addr($vbo));
GL::glBindBuffer(GL::GL_ARRAY_BUFFER, $vbo->cdata);
GL::glBufferData(GL::GL_ARRAY_BUFFER, FFI::sizeof($vertices), $vertices, GL::GL_STATIC_DRAW);

$vao = GL::new('GLuint');
GL::glGenVertexArrays(1, \FFI::addr($vao));
GL::glBindVertexArray($vao->cdata);
GL::glEnableVertexAttribArray(0);
GL::glBindBuffer(GL::GL_ARRAY_BUFFER, $vbo->cdata);
GL::glVertexAttribPointer(0, 3, GL::GL_FLOAT, GL::GL_FALSE, 0, null);

$event = $sdl->new(Event::class);
while ($running ??= true) {
    $sdl->SDL_PollEvent(SDL::addr($event));
    if ($event->type === Type::SDL_QUIT) {
        $running = false;
    }

    GL::glClear(GL::GL_COLOR_BUFFER_BIT | GL::GL_DEPTH_BUFFER_BIT);
    GL::glUseProgram($program);
    GL::glBindVertexArray($vao->cdata);
    GL::glDrawArrays(GL::GL_TRIANGLES, 0, 3);

    $sdl->SDL_GL_SwapWindow($window);
}
