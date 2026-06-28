<?php

namespace App\Seeders;

class CategorySeeder extends Seeder
{
    public function getData(): array
    {
        return [
            [
                'name' => 'Shoes',
                'description' => 'Description for shoes',
            ],
            [
                'name' => 'Pants',
                'description' => 'Description for pants',
            ],
            [
                'name' => 'Shirts',
                'description' => 'Description for shirts',
            ]
        ];
    }

    public function getTableName(): string
    {
        return 'categories';
    }
}