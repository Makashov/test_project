<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    static function handle(array $params = []): string
    {
        return "Hello World";
    }
}