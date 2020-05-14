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
 * Class InputType
 */
abstract class InputType extends Type implements InputTypeInterface
{
    /**
     * @param string $name
     * @return string
     */
    protected function temp(string $name): string
    {
        return '$' . $name . 'CType';
    }

    /**
     * @param string $name
     * @return string
     */
    public function prepare(string $name): string
    {
        return '';
    }

    /**
     * @param string $name
     * @return string
     */
    public function finally(string $name): string
    {
        return '';
    }

    /**
     * @return bool
     */
    public function isPassedByRef(): bool
    {
        return false;
    }

    /**
     * @param string $name
     * @return string
     */
    public function getPassedArgument(string $name): string
    {
        return '$' . $name;
    }
}
