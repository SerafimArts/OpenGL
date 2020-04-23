<?php

/**
 * This file is part of OpenGL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace CodeGenerator\Dependency;

use CodeGenerator\Generator;
use CodeGenerator\Info;

/**
 * Class ArgumentInfo
 */
class ArgumentInfo extends Generator
{
    /**
     * @var string
     */
    private const ASSERTION_FORMAT = 'Argument %s must be a C-like %s, but incompatible or overflow value given';

    /**
     * @var string
     */
    public string $type;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $def;

    /**
     * @var string
     */
    public string $normal;

    /**
     * @var string
     */
    public string $docblock;

    /**
     * @var string|null
     */
    public ?string $phpType = null;

    /**
     * @var bool
     */
    public bool $nullable = false;

    /**
     * ArgumentInfo constructor.
     *
     * @param Info $info
     * @param string $signature
     */
    public function __construct(Info $info, string $signature)
    {
        parent::__construct($info);

        [$type, $arg] = $this->getArgInfo($signature);

        $normal = $this->getNormalTypeName($type);

        $this->type = $type;
        $this->name = $arg;
        $this->def = '$' . $arg;
        $this->normal = $normal;
        $this->docblock = $this->getDocBlockTypeName($type);
        $this->nullable = \strpos($signature, '*') !== false;

        $types = $this->info->types[$this->normal]['type'] ?? [];

        if (\count($types)) {
            $this->phpType = \reset($types);
        }
    }

    /**
     * @return string|null
     */
    public function getAssertionCode(): ?string
    {
        if ($assertion = $this->getAssertionByTypeName($this->normal)) {
            $assertion = \sprintf($assertion, $this->def);
            $message = \sprintf(self::ASSERTION_FORMAT, $this->def, $this->normal);

            return \sprintf('assert(%s, \'%s\');', $assertion, $message);
        }

        return null;
    }

    /**
     * @param string $arg
     * @return array
     */
    private function getArgInfo(string $arg): array
    {
        \preg_match('/^(.+?)\b(\w+)$/u', $arg, $matches);

        if (\count($matches) !== 3) {
            throw new \InvalidArgumentException('Invalid argument definition ' . $arg);
        }

        return [
            \trim($matches[1]),
            $matches[2],
        ];
    }
}
