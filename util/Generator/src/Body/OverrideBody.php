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
 * Class OverrideBody
 */
class OverrideBody implements MethodBodyInterface
{
    /**
     * @var string
     */
    private string $body;

    /**
     * OverrideBody constructor.
     *
     * @param string|array $body
     */
    public function __construct($body)
    {
        $this->body = \is_array($body) ? \implode("\n", $body) : $body;
    }

    /**
     * @param string $name
     * @return string
     */
    public function generate(string $name): string
    {
        return $this->body;
    }
}
