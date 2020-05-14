<?php

/**
 * This file is part of Generator package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace CodeGenerator\Body;

/**
 * Class NativeBody
 */
class NativeBody extends MethodBody
{
    /**
     * @var string
     */
    private const TEMPLATE = '$this->info->ffi->%s(%s)';

    /**
     * @param string $name
     * @return string
     */
    public function generate(string $name): string
    {
        $call = \vsprintf(self::TEMPLATE, [
            $name,
            \implode(', ', $this->getPassedArguments())
        ]);

        return $this->getReturnPrefix() . $this->output->cast($call) . ';';
    }
}
