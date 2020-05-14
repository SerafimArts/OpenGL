<?php

/**
 * This file is part of Generator package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace CodeGenerator\Type\Output;

use CodeGenerator\Type\OutputType;

/**
 * Class StringType
 */
class StringType extends OutputType
{
    /**
     * @var string
     */
    private const TPL_CAST = '\\FFI::string(\\FFI::cast(\'char*\', %s))';

    /**
     * @return string|null
     */
    public function getTypeHint(): ?string
    {
        return 'string';
    }

    /**
     * @param string $expr
     * @return string
     */
    public function cast(string $expr): string
    {
        return \sprintf(self::TPL_CAST, $expr);
    }
}
