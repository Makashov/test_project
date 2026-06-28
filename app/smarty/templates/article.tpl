<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{if $article}{$article.title}{else}Article not found{/if}</title>
    <style>
        {$css}
    </style>
</head>
<body>

<nav>
    <span>Article</span>
    <a href="/" class="back-to-home">&#8592; Back to home</a>
</nav>

{if $article}
    <div class="article-detail">
        <h1>{$article.title}</h1>
        <img src="/images/{$article.image}" alt="{$article.title}">
        <div>Views: {$article.views_count}</div>
        <p>{$article.description}</p>
        <div>{$article.content}</div>
    </div>
{else}
    <p>Article not found.</p>
{/if}

</body>
</html>
