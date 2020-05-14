<?php

/**
 * This file is part of OpenGL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\OpenGL\Example\Util;

use Serafim\OpenGL\GL43 as GL;

/**
 * Class Logger
 */
class Logger
{
    /**
     * @var GL
     */
    private GL $gl;

    /**
     * Logger constructor.
     *
     * @param GL $gl
     */
    public function __construct(GL $gl)
    {
        $this->gl = $gl;

        $gl->debugMessageCallback(function ($src, $type, $id, $severity, $len, $message, $user) {
            $message = \substr($message, 0, $len) . "\n";

            switch ($type) {
                case GL::GL_DEBUG_TYPE_ERROR:
                    \fwrite(\STDERR, '[ERROR]: ' . $message);
                    break;

                case GL::GL_DEBUG_TYPE_DEPRECATED_BEHAVIOR:
                    \fwrite(\STDERR, '[WARNING]: ' . $message);
                    break;

                case GL::GL_DEBUG_TYPE_OTHER:
                    \fwrite(\STDERR, '[INFO]: ' . $message);
                    break;

                case GL::GL_DEBUG_TYPE_PERFORMANCE:
                    \fwrite(\STDERR, '[PERFORMANCE]: ' . $message);
                    break;

                case GL::GL_DEBUG_TYPE_PORTABILITY:
                    \fwrite(\STDERR, '[PORTABILITY]: ' . $message);
                    break;

                case GL::GL_DEBUG_TYPE_UNDEFINED_BEHAVIOR:
                    \fwrite(\STDERR, '[UNDEFINED BEHAVIOR]: ' . $message);
                    break;

                default:
                    \fwrite(\STDERR, '[OTHER]: ' . $message);
            }
        }, $gl->new('void*'));
    }

    /**
     * @return void
     */
    public function enable(): void
    {
        $this->gl->enable(GL::GL_DEBUG_OUTPUT);
    }

    /**
     * @return void
     */
    public function disable(): void
    {
        $this->gl->disable(GL::GL_DEBUG_OUTPUT);
    }
}
