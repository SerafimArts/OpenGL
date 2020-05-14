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
use FFI\CData;

/**
 * Class InputPointer
 */
class InputPointer extends InputType
{
    /**
     * @return bool
     */
    public function isNullable(): bool
    {
        return true;
    }

    /**
     * @return string|null
     */
    public function getTypeHint(): ?string
    {
        return CData::class;
    }
}
