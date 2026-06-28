<?php

namespace App;

use App\Smarty\Smarty;
use PDO;
use ScssPhp\ScssPhp\Compiler;
use ScssPhp\ScssPhp\Exception\SassException;

class App
{
    protected Compiler $cssCompiler;
    protected Smarty $viewer;
    protected ?PDO $conn = null;

    /**
     * @throws SassException
     */
    public function __construct()
    {
        $this->initViewer();
        $this->initCssCompiler();
    }

    public function connect(): PDO
    {
        if ($this->conn === null) {
            $db = get_configs()['db'];

            $this->conn = new PDO(
                "mysql:host={$db['host']}:{$db['port']};dbname={$db['database']}",
                $db['username'],
                $db['password']
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return $this->conn;
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