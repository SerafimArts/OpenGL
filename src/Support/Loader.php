<?php

/**
 * This file is part of OpenGL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\OpenGL\Support;

use Serafim\FFILoader\LibraryInformation;
use Serafim\FFILoader\LibraryInterface;
use Serafim\FFILoader\Loader as FFILoader;
use Serafim\FFILoader\Preprocessor;
use Serafim\FFILoader\PreprocessorInterface;

/**
 * Class Loader
 */
class Loader
{
    /**
     * @param LibraryInterface $library
     * @return LibraryInformation
     */
    public static function load(LibraryInterface $library): LibraryInformation
    {
        $loader = new FFILoader();

        self::configure($loader->preprocessor());

        return $loader->load($library);
    }

    /**
     * @param PreprocessorInterface $pre
     * @return void
     */
    private static function configure(PreprocessorInterface $pre): void
    {
        if ($pre instanceof Preprocessor) {
            $pre->keepComments = true;
            $pre->tolerant = false;
            $pre->minify = true;
        }
    }
}
