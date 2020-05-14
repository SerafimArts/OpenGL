<?php

/**
 * This file is part of OpenGL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

use CodeGenerator\Type\Input;

return [
    'char'                   => new Input\NumericType('int'), // int8_t || uint8_t
    'unsigned char'          => new Input\NumericType('int'), // uint8_t
    'signed char'            => new Input\NumericType('int'), // int8_t
    'unsigned short int'     => new Input\NumericType('int'), // uint16_t
    'signed short int'       => new Input\NumericType('int'), // int16_t
    'unsigned int'           => new Input\NumericType('int'), // uint32_t
    'int'                    => new Input\NumericType('int'), // int32_t
    'unsigned long long int' => new Input\NumericType('int'), // uint64_t
    'signed long long int'   => new Input\NumericType('int'), // int64_t
    'float'                  => new Input\NumericType('float'), // float
    'double'                 => new Input\NumericType('float'), // double
    'GLDEBUGPROC'            => new Input\CallbackType(),
    // void (*GLDEBUGPROC)(GLenum source, GLenum type, GLuint id,
    //      GLenum severity, GLsizei length, const GLchar *message, const void *userParam)

    'GLchar *'    => new Input\OutputStringType('GLchar'), // int8_t || uint8_t
    'GLubyte *'   => new Input\OutputNumericType('int', 'GLubyte'), // int8_t
    'GLushort *'  => new Input\OutputNumericType('int', 'GLushort'), // uint16_t
    'GLuint *'    => new Input\OutputNumericType('int', 'GLuint'), // uint32_t
    'GLenum *'    => new Input\OutputNumericType('int', 'GLenum'), // uint32_t
    'GLint *'     => new Input\OutputNumericType('int', 'GLint'), // int32_t
    'GLsizei *'   => new Input\OutputNumericType('int', 'GLsizei'), // int32_t
    'GLuint64 *'  => new Input\OutputNumericType('int', 'GLuint64'), // uint64_t
    'GLint64 *'   => new Input\OutputNumericType('int', 'GLint64'), // int64_t
    'GLfloat *'   => new Input\OutputNumericType('float', 'GLfloat'), // float
    'GLdouble *'  => new Input\OutputNumericType('float', 'GLdouble'), // double
    'GLboolean *' => new Input\OutputBooleanType('GLboolean'), // unsigned char

    // TODO
    'GLsync'      => new Input\OutputPointer(),
    'void *'      => new Input\OutputPointer(),
    'void **'     => new Input\OutputPointer(),

    'const char *const *'          => new Input\StringArrayType(),

    'const signed long long int *' => new Input\InputPointer(),
    'const char *'                 => new Input\InputPointer(),
    'const unsigned char *'        => new Input\InputPointer(),
    'const void *'                 => new Input\InputPointer(),
    'const void *const *'          => new Input\InputPointer(),
    'const double *'               => new Input\InputPointer(),
    'const float *'                => new Input\InputPointer(),
    'const signed char *'          => new Input\InputPointer(),
    'const int *'                  => new Input\InputPointer(),
    'const signed short int *'     => new Input\InputPointer(),
    'const unsigned short int *'   => new Input\InputPointer(),
    'const unsigned int *'         => new Input\InputPointer(),
];
