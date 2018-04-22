<?php

require __DIR__ . '/../../autoload.php';

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $article = \App\Models\Article::findById($id);
} else {
    header('Location: /lesson_3/home_work/index.php');
    die;
}


// переделала
$article->delete();
header('Location: /lesson_3/home_work/admin/index.php');
die;