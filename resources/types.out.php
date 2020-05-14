<?php

/**
 * This file is part of OpenGL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

use CodeGenerator\Type\Output;

return [
    'void'                  => new Output\VoidType(),
    'GLboolean'             => new Output\BooleanType(),
    'const unsigned char *' => new Output\StringType(),
    'int'                   => new Output\PhpType('int'),
    'unsigned int'          => new Output\PhpType('int'),
    'void *'                => new Output\AnyType(),
    'GLsync'                => new Output\AnyType(), // struct

    // custom
    'string'                => new Output\PhpType('string'),
];
