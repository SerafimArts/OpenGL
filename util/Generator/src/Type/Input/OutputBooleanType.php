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
 * Class OutputBooleanType
 */
class OutputBooleanType extends InputType
{
    /**
     * @var string
     */
    private string $native;

    /**
     * NativeType constructor.
     *
     * @param string $native
     */
    public function __construct(string $native)
    {
        $this->native = $native;
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
    public function prepare(string $name): string
    {
        return \implode("\n", [
            $this->temp($name) . ' = $this->info->ffi->new(\'' . $this->native . '\', false);',
        ]);
    }

    /**
     * @param string $name
     * @return string
     */
    public function finally(string $name): string
    {
        return \implode("\n", [
            '$' . $name . ' = ' . $this->temp($name) . '->cdata !== 0;',
            '\\FFI::free(' . $this->temp($name) . ');'
        ]);
    }

    /**
     * @param string $name
     * @return string
     */
    public function getPassedArgument(string $name): string
    {
        return '\\FFI::addr(' . $this->temp($name) . ')';
    }

    /**
     * @return string|null
     */
    public function getTypeHint(): ?string
    {
        return 'bool';
    }
}
