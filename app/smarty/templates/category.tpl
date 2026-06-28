<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{$category.name}</title>
    <style>
        {$css}
    </style>
</head>
<body>

<nav>
    <span>Category</span>
    <a href="/" class="back-to-home">&#8592; Back to home</a>
</nav>

<div class="category">
    <strong class="category__name">{$category.name}</strong>
    <p>{$category.description}</p>
    <div class="articles">
        {foreach $category.articles as $article}
            <a class="article" href="/articles/{$article.id}">
                <img class="article__image" src="/images/{$article.image}" alt="{$article.title}">
                <div class="article__title">{$article.title}</div>
            </a>
        {/foreach}
    </div>
</div>

</body>
</html>
