<?php

namespace App\Controllers;

abstract class BaseController
{
    abstract static function handle(array $params): string;
}