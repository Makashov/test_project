<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Smarty\Smarty;

$smarty = new Smarty();

$smarty->assign('user', 'Nurbol');
$smarty->display('index.tpl');
