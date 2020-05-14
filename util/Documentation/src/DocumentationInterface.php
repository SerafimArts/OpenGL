<?php

/**
 * This file is part of Generator package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Documentation;

/**
 * Interface DocumentationInterface
 */
interface DocumentationInterface
{
    /**
     * @param array $meta
     * @return string
     */
    public function forFile(array $meta): string;

    /**
     * @param array $meta
     * @return string
     */
    public function forClass(array $meta): string;

    /**
     * @param array $meta
     * @param string $name
     * @param mixed $value
     * @return string
     */
    public function forConstant(array $meta, string $name, $value): string;

    /**
     * @param string $name
     * @param array $info
     * @param array $parent
     * @return string
     */
    public function forMethod(string $name, array $info, array $parent): string;
}
