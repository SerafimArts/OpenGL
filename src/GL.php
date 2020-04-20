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

/**
 * Class GL
 */
abstract class GL
{
    use KernelTrait;

    /**
     * @var array|CData[]|\Closure[]
     */
    private static array $virtualFunctions = [];

    /**
     * @param string $fn
     * @return mixed
     */
    protected static function getProcAddress(string $fn)
    {
        switch (\PHP_OS_FAMILY) {
            case 'Windows':
                return self::$ffi->wglGetProcAddress($fn);

            case 'Linux':
                // glXGetProcAddressARB?
                return self::$ffi->glXGetProcAddress($fn);

            default:
                throw new \LogicException('Unrecognized platform');
        }
    }

    /**
     * @param string $fn
     * @param string $signature
     * @return CData|\Closure
     */
    public static function getProc(string $fn, string $signature): CData
    {
        return self::$virtualFunctions[$fn] ??= self::cast($signature, self::getProcAddress($fn));
    }
}
