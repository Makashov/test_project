<?php

namespace App;

use App\Smarty\Smarty;
use ScssPhp\ScssPhp\Compiler;
use ScssPhp\ScssPhp\Exception\SassException;

class App
{
    protected Compiler $cssCompiler;
    protected Smarty $viewer;

    /**
     * @throws SassException
     */
    public function __construct()
    {
        $this->initViewer();
        $this->initCssCompiler();
    }

    public function render(string $view, array $params = []): void
    {
        try {
            $this->viewer->display($view, $params);
        } catch (\Exception) {
            echo "<h1>Server Error</h1>";
        }
    }

    protected function initViewer(): void
    {
        $this->viewer = new Smarty();
    }

    /**
     * @throws SassException
     */
    protected function initCssCompiler(): void
    {
        $this->cssCompiler = new Compiler();
        $this->cssCompiler->setImportPaths('../app/scss/');
        $this->viewer->assign('css', $this->cssCompiler->compileString('@import "style.scss"')->getCss());
    }
}