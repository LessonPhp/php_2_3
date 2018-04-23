<?php

use App\View;

require __DIR__ . '/../autoload.php';

// сделала вывод через view
$view = new View();
echo $view->display(__DIR__ . '/templates/add.php');