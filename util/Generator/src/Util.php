<?php

/**
 * This file is part of Generator package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace CodeGenerator;

/**
 * Class Util
 */
class Util
{

    /**
     * @param string $type
     * @return array|string[]
     */
    public static function splitType(string $type): array
    {
        \preg_match_all('/\w+|\W|\h/ium', $type, $matches);

        return \array_filter($matches[0], fn (string $chunk) => \trim($chunk));
    }

    /**
     * @param string $type
     * @return string
     */
    public static function formatType(string $type): string
    {
        $result = '';

        foreach (self::splitType($type) as $chunk) {
            $result .= $chunk;

            if ($chunk !== '*') {
                $result .= ' ';
            }
        }

        return \rtrim($result);
    }

    /**
     * @param string $text
     * @param int $depth
     * @return string
     */
    public static function format(string $text, int $depth = 1): string
    {
        $prefix = \str_repeat(' ', $depth * 4);

        $lines = \array_map(fn (string $line): string => $prefix . $line, \explode("\n", $text));

        return \implode("\n", $lines);
    }

    /**
     * @param mixed $value
     * @param bool $upper
     * @return string
     */
    public static function toHexString($value, bool $upper = true): string
    {
        $hex = \is_string($value)
            ? \gmp_strval(\gmp_init((string)$value), 16)
            : \dechex((int)$value);

        [$length, $result] = [4, ''];

        while (true) {
            if (\strlen($hex) <= $length) {
                $result = self::padHex($hex, $length, $upper);
                break;
            }

            $length += 4;
        }

        return $result;
    }

    /**
     * @param string $hex
     * @param int $length
     * @param bool $upper
     * @return string
     */
    private static function padHex(string $hex, int $length, bool $upper = true): string
    {
        $result = '';

        $suffix = \str_pad($hex, $length, '0', \STR_PAD_LEFT);

        for ($i = 1, $len = \strlen($suffix); $i <= $len; ++$i) {
            $result .= $suffix[$i - 1];

            if ($i % 4 === 0) {
                $result .= '_';
            }
        }

        $value = \rtrim($result, '_');
        $value = $upper ? \strtoupper($value) : $value;

        return '0x' . $value;
    }
}
