<?php

/**
 * This file is part of OpenGL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\OpenGL;

use FFI\CData;
use Serafim\OpenGL\Support\GLLibrary;
use Serafim\OpenGL\Support\KernelTrait;
use Serafim\OpenGL\Support\Loader;
use Serafim\SDL\Support\SingletonTrait;

/**
 * Class GL
 */
abstract class GL
{
    use KernelTrait;
    use SingletonTrait;

    /**
     * @var array|CData[]|\Closure[]
     */
    private static array $virtualFunctions = [];

    /**
     * GL constructor.
     */
    public function __construct()
    {
        $this->info = Loader::load(new GLLibrary());
    }

    /**
     * @param string $fn
     * @return mixed
     */
    protected function getProcAddressFunction(string $fn)
    {
        switch (\PHP_OS_FAMILY) {
            case 'Windows':
                return $this->info->ffi->wglGetProcAddress($fn);

            case 'Linux':
                // glXGetProcAddressARB?
                return $this->info->ffi->glXGetProcAddress($fn);

            default:
                throw new \LogicException('Unrecognized platform');
        }
    }

    /**
     * @param string $fn
     * @param string $signature
     * @return CData|\Closure
     */
    public function getProcAddress(string $fn, string $signature): CData
    {
        return self::$virtualFunctions[$fn] ??= $this->cast($signature, $this->getProcAddressFunction($fn));
    }
}
