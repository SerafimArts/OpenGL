<?php

/**
 * This file is part of Generator package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace CodeGenerator\Body;

use CodeGenerator\Type\InputTypeInterface;
use CodeGenerator\Type\OutputTypeInterface;

/**
 * Class NativeBody
 */
abstract class MethodBody implements MethodBodyInterface
{
    /**
     * @var iterable|InputTypeInterface[]
     */
    protected iterable $input;

    /**
     * @var OutputTypeInterface
     */
    protected OutputTypeInterface $output;

    /**
     * @var string
     */
    protected string $proc;

    /**
     * MethodBody constructor.
     *
     * @param iterable $input
     * @param OutputTypeInterface $output
     */
    public function __construct(iterable $input, OutputTypeInterface $output, string $proc)
    {
        $this->input = $input;
        $this->output = $output;
        $this->proc = $proc;
    }

    /**
     * @return array|string[]
     */
    protected function getPassedArguments(): array
    {
        $result = [];

        foreach ($this->input as $name => $arg) {
            $result[] = $arg->getPassedArgument($name);
        }

        return $result;
    }

    /**
     * @return string
     */
    protected function getReturnPrefix(): string
    {
        return $this->output->shouldReturn() ? 'return ' : '';
    }
}
