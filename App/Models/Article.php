<?php


namespace App\Models;


use App\Db;

class Article
{
    public static $table = 'news';

    public $id;
    public $title;
    public $content;

    public static function findAll()
    {
        $db = new Db();
        return $db->query('SELECT * FROM ' . Article::$table, [], '\App\Models\Article');
    }
}