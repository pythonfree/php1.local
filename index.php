<?php

include __DIR__ . '/autoload.php';




$article = new \App\Models\Article();
$article->title = 'Заголовок статьи';
$article->content = 'Текст статьи';
$article->insert();

var_dump($article);

//$data = \App\Models\Article::findAll();


//echo '<pre>';
//var_dump($data);
//echo '</pre>';