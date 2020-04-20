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
final class GLULibrary extends BaseLibrary
{
    /**
     * @var string
     */
    private string $version;

    /**
     * GLULibrary constructor.
     *
     * @param string $version
     */
    public function __construct(string $version)
    {
        $this->version = $version;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'GLU';
    }

    /**
     * @param string $library
     * @return string
     */
    public function getVersion(string $library): string
    {
        return $this->version;
    }

    /**
     * @return string
     */
    public function getHeaders(): string
    {
        return __DIR__ . '/../../resources/glu.h';
    }

    /**
     * @param OperatingSystem $os
     * @param BitDepth $bits
     * @return string|null
     */
    public function getLibrary(OperatingSystem $os, BitDepth $bits): ?string
    {
        if ($os->isWindows()) {
            return 'glu32.dll';
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
