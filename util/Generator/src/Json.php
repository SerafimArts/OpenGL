<?php

/**
 * This file is part of OpenGL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace CodeGenerator;

use Illuminate\Support\Collection;

/**
 * Class Json
 */
class Json
{
    /**
     * @param string $file
     * @return array
     * @throws \JsonException
     */
    public static function read(string $file): array
    {
        if (! \is_file($file) || ! \is_readable($file)) {
            throw new \LogicException('File ' . $file . ' not found or not readable');
        }

        $source = \file_get_contents($file);

        return \json_decode($source, true, 512, JSON_BIGINT_AS_STRING | JSON_THROW_ON_ERROR);
    }
}
