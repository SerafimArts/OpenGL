<?php

/**
 * This file is part of Generator package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace CodeGenerator\Type\Input;

use CodeGenerator\Type\InputType;

/**
 * Class PhpType
 */
class NumericType extends InputType
{
    /**
     * @var string
     */
    private string $name;

    /**
     * NativeType constructor.
     *
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getTypeHint(): ?string
    {
        return $this->name;
    }
}
