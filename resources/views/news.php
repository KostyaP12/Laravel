<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News</title>
</head>
<body>
<?php include_once "menu.php"; ?>
<br>
<?php include_once "categories.php"; ?>
<br>
<h2>Новости</h2>
<?php foreach ($allNews as $news): ?>
<a href="<?=route('oneNews', $news->id)?>"><?=$news->title?></a>
<div><?=$news->text?></div>
<br>
<?php endforeach;?>
</body>
</html>