<?php

namespace App\Seeders;

class CategorySeeder extends Seeder
{
    public function getData(): array
    {
        return [
            [
                'id' => 1,
                'name' => 'Sports',
                'description' => 'Sport news',
            ],
            [
                'id' => 2,
                'name' => 'Finance',
                'description' => 'Finance news',
            ],
            [
                'id' => 3,
                'name' => 'Politics',
                'description' => 'All about politics',
            ]
        ];
    }

    public function getTableName(): string
    {
        return 'categories';
    }
}