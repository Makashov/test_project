<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Main Page</title>
    <style>
        {$css}
    </style>
</head>
<body>

<nav>
    <span>Main Page</span>
</nav>

{foreach $categories as $category}
    <div class="category">
        <a href="/categories/{$category.id}">
            <strong class="category__name">{$category.name}</strong>
        </a>
        <div class="articles">
            {foreach $category.articles as $article}
                <a class="article" href="/articles/{$article.id}">
                    <img class="article__image" src="/images/{$article.image}" alt="{$article.title}">
                    <div class="article__title">{$article.title}</div>
                </a>
            {/foreach}
        </div>
    </div>
{/foreach}

</body>
</html>