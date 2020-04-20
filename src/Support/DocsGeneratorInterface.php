<?php

/**
 * This file is part of OpenGL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\OpenGL\Support;

/**
 * Interface DocsGeneratorInterface
 */
interface DocsGeneratorInterface
{
    /**
     * @param string $name
     * @return string|null
     */
    public function forFunction(string $name): ?string;
}