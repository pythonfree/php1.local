<?php

include __DIR__ . '/autoload.php';


$data = \App\Models\Article::findAll();


echo '<pre>';
var_dump($data);
echo '</pre>';