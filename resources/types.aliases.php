<?php

/**
 * This file is part of OpenGL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

return [
    //
    'uint8_t'                     => 'unsigned char',
    'int8_t'                      => 'signed char',
    'uint16_t'                    => 'unsigned short',
    'int16_t'                     => 'signed short int',
    'uint32_t'                    => 'unsigned int',
    'int32_t'                     => 'int',
    'uint64_t'                    => 'unsigned long long int',
    'int64_t'                     => 'signed long long int',

    // khrplatform.h
    'khronos_int32_t'             => 'int32_t',
    'khronos_uint32_t'            => 'uint32_t',
    'khronos_int64_t'             => 'int64_t',
    'khronos_uint64_t'            => 'uint64_t',
    'khronos_int8_t'              => 'signed char',
    'khronos_uint8_t'             => 'unsigned char',
    'khronos_int16_t'             => 'signed short int',
    'khronos_uint16_t'            => 'unsigned short int',
    'khronos_intptr_t'            => 'signed long long int',
    'khronos_uintptr_t'           => 'unsigned long long int',
    'khronos_ssize_t'             => 'signed long long int',
    'khronos_usize_t'             => 'unsigned long long int',
    'khronos_float_t'             => 'float',
    'khronos_utime_nanoseconds_t' => 'khronos_uint64_t',
    'khronos_stime_nanoseconds_t' => 'khronos_int64_t',
    'khronos_boolean_enum_t'      => 'short',

    // glcorearb.h
    'GLvoid'                      => 'void',
    'GLenum'                      => 'unsigned int',
    'GLfloat'                     => 'khronos_float_t',
    'GLint'                       => 'int',
    'GLsizei'                     => 'int',
    'GLbitfield'                  => 'unsigned int',
    'GLdouble'                    => 'double',
    'GLuint'                      => 'unsigned int',
    'GLboolean'                   => 'unsigned char',
    'GLubyte'                     => 'khronos_uint8_t',
    'GLclampf'                    => 'khronos_float_t',
    'GLclampd'                    => 'double',
    'GLsizeiptr'                  => 'khronos_ssize_t',
    'GLintptr'                    => 'khronos_intptr_t',
    'GLchar'                      => 'char',
    'GLshort'                     => 'khronos_int16_t',
    'GLbyte'                      => 'khronos_int8_t',
    'GLushort'                    => 'khronos_uint16_t',
    'GLhalf'                      => 'khronos_uint16_t',
    'GLsync'                      => 'struct __GLsync *',
    'GLuint64'                    => 'khronos_uint64_t',
    'GLint64'                     => 'khronos_int64_t',

    // glext.h
    'GLhalfNV'                    => 'unsigned short',
    'GLhalfARB'                   => 'khronos_uint16_t',
    'GLhandleARB'                 => 'unsigned int',
    'GLcharARB'                   => 'char',
    'GLsizeiptrARB'               => 'khronos_ssize_t',
    'GLintptrARB'                 => 'khronos_intptr_t',
    'GLfixed'                     => 'khronos_int32_t',
    'GLvdpauSurfaceNV'            => 'GLintptr',
    'GLuint64EXT'                 => 'khronos_uint64_t',
    'GLint64EXT'                  => 'khronos_int64_t',

    // glxext.h
    'GLXContextID'                => 'XID',
    'GLXWindow'                   => 'XID',
    'GLXPbuffer'                  => 'XID',
    'GLXVideoCaptureDeviceNV'     => 'XID',
    'GLXVideoDeviceNV'            => 'unsigned int',
    'GLXStereoNotifyEventEXT'     => 'struct *',
];
