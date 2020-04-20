<?php

/**
 * This file is part of OpenGL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

use Serafim\OpenGL\Support\ClassGenerator;
use Serafim\OpenGL\Support\DocsGLGenerator;

require __DIR__ . '/../vendor/autoload.php';

if (! \is_dir(__DIR__ . '/docs.gl')) {
    exec('git clone git@github.com:BSVino/docs.gl.git');
}

$json = \file_get_contents(__DIR__ . '/../resources/opengl.json');
$api = \json_decode($json, true, 512, \JSON_BIGINT_AS_STRING);

$docs = new DocsGLGenerator(__DIR__ . '/docs.gl');

$types = $api['types'];

foreach ($api['versions'] as $key => $value) {
    echo 'Generating ' . $key . "\n";

    $generator = new ClassGenerator($docs, $value, $types);
    $generator->generate(__DIR__ . '/../src/' . $key . '.php');
}
