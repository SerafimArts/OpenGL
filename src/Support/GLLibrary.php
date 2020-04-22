<?php

/**
 * This file is part of OpenGL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\OpenGL\Support;

use Serafim\FFILoader\BitDepth;
use Serafim\FFILoader\Library as BaseLibrary;
use Serafim\FFILoader\OperatingSystem;

/**
 * Class Library
 */
final class GLLibrary extends BaseLibrary
{
    /**
     * @var int
     */
    private const GL_MAJOR_VERSION = 0x821B;

    /**
     * @var int
     */
    private const GL_MINOR_VERSION = 0x821C;

    /**
     * @var string
     */
    private const GET_VERSION = <<<'c'
        extern void glGetIntegerv(unsigned int pname, int *params);
        extern const unsigned char *glGetString(unsigned int name);
    c;

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'GL';
    }

    /**
     * @param string $library
     * @return string
     */
    public function getVersion(string $library): string
    {
        $gl = \FFI::cdef(self::GET_VERSION, $library);

        /** @noinspection StaticInvocationViaThisInspection */
        [$major, $minor] = [
            $gl->new('int'),
            $gl->new('int'),
        ];

        $gl->glGetIntegerv(self::GL_MAJOR_VERSION, \FFI::addr($major));
        $gl->glGetIntegerv(self::GL_MINOR_VERSION, \FFI::addr($minor));

        if ($major->cdata === 0 && $minor->cdata === 0) {
            throw new \RuntimeException('Unable to access OpenGL functions because window context is required');
        }

        return \sprintf('%d.%d', $major->cdata, $minor->cdata);
    }

    /**
     * @return string
     */
    public function getHeaders(): string
    {
        return __DIR__ . '/../../resources/headers/gl.h';
    }

    /**
     * @param OperatingSystem $os
     * @param BitDepth $bits
     * @return string|null
     */
    public function getLibrary(OperatingSystem $os, BitDepth $bits): ?string
    {
        if ($os->isWindows()) {
            return 'opengl32.dll';
        }

        return null;
    }

    /**
     * @return string
     */
    public function getOutputDirectory(): string
    {
        return __DIR__ . '/../../out';
    }
}
