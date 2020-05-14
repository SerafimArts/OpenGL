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
 * Class VirtualBody
 */
class VirtualBody extends MethodBody
{
    /**
     * @var string
     */
    private const PROC_TEMPLATE = '$__proc = $this->getProcAs(\'%s\', \'%s\');';

    /**
     * @var string
     */
    private const PROC_CALL = '$__proc(%s)';

    /**
     * @param string $name
     * @return string
     */
    public function generate(string $name): string
    {
        $call = \sprintf(self::PROC_CALL, \implode(', ', $this->getPassedArguments()));

        return \implode("\n", [
            \sprintf(self::PROC_TEMPLATE, $name, $this->proc),
            $this->getReturnPrefix() . $this->output->cast($call) . ';'
        ]);
    }
}
