<?php

use App\View;

require __DIR__ . '/../autoload.php';


// теперь вывод через view
$view = new View();
$view->articles = \App\Models\Article::findAll();
echo $view->display(__DIR__ . '/templates/index.php');
