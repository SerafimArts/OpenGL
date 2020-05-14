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
 * Interface ArgumentInterface
 */
interface InputTypeInterface extends TypeInterface
{
    /**
     * @param string $name
     * @return string
     */
    public function prepare(string $name): string;

    /**
     * @param string $name
     * @return string
     */
    public function finally(string $name): string;

    /**
     * @return bool
     */
    public function isPassedByRef(): bool;

    /**
     * @param string $name
     * @return string
     */
    public function getPassedArgument(string $name): string;
}
