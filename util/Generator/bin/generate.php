<?php

/**
 * This file is part of OpenGL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

use CodeGenerator\CodeGenerator;
use CodeGenerator\Type\Registry;
use Documentation\KhronosDocumentationGenerator;

require __DIR__ . '/../vendor/autoload.php';

//
// Config
//
const __ROOT_DIR__ = __DIR__ . '/../../..';
const __SRC_DIR__ = __ROOT_DIR__ . '/src';
const __RESOURCES_DIR__ = __ROOT_DIR__ . '/resources';

//
// Types
//
$types = new Registry();
$types->addInputTypes(require __RESOURCES_DIR__ . '/types.in.php');
$types->addOutputTypes(require __RESOURCES_DIR__ . '/types.out.php');
$types->addAliases(require __RESOURCES_DIR__ . '/types.aliases.php');

//
// Documentation
//
$docs = KhronosDocumentationGenerator::download(__DIR__ . '/../docs');

//
// Generator
//
$generator = new CodeGenerator($types, $docs);

$opengl = require __RESOURCES_DIR__ . '/opengl.php';

foreach ($opengl as $id => $meta) {
    \file_put_contents(__SRC_DIR__ . '/' . $id . '.php', $generator->generate($meta));
}
