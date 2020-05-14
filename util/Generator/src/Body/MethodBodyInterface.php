<?php

/**
 * This file is part of Generator package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace CodeGenerator\Body;

/**
 * Interface MethodBodyInterface
 */
interface MethodBodyInterface
{
    /**
     * @param string $name
     * @return string
     */
    public function generate(string $name): string;
}
