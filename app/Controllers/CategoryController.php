<?php

namespace App\Controllers;

class CategoryController extends BaseController
{

    static function handle(array $params): string
    {
        return 'CategoryController ' . $params['id'];
    }
}