<?php

/**
 * This file is part of OpenGL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\OpenGL\Type;

use FFI\CData;

/**
 * Class CArrayType
 */
abstract class CArrayType extends CType implements CArrayTypeInterface
{
    /**
     * @var int
     */
    protected int $size = 0;

    /**
     * CArrayType constructor.
     *
     * @param mixed ...$elements
     */
    public function __construct(...$elements)
    {
        $this->size = \count($elements);
        $this->cdata = $this->create($this->size);

        $this->fill($elements);
    }

    /**
     * @param int $size
     * @return CData
     */
    protected function create(int $size): CData
    {
        return \FFI::new($this->getName() . "[$size]", false);
    }

    /**
     * @param int $size
     * @return CData
     */
    private function copy(int $size): CData
    {
        $entry = $this->create($size);

        if ($this->cdata !== null) {
            for ($i = 0, $length = \min($this->size, $size); $i < $length; ++$i) {
                $entry[$i] = $this->cdata[$i];
            }
        }

        return $entry;
    }

    /**
     * @param int $size
     * @return $this
     */
    public function alloc(int $size): self
    {
        $previous = $this->cdata;

        $this->cdata = $this->copy($size);
        $this->size = $size;

        if ($previous !== null) {
            \FFI::free($previous);
        }

        return $this;
    }

    /**
     * @param mixed $value
     * @return bool
     */
    protected function assertType(&$value): bool
    {
        if (! $this->assert($value)) {
            $message = 'A PHP type %s is not a part of %s subtype (overflow or type mismatch error)';

            throw new \TypeError(\sprintf($message, \gettype($value), $this->getName()));
        }

        return true;
    }

    /**
     * @param iterable $entries
     * @return $this
     */
    public function fill(iterable $entries): self
    {
        foreach ($entries as $i => $value) {
            $value = $this->toScalar($value);

            \assert($this->assertType($value));

            if ($i >= $this->size) {
                throw $this->overflowException($i);
            }

            $this->cdata[$i] = $value;
        }

        return $this;
    }

    /**
     * @param mixed $value
     * @return int|float
     */
    private function toScalar($value)
    {
        if ($value instanceof CTypeInterface) {
            $value = $value->getCData();
        }

        if ($value instanceof CData) {
            $value = $value->cdata;
        }

        return $value;
    }

    /**
     * @param int $offset
     * @return \OverflowException
     */
    private function overflowException(int $offset): \OverflowException
    {
        $message = \vsprintf('Index %d is outside of the bounds of the %s[%d] array', [
            $offset,
            $this->getName(),
            $this->count()
        ]);

        return new \OverflowException($message);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    abstract protected function assert($value): bool;

    /**
     * @return CData
     */
    public function getCData(): CData
    {
        return $this->cdata;
    }

    /**
     * @return CData
     */
    public function getPointer(): CData
    {
        return \FFI::addr($this->cdata);
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return $this->size;
    }

    /**
     * @param int $offset
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->offsetExists($offset) ? $this->cdata[$offset] : null;
    }

    /**
     * @param int $offset
     * @return bool
     */
    public function offsetExists($offset): bool
    {
        \assert(\is_int($offset));

        return $offset >= 0 && $offset < $this->size;
    }

    /**
     * @param int $offset
     * @param mixed $value
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        $value = $this->toScalar($value);

        \assert($this->assertType($value));

        if (! $this->offsetExists($offset)) {
            throw $this->overflowException($offset);
        }

        $this->cdata[$offset] = $value;
    }

    /**
     * @param int $offset
     * @return void
     */
    public function offsetUnset($offset): void
    {
        \assert(\is_int($offset));

        if (! $this->offsetExists($offset)) {
            throw $this->overflowException($offset);
        }

        $this->cdata[$offset] = 0;
    }

    /**
     * @return array
     */
    public function __debugInfo(): array
    {
        return $this->__serialize();
    }

    /**
     * @return \Traversable
     */
    public function getIterator(): \Traversable
    {
        for ($i = 0; $i < $this->size; ++$i) {
            yield $this->cdata[$i];
        }
    }

    /**
     * @return void
     */
    public function __destruct()
    {
        \FFI::free($this->cdata);
    }

    /**
     * @return void
     */
    public function __clone()
    {
        $this->cdata = $this->copy($this->size);
    }

    /**
     * @param array $data
     * @return void
     */
    public function __unserialize(array $data): void
    {
        $this->size = $data['length'] ?? 0;
        $this->cdata = $this->create($this->size);

        $this->fill($data['values'] ?? []);
    }

    /**
     * @return array
     */
    public function __serialize(): array
    {
        return [
            'values' => [...$this->getIterator()],
            'length' => $this->size,
        ];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        $name = $this->getName() . '[' . $this->size . ']';

        return $name . '{' . \implode(', ', [...$this->getIterator()]) . '}';
    }
}
