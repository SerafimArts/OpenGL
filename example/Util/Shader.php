<?php

/**
 * This file is part of OpenGL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\OpenGL\Example\Util;

use Serafim\OpenGL\GL20 as GL;

/**
 * Class Shader
 */
class Shader
{
    /**
     * @var GL
     */
    private GL $gl;

    /**
     * @var int
     */
    private int $type;

    /**
     * @var string
     */
    private string $program;

    /**
     * Shader constructor.
     *
     * @param GL $gl
     * @param int $type
     * @param string $program
     */
    public function __construct(GL $gl, int $type, string $program)
    {
        $this->gl = $gl;
        $this->type = $type;
        $this->program = $program;
    }

    /**
     * @param GL $gl
     * @param int $type
     * @param string $file
     * @return static
     */
    public static function fromFile(GL $gl, int $type, string $file): self
    {
        $program = \file_get_contents($file);

        return new static($gl, $type, $program);
    }

    /**
     * @param int $id
     * @param int $status
     * @return void
     */
    private function assert(int $id, int $status): void
    {
        $infoLogLength = $result = 0;

        $this->gl->getShaderiv($id, $status, $result);
        $this->gl->getShaderiv($id, GL::GL_INFO_LOG_LENGTH, $infoLogLength);

        if ($result === GL::GL_FALSE) {
            $info = $log = null;
            $this->gl->getShaderInfoLog($id, $infoLogLength, $info, $log);

            throw new \InvalidArgumentException($log);
        }
    }

    /**
     * @return int
     */
    public function compile(): int
    {
        $id = $this->gl->createShader($this->type);
        $this->gl->shaderSource($id, 1, [$this->program], null);
        $this->gl->compileShader($id);

        try {
            $this->assert($id, GL::GL_COMPILE_STATUS);

            return $id;
        } catch (\Throwable $e) {
            throw new \InvalidArgumentException($e->getMessage(), 0, $e);
        }
    }
}
