<?php

require __DIR__ . '/../../autoload.php';

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location: /lesson_3/home_work/admin/index.php');
    die;
}

if(isset($_POST['update'])) {
    $title = htmlspecialchars(strip_tags(trim($_POST['title'])));
    $content = htmlspecialchars(strip_tags(trim($_POST['content'])));
    $author_id = $_POST['author_id'];
    $article = \App\Models\Article::findById($id);
    $article->title = $title;
    $article->content = $content;
    $article->author_id = $author_id;
    // исправила
    $article->save();
    header('Location: /lesson_3/home_work/admin/index.php');
    die;
}