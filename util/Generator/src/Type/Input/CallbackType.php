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
 * Class CallbackType
 */
class CallbackType extends InputType
{
    /**
     * @return string|null
     */
    public function getTypeHint(): ?string
    {
        return 'callable';
    }

    /**
     * @return string
     */
    public function getDocBlock(): string
    {
        return 'callable|\\Closure';
    }
}
