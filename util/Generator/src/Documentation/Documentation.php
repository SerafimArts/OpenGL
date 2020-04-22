<?php

/**
 * This file is part of OpenGL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace CodeGenerator\Documentation;

/**
 * Class DocsGenerator
 */
abstract class Documentation implements DocumentationInterface
{
    /**
     * @var string
     */
    protected string $directory;

    /**
     * DocsGenerator constructor.
     *
     * @param string $directory
     */
    public function __construct(string $directory)
    {
        $this->directory = $directory;
    }

    /**
     * @param string $name
     * @param array $values
     * @param \Closure $apply
     * @return \Traversable
     */
    public function intersect(string $name, array $values, \Closure $apply): \Traversable
    {
        yield $name;

        do {
            $new = $name;

            foreach ($values as $from => $to) {
                yield $new = $apply($new, $to, $from);
            }

            if ($name === $new) {
                break;
            }

            $name = $new;
        } while (true);
    }
}
