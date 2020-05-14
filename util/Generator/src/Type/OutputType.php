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
 * Class OutputType
 */
abstract class OutputType extends Type implements OutputTypeInterface
{
    /**
     * @param string $expr
     * @return string
     */
    public function cast(string $expr): string
    {
        return $expr;
    }

    /**
     * @return bool
     */
    public function shouldReturn(): bool
    {
        return true;
    }
}
