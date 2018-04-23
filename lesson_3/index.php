<?php

use App\View;

require __DIR__ . '/autoload.php';


$view = new View();

$view->articles = \App\Models\Article::findAllNews();

//echo count($view);
echo $view->display(__DIR__ . '/templates/index.php');
