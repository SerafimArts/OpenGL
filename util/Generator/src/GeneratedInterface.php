<?php

/**
 * This file is part of OpenGL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace CodeGenerator;

use Nette\PhpGenerator\ClassType;

/**
 * Interface GeneratedInterface
 */
interface GeneratedInterface
{
    /**
     * @param ClassType $class
     * @return void
     */
    public function attachTo(ClassType $class): void;
}
