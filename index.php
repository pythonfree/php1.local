<?php

include __DIR__ . '/autoload.php';

$view = new \App\View();

$view->assign('articles', \App\Models\Article::findAll());


$view->display(__DIR__ . '/templates/index.php');