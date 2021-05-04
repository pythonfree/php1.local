<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP-2</title>
</head>
<body>

<?php foreach ($this->articles as $article): ?>
<article>
    <h2>
        <a href="/?ctrl=Article&id=<?=  $article->id; ?>">
            <?= $article->title; ?>
        </a>
    </h2>
    <p><?= $article->content; ?></p>
</article>
<hr>
<?php endforeach; ?>

</body>
</html>