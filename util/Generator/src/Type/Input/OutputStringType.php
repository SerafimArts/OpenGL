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
 * Class OutputStringType
 */
class OutputStringType extends InputType
{
    /**
     * @var string
     */
    private string $name;

    /**
     * NativeType constructor.
     *
     * @param string $native
     */
    public function __construct(string $native)
    {
        $this->name = $native;
    }

    /**
     * @param string $name
     * @return string
     */
    public function prepare(string $name): string
    {
        return \implode("\n", [
            $this->temp($name) . ' = \FFI::addr($this->info->ffi->new(\'' . $this->name . '[\' . $bufSize . \']\', false)[0]);',
        ]);
    }

    /**
     * @param string $name
     * @return string
     */
    public function finally(string $name): string
    {
        return \implode("\n", [
            '$' . $name . ' = \\FFI::string(' . $this->temp($name) . ');',
            '\\FFI::free(' . $this->temp($name) . ');'
        ]);
    }

    /**
     * @return bool
     */
    public function isNullable(): bool
    {
        return true;
    }

    /**
     * @return bool
     */
    public function isPassedByRef(): bool
    {
        return true;
    }

    /**
     * @param string $name
     * @return string
     */
    public function getPassedArgument(string $name): string
    {
        return $this->temp($name);
    }

    /**
     * @return string|null
     */
    public function getTypeHint(): ?string
    {
        return 'string';
    }
}
