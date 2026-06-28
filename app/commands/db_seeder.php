<?php

require __DIR__ . '/../../vendor/autoload.php';

use App\Seeders\ArticleCategorySeeder;
use App\Seeders\ArticleSeeder;
use App\Seeders\CategorySeeder;

$seeders = [
    CategorySeeder::class,
    ArticleSeeder::class,
    ArticleCategorySeeder::class,
];

foreach ($seeders as $seeder) {
    $seederClass = new $seeder();

    $seederClass->run();
}