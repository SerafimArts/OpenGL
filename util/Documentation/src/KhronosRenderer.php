<?php

/**
 * This file is part of OpenGL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Documentation;

use League\HTMLToMarkdown\HtmlConverter;
use Symfony\Component\DomCrawler\Crawler;

/**
 * Class KhronosRenderer
 */
class KhronosRenderer
{
    /**
     * @var string
     */
    private string $gl = 'GL46';

    /**
     * @var HtmlConverter
     */
    private HtmlConverter $html;

    /**
     * KhronosRenderer constructor.
     */
    public function __construct()
    {
        $this->html = new HtmlConverter([
            'strip_tags' => true,
        ]);
    }

    /**
     * @param \SplFileInfo $file
     * @return string
     */
    public function render(\SplFileInfo $file): string
    {
        $content = \file_get_contents($file->getPathname());

        $content = \str_replace('xml:id', 'id', $content);

        $result = [];

        (new Crawler($content))
            ->filter('#description')
            ->children()
            ->each(function (Crawler $el) use (&$result, $file) {
                $line = $this->renderNode($el, $file);

                if (\trim($line)) {
                    $result[] = $line;
                }
            });

        return \implode("\n", $result);
    }

    /**
     * @param Crawler $el
     * @param \SplFileInfo $file
     * @return string
     */
    private function renderNode(Crawler $el, \SplFileInfo $file): string
    {
        switch ($el->nodeName()) {
            case 'para':
                return $this->renderParagraphNode($el) . "\n";

            case 'variablelist':
                return $this->renderVariablesList($el);

            case 'informaltable':
            case 'table':
                return $this->renderInformTable($el);

            case 'itemizedlist':
                return $this->renderItemizedList($el, 110) . "\n";

            case 'glosslist':
                return $this->renderGlossList($el, 110) . "\n";

            case 'programlisting':
                return $this->renderProgramListing($el);

            case 'include':
                $include = \dirname($file->getPathname()) . '/' . $el->attr('href');

                $crawler = new Crawler(\file_get_contents($include));

                return $this->renderNode($crawler, new \SplFileInfo($include)) . "\n";

            default:
                return '';
        }
    }

    /**
     * @param Crawler $para
     * @param int $wrap
     * @return string
     */
    private function renderParagraphNode(Crawler $para, int $wrap = 110): string
    {
        if ($para->children()->count() === 1 && $para->children()->first()->nodeName() === 'programlisting') {
            return $this->renderProgramListing($para->children()->first());
        }

        $html = $this->formatHtml($para->html());

        $html = \preg_replace('/({@\w+)\h+/ium', '$1_', $html);


        $html = $this->wrap($html, $wrap);

        $html = \preg_replace('/({@\w+)_/um', '$1 ', $html);

        return $html;
    }

    /**
     * @param Crawler $el
     * @return string
     */
    private function renderProgramListing(Crawler $el): string
    {
        $html = $this->formatCode($el->html());

        return $this->htmlToText($html);
    }

    /**
     * @param string $code
     * @return string
     */
    private function formatCode(string $code): string
    {
        $code = \preg_replace('/>\s+</um', '><', $code);

        return '<pre><code>' . $code . '</code></pre>';
    }

    /**
     * @param string $html
     * @return string
     */
    private function htmlToText(string $html): string
    {
        $text = $this->html->convert($html);

        $replacements = [
            '\\_' => '_',
            '\\*' => '*',
            '\\-' => '-',
            '*/'  => '*\\/',
            '\\[' => '[',
            '\\]' => ']',
        ];

        $text = \str_replace(\array_keys($replacements), \array_values($replacements), $text);

        $text = \preg_replace('/```(.+?)```/sum', '<code>$1</code>', $text);

        return $text;
    }

    /**
     * @param string $html
     * @return string
     */
    private function formatHtml(string $html): string
    {
        $html = $this->replace($html, '(?:refentrytitle|constant)',
            fn(string $body): string => "{@see $this->gl::$body}");

        $html = $this->replace($html, 'function',
            fn(string $body): string => "{@see $this->gl::$body}");

        $html = $this->replace($html, 'programlisting',
            fn(string $code): string => $this->formatCode($code));

        $html = $this->replace($html, 'parameter',
            fn(string $param): string => "$${param}");

        return $this->htmlToText($html);
    }

    /**
     * @param string $html
     * @param string $tag
     * @param \Closure $replacement
     * @return string
     */
    private function replace(string $html, string $tag, \Closure $replacement): string
    {
        $callback = static function (array $matches) use ($replacement): string {
            \array_shift($matches);

            return $replacement(...$matches);
        };

        return \preg_replace_callback("/<$tag>(.*?)<\/$tag>/isum", $callback, $html);
    }

    /**
     * @param string $text
     * @param int $wrap
     * @param string $depth
     * @return string
     */
    private function wrap(string $text, int $wrap, string $depth = ''): string
    {
        $text = \wordwrap($text, $wrap);

        return \str_replace("\n", "\n$depth", $text);
    }

    /**
     * @param Crawler $el
     * @return string
     */
    private function renderVariablesList(Crawler $el): string
    {
        $result = [];

        $el->children()->each(function (Crawler $el) use (&$result) {
            $result[] = $this->renderVariablesListEntry($el);
        });

        return \implode("\n", $result);
    }

    /**
     * @param Crawler $el
     * @param int $wrap
     * @return string
     */
    private function renderVariablesListEntry(Crawler $el, int $wrap = 70): string
    {
        $title = $el->filter('term')->first()->text();
        $description = \trim($this->renderParagraphNode($el->filter('listitem')->first()));

        $text = "{@see $this->gl::$title}: " . \trim($description);

        return ' - ' . $this->wrap($text, $wrap, '   ') . "\n";
    }

    /**
     * @param Crawler $el
     * @return string
     */
    private function renderInformTable(Crawler $el): string
    {
        $sizes = [];
        $table = [];

        $el->filter('tbody > row')
            ->each(function (Crawler $e) use (&$table, &$sizes): void {
                $item = [];

                $e->children()->each(function (Crawler $el, int $index) use (&$item, &$sizes): void {
                    $item[] = $current = $this->renderParagraphNode($el);

                    $sizes[$index] = \max($sizes[$index] ?? 0, \strlen($current));
                });

                $table[] = $item;
            });

        $result = [];

        foreach ($table as $cells) {
            $current = [];

            foreach ($cells as $i => $cell) {
                $current[] = \str_pad($cell, $sizes[$i]);
            }

            $result[] = '| ' . \implode(' | ', $current) . ' |';
        }

        return \trim(\implode("\n", $result));
    }

    /**
     * @param Crawler $el
     * @param int $wrap
     * @return string
     */
    private function renderItemizedList(Crawler $el, int $wrap = 70): string
    {
        $result = [];

        $el->children()->each(function (Crawler $item) use (&$result, $wrap) {
            $result[] = ' - ' . $this->wrap($this->renderParagraphNode($item), $wrap, '   ');
        });

        return \implode("\n", $result);
    }

    /**
     * @param Crawler $el
     * @param int $wrap
     * @return string
     */
    private function renderGlossList(Crawler $el, int $wrap = 70): string
    {
        $result = [];

        $el->children()->each(function (Crawler $item) use (&$result, $wrap) {
            $line = [];

            $item->children()->each(function (Crawler $item) use (&$line) {
                $line[] = $this->renderParagraphNode($item);
            });

            $result[] = ' - ' . \reset($line) . "\n   " .
                $this->wrap(\end($line), $wrap, '   ') . "\n";
        });

        return \implode("\n", $result);
    }

}
