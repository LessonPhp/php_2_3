<?php

require __DIR__ . '/../../autoload.php';

if(isset($_POST['add'])) {
    $title = htmlspecialchars(strip_tags(trim($_POST['title'])));
    $content = htmlspecialchars(strip_tags(trim($_POST['content'])));
    $author_id = $_POST['author_id'];
    $article = new \App\Models\Article();
    $article->title = $title;
    $article->content = $content;
    $article->author_id = $author_id;
    // исправила
    $article->save();
    header('Location: /lesson_3/home_work/admin/index.php');

}