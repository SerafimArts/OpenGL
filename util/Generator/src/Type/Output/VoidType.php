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
use CodeGenerator\Type\OutputTypeInterface;

/**
 * Class VoidType
 */
class VoidType extends OutputType
{
    /**
     * @return bool
     */
    public function shouldReturn(): bool
    {
        return false;
    }

    /**
     * @return string|null
     */
    public function getTypeHint(): ?string
    {
        return 'void';
    }

    /**
     * @return string
     */
    public function getDocBlock(): string
    {
        return $this->getTypeHint();
    }
}
