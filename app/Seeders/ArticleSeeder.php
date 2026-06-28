<?php

namespace App\Seeders;

class ArticleSeeder extends Seeder
{
    public function getData(): array
    {
        return [
            [
                'id' => 1,
                'image' => 'sports.jpg',
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
            [
                'id' => 4,
                'image' => 'politics.jpg',
                'title' => 'Another Politics article',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque luctus pharetra tempor. Pellentesque consectetur purus a nulla auctor hendrerit.',
                'views_count' => 54,
            ],
            [
                'id' => 5,
                'image' => 'politics.jpg',
                'title' => 'New Politics article',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque luctus pharetra tempor. Pellentesque consectetur purus a nulla auctor hendrerit.',
                'views_count' => 54,
            ],
            [
                'id' => 6,
                'image' => 'finance.jpg',
                'title' => 'Finance article 2',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque luctus pharetra tempor. Pellentesque consectetur purus a nulla auctor hendrerit.',
                'views_count' => 24,
            ],
            [
                'id' => 7,
                'image' => 'finance.jpg',
                'title' => 'Finance article 3',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque luctus pharetra tempor. Pellentesque consectetur purus a nulla auctor hendrerit.',
                'views_count' => 7,
            ],
            [
                'id' => 8,
                'image' => 'sports.jpg',
                'title' => 'Second Sports article',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque luctus pharetra tempor. Pellentesque consectetur purus a nulla auctor hendrerit.',
                'views_count' => 88,
            ],
            [
                'id' => 9,
                'image' => 'sports.jpg',
                'title' => 'Third Sports article',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque luctus pharetra tempor. Pellentesque consectetur purus a nulla auctor hendrerit.',
                'views_count' => 31,
            ],
        ];
    }

    public function getTableName(): string
    {
        return 'articles';
    }
}
