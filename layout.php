<!DOCTYPE html>
<?php
defined('_JEXEC') or die('Ай-яй-яй, сюда нельзя!');
?>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>Kolunya Education</title>
    <link rel="stylesheet" href="mysite.css">
</head>
<body>
<div id="container">
    <div id="header"><h1>Kolunya Education Company</h1></div>
    <div id="sidebar">
        <p><a href='/index.php?page=main'>Главная</a></p>
        <p><a href='/index.php?page=company'>О Компании</a></p>
        <p><a href='/index.php?page=contact'>Контакты</a></p>
        <p><a href='/index.php?page=function'>Функция</a></p>
    </div>
    <div id="content"><?php echo $content;?></div>
    <div id="footer">&copy; Kolunya Education</div>
</div>
</body>
</html>