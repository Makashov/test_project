<?php

namespace App\Seeders;

class ArticleSeeder extends Seeder
{
    public function getData(): array
    {
        return [
            [
                'id' => 1,
                'image' => 'finance.jpg',
                'title' => 'Sport article',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque luctus pharetra tempor. Pellentesque consectetur purus a nulla auctor hendrerit.',
                'views_count' => 120,
            ],
            [
                'id' => 2,
                'image' => 'finance.jpg',
                'title' => 'Finance article',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque luctus pharetra tempor. Pellentesque consectetur purus a nulla auctor hendrerit.',
                'views_count' => 87,
            ],
            [
                'id' => 3,
                'image' => 'politics.jpg',
                'title' => 'Politics article',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque luctus pharetra tempor. Pellentesque consectetur purus a nulla auctor hendrerit.',
                'views_count' => 54,
            ],
        ];
    }

    public function getTableName(): string
    {
        return 'articles';
    }
}
