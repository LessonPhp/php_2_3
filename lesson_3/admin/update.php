<?php

require __DIR__ . '/../autoload.php';

// сделала вывод через view
$view = new \App\View();
echo $view->display(__DIR__ . '/templates/update.php');
