<?php

namespace App\smarty;

use Smarty\Smarty as SmartyBase;

class Smarty extends SmartyBase
{
    public function __construct()
    {
        parent::__construct();

        $this->setTemplateDir( __DIR__ . '/templates');
        $this->setCompileDir(__DIR__ . '/templates_c');
        $this->setCacheDir(__DIR__ . '/cache');
        $this->setConfigDir(__DIR__ . '/configs');
    }
}