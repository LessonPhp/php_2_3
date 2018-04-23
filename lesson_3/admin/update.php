<?php

use App\View;

require __DIR__ . '/../autoload.php';


if(isset($_GET['id'])) {
    $id = (int) $_GET['id'];
} else {
    header('Location: /lesson_3/home_work/admin/index.php');
    die;
}


// сделала вывод через view
$view = new View();
$view->article = \App\Models\Article::findById($id);
echo $view->display(__DIR__ . '/templates/update.php');
