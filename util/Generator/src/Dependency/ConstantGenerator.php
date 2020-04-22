<?php

/**
 * This file is part of OpenGL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace CodeGenerator\Dependency;

use CodeGenerator\GeneratedInterface;
use CodeGenerator\Generator;
use CodeGenerator\Info;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\Literal;

/**
 * Class ConstantGenerator
 */
class ConstantGenerator extends Generator implements GeneratedInterface
{
    /**
     * @var string
     */
    private string $name;

    /**
     * @var mixed
     */
    private $value;

    /**
     * ConstantGenerator constructor.
     *
     * @param Info $info
     * @param string $name
     * @param $value
     */
    public function __construct(Info $info, string $name, $value)
    {
        parent::__construct($info);

        $this->name = $name;
        $this->value = $value;
    }

    /**
     * @param ClassType $class
     * @return void
     */
    public function attachTo(ClassType $class): void
    {
        $literal = new Literal($this->toHexString($this->value));

        $const = $class->addConstant($this->name, $literal);
        $const->setPublic();
        $const->setComment($this->getComment());
    }

    /**
     * @return string
     */
    private function getComment(): string
    {
        return $this->getDocBlock([
            'var'   => $this->getTypeName($this->value),
            'since' => $this->getVersion(),
        ]);
    }
}
