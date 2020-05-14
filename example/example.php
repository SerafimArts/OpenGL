<?php

declare(strict_types=1);

use Serafim\OpenGL\Example\Util\Logger;
use Serafim\OpenGL\Example\Util\Program;
use Serafim\OpenGL\Example\Util\Shader;
use Serafim\OpenGL\Example\Util\Window;
use Serafim\OpenGL\GL43 as GL;
use Serafim\OpenGL\Type\Float32Array;

require __DIR__ . '/../vendor/autoload.php';

$window = new Window('Example', 1024, 768);
$window->opengl(4, 3);

$gl = new GL();

// Enable logger
(new Logger($gl))->enable();

$gl->proc('wglSwapIntervalEXT', 'int (*)(int interval)')(0);

echo 'Renderer: ' . $gl->getString(GL::GL_RENDERER) . "\n";
echo 'Version: ' . $gl->getString(GL::GL_VERSION) . "\n";

$gl->enable(GL::GL_DEPTH_TEST);
$gl->enable(GL::GL_LESS);

$program = (new Program($gl))
    ->attach(Shader::fromFile($gl, GL::GL_VERTEX_SHADER, __DIR__ . '/shader.vert'))
    ->attach(Shader::fromFile($gl, GL::GL_FRAGMENT_SHADER, __DIR__ . '/shader.frag'))
    ->compile()
;

$vertices = new Float32Array(
    0.0, 0.5, 0.0,
    0.5, -0.5, 0.0,
    -0.5, -0.5, 0.0,
);


$vbo = 0;
$gl->genBuffers(1, $vbo);
$gl->bindBuffer(GL::GL_ARRAY_BUFFER, $vbo);
$gl->bufferData(GL::GL_ARRAY_BUFFER, $vertices->sizeOf(), $vertices->cdata, GL::GL_STATIC_DRAW);


$vao = 0;
$gl->genVertexArrays(1, $vao);
$gl->bindVertexArray($vao);
$gl->enableVertexAttribArray(0);
$gl->bindBuffer(GL::GL_ARRAY_BUFFER, $vbo);
$gl->vertexAttribPointer(0, 3, GL::GL_FLOAT, GL::GL_FALSE, 0, null);


$window->loop(static function () use ($gl, $program, $vao) {
    $gl->clear(GL::GL_COLOR_BUFFER_BIT | GL::GL_DEPTH_BUFFER_BIT);
    $gl->useProgram($program);
    $gl->bindVertexArray($vao);
    $gl->drawArrays(GL::GL_TRIANGLES, 0, 3);
});
