<?php


namespace App\Models;


use App\Db;

class Article
{
    public $id;
    public $title;
    public $content;

    public function findAll()
    {
        $db = new Db();
        return $db->query('SELECT * FROM news', [], '\App\Models\Article');
    }
}