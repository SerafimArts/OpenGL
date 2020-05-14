<?php

/**
 * This file is part of Generator package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace CodeGenerator\Type;

/**
 * Interface ReturnTypeInterface
 */
interface OutputTypeInterface extends TypeInterface
{
    /**
     * @param string $expr
     * @return string
     */
    public function cast(string $expr): string;

    /**
     * @return bool
     */
    public function shouldReturn(): bool;
}
