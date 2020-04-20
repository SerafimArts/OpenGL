<?php

/**
 * This file is part of OpenGL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\OpenGL\Support;

use Illuminate\Support\Str;
use League\HTMLToMarkdown\HtmlConverter;

/**
 * Class DocsGLGenerator
 */
class DocsGLGenerator implements DocsGeneratorInterface
{
    /**
     * @var string
     */
    private string $directory;

    /**
     * @var array|string[]
     */
    private array $specs = [
        'gl2',
        'gl3',
        'gl4',
    ];

    /**
     * @var HtmlConverter
     */
    private HtmlConverter $html;

    /**
     * DocsGLGenerator constructor.
     *
     * @param string $directory
     */
    public function __construct(string $directory)
    {
        $this->directory = $directory;

        $this->html = new HtmlConverter([
            'strip_tags' => true,
            'hard_break' => true
        ]);
    }

    /**
     * @param string $name
     * @return array|string[]
     */
    private function lookup(string $name): array
    {
        $normal = \preg_replace('/^(.+?)\d\w+$/sum', '$1', $name);

        $files = [];

        foreach ($this->specs as $spec) {
            if (\is_file($this->directory . '/' . $spec . '/' . $name . '.xhtml')) {
                $files[] = $this->directory . '/' . $spec . '/' . $name . '.xhtml';
            } elseif(\is_file($this->directory . '/' . $spec . '/' . $normal . '.xhtml')) {
                $files[] = $this->directory . '/' . $spec . '/' . $normal . '.xhtml';
            }
        }

        return \array_unique($files);
    }

    /**
     * @param \SimpleXMLElement $xml
     * @return \SimpleXMLElement|null
     */
    private function findDescription(\SimpleXMLElement $xml): ?\SimpleXMLElement
    {
        $sections = $xml->xpath('//*[@class=\'refsect1\']');

        foreach ($sections as $section) {
            foreach ($section as $child) {
                if (\strtolower($child->getName()) === 'h2' && \strtolower(\trim((string)$child)) === 'description') {
                    $dom = \dom_import_simplexml($child);
                    $dom->parentNode->removeChild($dom);

                    return $section;
                }
            }
        }

        return null;
    }

    /**
     * @param string $text
     * @return string
     */
    private function formatDescription(string $text): string
    {
        $text = $this->html->convert($text);
        $text = \strip_tags($text);
        $text = \preg_replace('/\h+/um', ' ', $text);
        $text = \preg_replace('/^\h(\S)/um', '$1', $text);
        $text = \preg_replace('/\n{3,}/um', "\n\n", $text);
        $text = \preg_replace('/^`(\w+)`\h/u', '', $text);
        $text = \preg_replace('/^`/um', ' - `', $text);
        $text = \str_replace(['\_', '\[', '\]'], ['_', '[', ']'], $text);
        $text = \wordwrap(\trim($text), 110);

        $text = \preg_replace_callback('/\[([^\n]+?)]\([^\n]+?\)/ium', function (array $link) {
            [$body, $link] = $link;

            return '{@see ' . $link . '}';
        }, $text);

        return Str::ucfirst($text);
    }

    /**
     * @param array $files
     * @return string
     */
    private function readDescription(array $files): string
    {
        $file = \reset($files);

        $xml = \simplexml_load_string(\file_get_contents($file));

        $description = $this->findDescription($xml);

        if ($description === null) {
            return '';
        }

        return $this->formatDescription($description->saveXML());
    }

    /**
     * @param string $name
     * @return string|null
     */
    public function forFunction(string $name): ?string
    {
        $files = $this->lookup($name);

        $links = [];

        if (\count($files) === 0) {
            return null;
        }

        foreach ($files as $file) {
            $links[] = '@see http://docs.gl/' . basename(dirname($file)) . '/' . basename($file, '.xhtml');
        }

        return
            $this->readDescription($files) . "\n\n" .
            \implode("\n", $links);
    }
}
