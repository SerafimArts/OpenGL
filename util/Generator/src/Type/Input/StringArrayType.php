<?php

/**
 * This file is part of OpenGL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace CodeGenerator\Type\Input;

use CodeGenerator\Type\InputType;

/**
 * Class StringArrayType
 */
class StringArrayType extends InputType
{
    /**
     * @param string $name
     * @return string
     */
    public function prepare(string $name): string
    {
        return \implode("\n", [
            $this->temp($name) . ' = \FFI::new(\'char*[\' . \\count($' . $name . ') . \']\');',
            'foreach ($' . $name . ' as $i => $v) {',
            '    ' . $this->temp($name) . '[$i] = Util::charPtr($v);',
            '}'
        ]);
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
        return 'array';
    }

    /**
     * @return string
     */
    public function getDocBlock(): string
    {
        return 'array|string[]';
    }
}
