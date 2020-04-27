<?php

/**
 * This file is part of OpenGL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace CodeGenerator\Dependency;

use CodeGenerator\Generator;
use CodeGenerator\Info;

/**
 * Class TypeInfo
 */
class TypeInfo extends Generator
{
    /**
     * @var string
     */
    public string $type;

    /**
     * @var string
     */
    public string $normal;

    /**
     * TypeInfo constructor.
     *
     * @param Info $info
     * @param string $type
     */
    public function __construct(Info $info, string $type)
    {
        parent::__construct($info);

        $this->type = $type;
        $this->normal = $this->getNormalTypeName($type);
    }

    /**
     * @param string $name
     * @return string
     */
    protected function getNormalTypeName(string $name): string
    {
        $name = \str_replace(['const', ' '], '', $name);

        return \preg_replace('/\h+/u', '', $name);
    }
}
