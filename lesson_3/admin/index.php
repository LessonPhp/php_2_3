<?php

require __DIR__ . '/../autoload.php';


// теперь вывод через view
$view = new \App\View();
$view->articles = \App\Models\Article::findAll();
echo $view->display(__DIR__ . '/templates/index.php');
