<?php

/**
 * This file is part of OpenGL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace CodeGenerator;

use Documentation\DocumentationInterface;

/**
 * Class Info
 */
class Info
{
    /**
     * @var DocumentationInterface
     */
    public DocumentationInterface $docs;

    /**
     * @var array
     */
    public array $data;

    /**
     * @var array
     */
    public array $types;

    /**
     * Info constructor.
     *
     * @param DocumentationInterface $docs
     * @param array $data
     * @param array $types
     */
    public function __construct(DocumentationInterface $docs, array $data, array $types)
    {
        $this->docs = $docs;
        $this->data = $data;
        $this->types = $types;
    }
}
