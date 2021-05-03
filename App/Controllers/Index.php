<?php


namespace App\Controllers;


use App\Models\Article;
use App\View;

class Index
{
    public function action()
    {
        $view = new View();
        $view->articles = Article::findAll();
        $view->display(__DIR__ . '/../../templates/index.php');
    }
}