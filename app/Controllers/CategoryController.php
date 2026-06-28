<?php

namespace App\Controllers;

use PDO;

class CategoryController extends BaseController
{
    function handle(array $params): void
    {
        $id = $params['id'] ?? null;

        $conn = $this->app->connect();

        $stmt = $conn->prepare('SELECT id, name, description FROM categories WHERE id = :id');
        $stmt->execute(['id' => $id]);
        $category = $stmt->fetch(PDO::FETCH_ASSOC);

        if (! $category) {
            return;
        }

        $articlesStmt = $conn->prepare(
            'SELECT a.id, a.image, a.title, a.description, a.views_count
             FROM articles a
             JOIN article_categories ac ON ac.article_id = a.id
             WHERE ac.category_id = :id
             ORDER BY a.id DESC'
        );
        $articlesStmt->execute(['id' => $category['id']]);
        $category['articles'] = $articlesStmt->fetchAll(PDO::FETCH_ASSOC);

        $this->app->render('category.tpl', ['category' => $category]);
    }
}
