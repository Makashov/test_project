<?php

namespace App\Controllers;

use PDO;

class HomeController extends BaseController
{
    function handle(array $params = []): void
    {
        $conn = $this->app->connect();

        $categories = $conn->query('SELECT id, name, description FROM categories ORDER BY id DESC')
            ->fetchAll(PDO::FETCH_ASSOC);

        $articlesStmt = $conn->prepare(
            'SELECT a.id, a.image, a.title, a.description, a.views_count
             FROM articles a
             JOIN article_categories ac ON ac.article_id = a.id
             WHERE ac.category_id = :category_id
             ORDER BY a.id DESC
             LIMIT 3'
        );

        foreach ($categories as $i => $category) {
            $articlesStmt->execute(['category_id' => $category['id']]);
            $categories[$i]['articles'] = $articlesStmt->fetchAll(PDO::FETCH_ASSOC);
        }

        $this->app->render('index.tpl', ['categories' => $categories]);
    }
}
