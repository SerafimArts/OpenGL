<?php

/**
 * This file is part of OpenGL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\OpenGL;

use Serafim\OpenGL\Support\GLULibrary;
use Serafim\OpenGL\Support\KernelTrait;
use Serafim\OpenGL\Support\Loader;
use Serafim\SDL\Support\SingletonTrait;

/**
 * Class GLU
 */
class GLU
{
    use SingletonTrait;
    use KernelTrait;

    /**
     * GLU constructor.
     */
    public function __construct()
    {
        $this->info = Loader::load(new GLULibrary());
    }
}
