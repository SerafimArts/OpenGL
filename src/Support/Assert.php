<?php

/**
 * This file is part of OpenGL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\OpenGL\Support;

use FFI\CData;
use Serafim\OpenGL\Util;

/**
 * <code>
 *  short char          = [INT8_MIN ... INT8_MAX]
 *  char                = [INT8_MIN ... INT8_MAX]
 *  unsigned char       = [0 ... UINT8_MAX]
 *  short               = [INT16_MIN ... INT16_MAX]
 *  unsigned short      = [0 ... UINT16_MAX]
 *  int                 = [INT16_MIN ... INT16_MAX]
 *  unsigned int        = [0 ... UINT16_MAX]
 *  long                = [INT32_MIN ... INT32_MAX]
 *  unsigned long       = [0 ... UINT32_MAX]
 *  long long           = [INT64_MIN ... INT64_MAX]
 *  unsigned long long  = [0 ... UINT64_MAX]
 * </code>
 */
final class Assert
{
    /**
     * @var int
     */
    public const INT8_MIN = -2 ** 7;

    /**
     * @var int
     */
    public const INT8_MAX = 2 ** 7 - 1;

    /**
     * @var int
     */
    public const UINT8_MAX = 2 ** 8 - 1;

    /**
     * @var int
     */
    public const INT16_MIN = -2 ** 15;

    /**
     * @var int
     */
    public const INT16_MAX = 2 ** 15 - 1;

    /**
     * @var int
     */
    public const UINT16_MAX = 2 ** 16 - 1;

    /**
     * @var int
     */
    public const INT32_MIN = -2 ** 31;

    /**
     * @var int
     */
    public const INT32_MAX = 2 ** 31 - 1;

    /**
     * @var int
     */
    public const UINT32_MAX = 2 ** 32 - 1;

    /**
     * @var int
     */
    public const INT64_MIN = -2 ** 63;

    /**
     * @var int
     */
    public const INT64_MAX = 2 ** 63 - 1;

    /**
     * @var int
     */
    public const UINT64_MAX = 2 ** 64 - 1;

    /**
     * @var float
     */
    public const FLT_MIN = 1.175494e-38;

    /**
     * @var float
     */
    public const FLT_MAX = 3.402823e+38;

    /**
     * @var float
     */
    public const DBL_MIN = 2.225074e-308;

    /**
     * @var float
     */
    public const DBL_MAX = 1.797693e+308;

    /**
     * @var float
     */
    public const LDBL_MIN = 3.362103e-4932;

    /**
     * @var float
     */
    public const LDBL_MAX = 1.189731e+4932;

    /**
     * @param int $value
     * @return bool
     */
    public static function int8($value): bool
    {
        return \is_int($value) && $value >= self::INT8_MIN && $value <= self::INT8_MAX;
    }

    /**
     * @param int $value
     * @return bool
     */
    public static function uint8($value): bool
    {
        return \is_int($value) && $value >= 0 && $value <= self::UINT8_MAX;
    }

    /**
     * @param int $value
     * @return bool
     */
    public static function int16($value): bool
    {
        return \is_int($value) && $value >= self::INT16_MIN && $value <= self::INT16_MAX;
    }

    /**
     * @param int $value
     * @return bool
     */
    public static function uint16($value): bool
    {
        return \is_int($value) && $value >= 0 && $value <= self::UINT16_MAX;
    }

    /**
     * @param int $value
     * @return bool
     */
    public static function int32($value): bool
    {
        return \is_int($value) && $value >= self::INT32_MIN && $value <= self::INT32_MAX;
    }

    /**
     * @param int $value
     * @return bool
     */
    public static function uint32($value): bool
    {
        return \is_int($value) && $value >= 0 && $value <= self::UINT32_MAX;
    }

    /**
     * @param int|float|string $value
     * @return bool
     */
    public static function int64($value): bool
    {
        return \is_numeric($value) && $value >= self::INT64_MIN && $value <= self::INT64_MAX;
    }

    /**
     * @param int|float|string $value
     * @return bool
     */
    public static function uint64($value): bool
    {
        return \is_numeric($value) && $value >= 0 && $value <= self::UINT64_MAX;
    }

    /**
     * @param float $value
     * @return bool
     */
    public static function float32($value): bool
    {
        return \is_float($value) && $value >= self::FLT_MIN && $value <= self::FLT_MAX;
    }

    /**
     * @param float $value
     * @return bool
     */
    public static function float64($value): bool
    {
        return \is_float($value) && $value >= self::DBL_MIN && $value <= self::DBL_MAX;
    }

    /**
     * @param float $value
     * @return bool
     */
    public static function float80($value): bool
    {
        return \is_float($value) && $value >= self::LDBL_MIN && $value <= self::LDBL_MAX;
    }

    /**
     * @param CData $type
     * @param string $name
     * @return bool
     */
    public static function typeOf(CData $type, string $name): bool
    {
        return Util::typeName($type) === $name;
    }
}
