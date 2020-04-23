<?php

/**
 * This file is part of OpenGL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\OpenGL\Type;

use FFI\CData;

/**
 * Interface CTypeInterface
 */
interface CTypeInterface
{
    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return CData
     */
    public function getCData(): CData;

    /**
     * @return CData
     */
    public function getPointer(): CData;

    /**
     * @return int
     */
    public function sizeOf(): int;
}
