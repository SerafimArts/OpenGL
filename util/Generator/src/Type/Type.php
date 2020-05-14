<?php

/**
 * This file is part of Generator package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace CodeGenerator\Type;

/**
 * Class Type
 */
abstract class Type implements TypeInterface
{
    /**
     * @return string
     */
    public function getDocBlock(): string
    {
        $hints = \array_filter([$this->getTypeHint(), $this->isNullable() ? 'null' : null]);
        $hints = \array_map(fn (string $hint) => $this->fqn($hint), $hints);

        return \implode('|', $hints ?: 'void');
    }

    /**
     * @param string $hint
     * @return string
     */
    private function fqn(string $hint): string
    {
        $fqn = '\\' . $hint;

        return \class_exists($fqn) ? $fqn : $hint;
    }

    /**
     * @return bool
     */
    public function isNullable(): bool
    {
        return false;
    }
}
