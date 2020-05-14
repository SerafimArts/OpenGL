<?php

/**
 * This file is part of OpenGL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Documentation;

use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\SplFileInfo;

/**
 * Class KhronosDocsGenerator
 */
class KhronosDocumentationGenerator extends Documentation
{
    /**
     * @var array|SplFileInfo[]
     */
    private array $files = [];

    /**
     * @var KhronosRenderer
     */
    private KhronosRenderer $renderer;

    /**
     * @var string
     */
    protected string $directory;

    /**
     * KhronosDocumentationGenerator constructor.
     *
     * @param string $directory
     */
    public function __construct(string $directory)
    {
        $this->directory = $directory;

        $this->renderer = new KhronosRenderer();

        $this->readFiles();
    }

    /**
     * @return void
     */
    private function readFiles(): void
    {
        $files = (new Finder())
            ->in($this->directory)
            ->depth(1)
            ->filter(fn(SplFileInfo $file): bool => \in_array($file->getRelativePath(), ['gl4', 'gl2.1'], true))
            ->name('*.xml');

        foreach ($files as $file) {
            $chunks = \explode(\DIRECTORY_SEPARATOR, $file->getRelativePathname());
            $version = \array_shift($chunks);
            $function = $file->getBasename('.xml');
            $key = \hash('crc32', $version . ':' . $function);

            if (! isset($this->files[$key])) {
                $this->files[$key] = $file;
            }
        }
    }

    /**
     * @param string $dir
     * @return static
     */
    public static function download(string $dir): self
    {
        if (! \is_dir($dir = \str_replace('\\', '/', $dir))) {
            \exec('git clone git@github.com:KhronosGroup/OpenGL-Refpages.git ' . $dir);
        }

        return new static($dir);
    }

    /**
     * @param string $name
     * @param array $info
     * @param array $parent
     * @return string
     */
    public function forMethod(string $name, array $info, array $parent): string
    {
        $files = $this->files($name);
        $result = [$this->read(\end($files))];

        foreach ($files as $file) {
            $version = $file->getRelativePath() === 'gl4' ? 'gl4' : 'gl2';

            $result[] = \sprintf('@see http://docs.gl/%s/%s', $version, $file->getBasename('.xml'));
        }

        return \implode("\n", $result) . "\n" .
            parent::forMethod($name, $info, $parent);
    }

    /**
     * @param string $name
     * @return array|SplFileInfo[]
     */
    private function files(string $name): array
    {
        $priorities = [];

        foreach ($this->files as $info) {
            $weight = \levenshtein($name, $info->getBasename('.xml'));
            $priorities[$weight][] = $info;
        }

        \ksort($priorities);

        return \reset($priorities);
    }

    /**
     * @param SplFileInfo $file
     * @return string
     */
    private function read(SplFileInfo $file): string
    {
        return $this->renderer->render($file);
    }
}
