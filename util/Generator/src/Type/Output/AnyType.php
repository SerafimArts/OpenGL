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
 * Class AnyType
 */
class AnyType extends OutputType
{
    /**
     * @return string|null
     */
    public function getTypeHint(): ?string
    {
        return \FFI\CData::class;
    }
}
