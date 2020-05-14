<?php

/**
 * This file is part of OpenGL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\OpenGL;

use FFI\CCharPtr;
use FFI\CData;

/**
 * Class Util
 */
final class Util
{
    /**
     * @var string
     */
    private const TYPE_EXTRACT_PATTERN = '/FFI\\\\CData:(?:struct\h)?(.+?)\h*Object/ium';

    /**
     * @param CData $struct
     * @return string
     */
    public static function typeName(CData $struct): string
    {
        \preg_match(self::TYPE_EXTRACT_PATTERN, \print_r($struct, true), $matches);

        return $matches[1] ?? 'unknown';
    }

    /**
     * @param string $type
     * @param array $initializer
     * @param \FFI|null $context
     * @return CData
     */
    public static function array(string $type, array $initializer = [], \FFI $context = null): CData
    {
        $signature = $type . '[' . \count($initializer) . ']';

        $instance = $context !== null ? $context->new($signature) : \FFI::new($signature);

        foreach ($initializer as $i => $value) {
            $instance[$i] = $value;
        }

        return $instance;
    }

    /**
     * @param string $struct
     * @param array $initializer
     * @param \FFI|null $context
     * @return CData
     */
    public static function struct(string $struct, array $initializer = [], \FFI $context = null): CData
    {
        $instance = $context ? $context->new($struct) : \FFI::new($struct);

        foreach ($initializer as $i => $value) {
            $instance[$i] = $value;
        }

        return $instance;
    }

    /**
     * @param string $string
     * @return CData
     */
    public static function string(string $string): CData
    {
        $nullTerminated = $string . "\0";

        $length = \strlen($nullTerminated);

        $instance = \FFI::new("char[$length]", false);

        \FFI::memcpy($instance, $nullTerminated, $length);

        return $instance;
    }

    /**
     * @param string $string
     * @return CData|CCharPtr
     */
    public static function charPtr(string $string): CData
    {
        return \FFI::addr(self::string($string)[0]);
    }

    /**
     * @param int $length
     * @return CData
     */
    public static function emptyCharPtr(int $length): CData
    {
        return \FFI::addr(self::emptyString($length)[0]);
    }

    /**
     * @param int $length
     * @return CData
     */
    public static function emptyString(int $length): CData
    {
        return \FFI::new("char[$length]", false);
    }
}
