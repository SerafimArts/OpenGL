<?php

/**
 * This file is part of OpenGL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

use CodeGenerator\ClassGenerator;
use CodeGenerator\Documentation\KhronosDocumentationGenerator;
use CodeGenerator\Json;

require __DIR__ . '/../vendor/autoload.php';

$types = Json::read(__DIR__ . '/../../../resources/types.json');
$opengl = Json::read(__DIR__ . '/../../../resources/opengl.json');

$docs = KhronosDocumentationGenerator::download(__DIR__ . '/../docs');

foreach ($opengl['classes'] as $key => $value) {
    echo 'Generating ' . $key . "\n";

    $generator = new ClassGenerator($docs, $value, $types);
    $generator->generate(__DIR__ . '/../../../src/' . $key . '.php');
}
