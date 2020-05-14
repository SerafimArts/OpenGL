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
 * Class Program
 */
class Program
{
    /**
     * @var GL
     */
    private GL $gl;

    /**
     * @var array|Shader[]
     */
    private array $shaders = [];

    /**
     * Shader constructor.
     *
     * @param GL $gl
     */
    public function __construct(GL $gl)
    {
        $this->gl = $gl;
    }

    /**
     * @param Shader $shader
     * @return self
     */
    public function attach(Shader $shader): self
    {
        $this->shaders[] = $shader;

        return $this;
    }

    /**
     * @param int $id
     * @param int $status
     * @return void
     */
    private function assert(int $id, int $status): void
    {
        $infoLogLength = $result = 0;

        $this->gl->getProgramiv($id, $status, $result);
        $this->gl->getProgramiv($id, GL::GL_INFO_LOG_LENGTH, $infoLogLength);

        if ($result === GL::GL_FALSE) {
            $info = $log = null;
            $this->gl->getShaderInfoLog($id, $infoLogLength, $info, $log);

            throw new \RuntimeException($log);
        }
    }

    /**
     * @param int $program
     * @return int[]
     */
    private function compileShaders(int $program): array
    {
        $result = [];

        foreach ($this->shaders as $shader) {
            $result[] = $id = $shader->compile();

            $this->gl->attachShader($program, $id);
        }

        return $result;
    }

    /**
     * @return int
     */
    public function compile(): int
    {
        $program = $this->gl->createProgram();

        $shaders = $this->compileShaders($program);

        $this->gl->linkProgram($program);

        $this->assert($program, GL::GL_LINK_STATUS);

        foreach ($shaders as $id) {
            $this->gl->deleteShader($id);
        }

        return $program;
    }
}
