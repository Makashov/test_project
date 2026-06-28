<?php

namespace App\Controllers;

use App\App;

abstract class BaseController
{
    protected App $app;

    public function __construct()
    {
        $this->app = new App();
    }

    abstract function handle(array $params): void;
}