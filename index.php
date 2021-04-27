<?php

include __DIR__ . '/autoload.php';


$artile = new \App\Models\Article();
$data = $artile->findAll();


echo '<pre>';
var_dump($data);
echo '</pre>';