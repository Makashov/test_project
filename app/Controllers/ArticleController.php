<?php

namespace App\Controllers;

use PDO;

class ArticleController extends BaseController
{
    public function handle(array $params): void
    {
        $id = $params['id'] ?? null;

        $conn = $this->app->connect();

        $stmt = $conn->prepare(
            'SELECT id, image, title, description, content, views_count
             FROM articles
             WHERE id = :id'
        );
        $stmt->execute(['id' => $id]);
        $article = $stmt->fetch(PDO::FETCH_ASSOC);

        if (! $article) {
            return;
        }

        $this->app->render('article.tpl', ['article' => $article]);
    }
}
