<?php

/**
 * This file is part of OpenGL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace CodeGenerator;

use CodeGenerator\Dependency\ConstantGenerator;
use CodeGenerator\Dependency\MethodGenerator;
use CodeGenerator\Documentation\DocumentationInterface;
use Nette\PhpGenerator\PhpFile;
use Nette\PhpGenerator\PsrPrinter;
use Serafim\OpenGL\Support\Assert;

/**
 * Class ClassGenerator
 */
class ClassGenerator extends Generator
{
    /**
     * @var string
     */
    private const FILE_COMMENT = <<<'comment'
    This file is part of OpenGL package.
    
    For the full copyright and license information, please view the LICENSE
    file that was distributed with this source code.
    
    MACHINE GENERATED FILE, DO NOT EDIT
    comment;

    /**
     * ClassGenerator constructor.
     *
     * @param DocumentationInterface $docs
     * @param array $data
     * @param array $types
     */
    public function __construct(DocumentationInterface $docs, array $data, array $types)
    {
        parent::__construct(new Info($docs, $data, $types));
    }

    /**
     * @param string $out
     * @return void
     */
    public function generate(string $out): void
    {
        $printer = new PsrPrinter();

        \file_put_contents($out, $printer->printFile($this->build()));
    }

    /**
     * @return PhpFile
     */
    private function build(): PhpFile
    {
        $file = new PhpFile();
        $file->addComment(self::FILE_COMMENT);
        $file->setStrictTypes(true);

        if (! isset($this->info->data['class'])) {
            throw new \LogicException('Unknown class name');
        }

        $namespace = $file->addNamespace($this->getNamespaceName());
        $namespace->addUse(Assert::class);

        foreach ($this->info->data['use'] ?? [] as $use) {
            $namespace->addUse($use);
        }

        $class = $namespace->addClass($this->getClassName());

        if (isset($this->info->data['comment'])) {
            $class->addComment($this->info->data['comment']);
        }

        if (isset($this->info->data['extends'])) {
            $class->addExtend($this->info->data['extends']);
        }

        foreach ($this->info->data['constants'] ?? [] as $name => $value) {
            (new ConstantGenerator($this->info, $name, $value))->attachTo($class);
        }

        foreach ($this->info->data['functions'] ?? [] as $name => $info) {
            (new MethodGenerator($this->info, $name, $info))->attachTo($class);
        }

        return $file;
    }

}
