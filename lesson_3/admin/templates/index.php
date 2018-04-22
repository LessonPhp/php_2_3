<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная страница админ-панели</title>
</head>
<body>
    <h3 style="text-align: center;">Админ-панель</h3>
    <a href="/lesson_3/home_work/admin/add.php"><p style="text-align: center;">Добавить новость</p></a><br>
    <?php
    foreach ($this->articles as $article) { ?>
        <h1 style="text-align: center;"><?php echo $article->title; ?></h1>
        <p style="text-align: center;"><?php echo $article->content; ?></p>
        <a href="/lesson_3/home_work/admin/update.php?id=<?php echo $article->id; ?>">
            <p style="text-align: center;">Обновить новость</p></a><br>
        <a href="/lesson_3/home_work/admin/active/delete.php?id=<?php echo $article->id; ?>">
            <p style="text-align: center;">Удалить новость</p></a><br>
        <?php
    }
    ?>
    <a href="/lesson_3/home_work/index.php"><p style="text-align: center;">Назад на главную</p></a>
</body>
</html>
