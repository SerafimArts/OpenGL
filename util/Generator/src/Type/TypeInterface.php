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
 * Interface TypeInterface
 */
interface TypeInterface
{
    /**
     * @return bool
     */
    public function isNullable(): bool;

    /**
     * @return string|null
     */
    public function getTypeHint(): ?string;

    /**
     * @return string
     */
    public function getDocBlock(): string;
}
