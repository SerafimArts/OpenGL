<?php

/**
 * This file is part of Generator package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace CodeGenerator\Type;

use CodeGenerator\Util;

/**
 * Class Registry
 */
class Registry
{
    /**
     * @var string
     */
    private const ERROR_NOT_FOUND = 'C type <%s> (%s) not registered';

    /**
     * @var array|InputTypeInterface[]
     */
    private array $input = [];

    /**
     * @var array|OutputTypeInterface[]
     */
    private array $output = [];

    /**
     * @var array|string[]
     */
    private array $aliases = [];

    /**
     * @param InputTypeInterface $type
     * @param string|null $name
     * @return $this
     */
    public function addInput(string $name, InputTypeInterface $type): self
    {
        $this->input[$this->format($name)] = $type;

        return $this;
    }

    /**
     * @param iterable|InputTypeInterface[] $types
     * @return $this
     */
    public function addInputTypes(iterable $types): self
    {
        foreach ($types as $name => $type) {
            $this->addInput($name, $type);
        }

        return $this;
    }

    /**
     * @param string $name
     * @param OutputTypeInterface $type
     * @return $this
     */
    public function addOutput(string $name, OutputTypeInterface $type): self
    {
        $this->output[$this->format($name)] = $type;

        return $this;
    }

    /**
     * @param iterable|OutputTypeInterface[] $types
     * @return $this
     */
    public function addOutputTypes(iterable $types): self
    {
        foreach ($types as $name => $type) {
            $this->addOutput($name, $type);
        }

        return $this;
    }

    /**
     * @param string $type
     * @param string $alias
     * @return $this
     */
    public function addAlias(string $alias, string $type): self
    {
        $this->aliases[$this->format($alias)] = $this->format($type);

        return $this;
    }

    /**
     * @param iterable $types
     * @return $this
     */
    public function addAliases(iterable $types): self
    {
        foreach ($types as $alias => $type) {
            $this->addAlias($alias, $type);
        }

        return $this;
    }

    /**
     * @param string $name
     * @return array
     */
    private function split(string $name): array
    {
        return Util::splitType($name);
    }

    /**
     * @param string $name
     * @return string
     */
    private function format(string $name): string
    {
        return Util::formatType($name);
    }

    /**
     * @param string $type
     * @return string
     */
    private function lookup(string $type): string
    {
        $chunks = $this->split($type);

        foreach ($chunks as $i => $chunk) {
            if (isset($this->aliases[$chunk])) {
                $chunks[$i] = $this->aliases[$chunk];
            }
        }

        return $this->format(\implode(' ', $chunks));
    }

    /**
     * @param string $name
     * @return InputTypeInterface|TypeInterface
     */
    public function input(string $name): InputTypeInterface
    {
        return $this->fetch($name, $this->input);
    }

    /**
     * @param string $name
     * @return OutputTypeInterface|TypeInterface
     */
    public function output(string $name): OutputTypeInterface
    {
        return $this->fetch($name, $this->output);
    }

    /**
     * @param string $type
     * @param array $types
     * @return TypeInterface
     */
    private function fetch(string $type, array $types): TypeInterface
    {
        $type = $before = $this->format($type);

        if (isset($types[$before])) {
            return $types[$before];
        }

        while ($before !== ($after = $this->lookup($before))) {
            if (isset($types[$after])) {
                return $types[$after];
            }

            $before = $after;
        }

        $message = \sprintf(self::ERROR_NOT_FOUND, $type, $after);

        throw new \InvalidArgumentException($message);
    }
}
