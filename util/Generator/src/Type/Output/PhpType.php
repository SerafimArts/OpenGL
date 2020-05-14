<?php

/**
 * This file is part of Generator package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace CodeGenerator\Type\Output;

use CodeGenerator\Type\OutputType;

/**
 * Class PhpType
 */
class PhpType extends OutputType
{
    /**
     * @var string
     */
    private string $type;

    /**
     * PhpType constructor.
     *
     * @param string $type
     */
    public function __construct(string $type)
    {
        $this->type = $type;
    }

    /**
     * @return string|null
     */
    public function getTypeHint(): ?string
    {
        return $this->type;
    }
}
