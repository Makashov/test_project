<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Smarty\Smarty;
use ScssPhp\ScssPhp\Compiler;

$compiler = new Compiler();
$compiler->setImportPaths('../app/scss/');

$css = $compiler->compileString('@import "style.scss"')->getCss();

$smarty = new Smarty();

$smarty->assign('css', $css);
$smarty->display('index.tpl');
