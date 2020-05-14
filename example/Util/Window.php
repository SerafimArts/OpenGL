<?php

/**
 * This file is part of OpenGL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\OpenGL\Example\Util;

use FFI\CData;
use Serafim\SDL\Event;
use Serafim\SDL\Kernel\Event\Type;
use Serafim\SDL\SDL;

/**
 * Class Window
 */
class Window
{
    /**
     * @var int
     */
    private const WIN_FLAGS = SDL::SDL_WINDOW_OPENGL | SDL::SDL_WINDOW_SHOWN;

    /**
     * @var int
     */
    private const WIN_POS = SDL::SDL_WINDOWPOS_CENTERED;

    /**
     * @var CData
     */
    private CData $winptr;

    /**
     * @var SDL
     */
    private SDL $sdl;

    /**
     * Window constructor.
     *
     * @param string $title
     * @param int $width
     * @param int $height
     */
    public function __construct(string $title, int $width, int $height)
    {
        $this->sdl = SDL::getInstance();
        $this->sdl->SDL_Init(SDL::SDL_INIT_VIDEO);

        $this->winptr = $this->sdl->SDL_CreateWindow(
            $title,
            self::WIN_POS,
            self::WIN_POS,
            $width,
            $height,
            self::WIN_FLAGS
        );
    }

    /**
     * @param int $major
     * @param int $minor
     * @return CData
     */
    public function opengl(int $major, int $minor): CData
    {
        $this->sdl->SDL_GL_SetAttribute(SDL::SDL_GL_CONTEXT_MAJOR_VERSION, $major);
        $this->sdl->SDL_GL_SetAttribute(SDL::SDL_GL_CONTEXT_MINOR_VERSION, $minor);
        $this->sdl->SDL_GL_SetAttribute(SDL::SDL_GL_CONTEXT_PROFILE_MASK, SDL::SDL_GL_CONTEXT_PROFILE_CORE);

        return $this->sdl->SDL_GL_CreateContext($this->winptr);
    }

    /**
     * @param \Closure $tick
     * @return void
     */
    public function loop(\Closure $tick): void
    {
        $event = $this->sdl->new(Event::class);

        /** @var bool $running */
        while ($running ??= true) {
            $this->sdl->SDL_PollEvent(SDL::addr($event));

            if ($event->type === Type::SDL_QUIT) {
                $running = false;
            }

            $tick();

            $this->sdl->SDL_GL_SwapWindow($this->winptr);
        }
    }
}
