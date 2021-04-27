<?php

include __DIR__ . '/autoload.php';


$db = new App\Db();
$data = $db->query('SELECT * from news', [], 'App\Models\Article');

echo '<pre>';
var_dump($data);
echo '</pre>';