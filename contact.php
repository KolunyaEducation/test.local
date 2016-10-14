<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>Kolunya Education</title>
    <style>
        body {
            font: 11pt Arial, Helvetica, sans-serif; /* Рубленый шрифт текста */
        }
        h1 {
            font-size: 36px; /* Размер шрифта */
            margin: 0; /* Убираем отступы */
            color: #fc6; /* Цвет текста */
        }
        h2 {
            margin-top: 0; /* Убираем отступ сверху */
        }
        #container {
            width: 800px; /* Ширина слоя */
            margin: 0 auto; /* Выравнивание по центру */

        }
        #header { /* Верхний блок */
            background: #0080c0; /* Цвет фона */
            padding: 10px; /* Поля вокруг текста */
        }
        #sidebar { /* Левая колонка */
            float: left; /* Обтекание справа */
            border: 1px solid #333; /* Параметры рамки вокруг */
            width: 20%; /* Ширина колонки */
            padding: 5px; /* Поля вокруг текста */
            margin: 10px 10px 20px 5px; /* Значения отступов */
        }
        #content { /* Правая колонка */
            margin: 10px 5px 20px 25%; /* Значения отступов */
            padding: 5px; /* Поля вокруг текста */
            border: 1px solid #333; /* Параметры рамки */
        }
        #footer { /* Нижний блок */
            background: #333; /* Цвет фона */
            padding: 5px; /* Поля вокруг текста */
            color: #fff; /* Цвет текста */
            clear: left; /* Отменяем действие float */
        }
    </style>
</head>
<body>
<div id="container">
    <div id="header"><h1>Kolunya Education Company</h1></div>
    <div id="sidebar">
        <p><a href="index.php">Главная</a></p>
        <p><a href="company.php">О Компании</a></p>
        <p><a href="contact.php">Контакты</a></p>
    </div>
    <div id="content">
        <form action='contact.php' method='post'>
            <center><p>Ваше имя: </p></center>
            <center><p><input type='text' name='name' /></p></center>
            <center><p>E-mail: </p></center>
            <center><p><input type='text' name='email' /></p></center>
            <center><p>Сообщение:</p></center>
            <center><p><textarea rows='10' cols='45' name='message' minlength='5'></textarea></p></center>
            <center><input type='submit' name='submit' value='Отправить'></center>

        </form>


    </div>
    <div id="footer">&copy; Kolunya Education</div>
</div>


<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){
        if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message'])){
            echo '<center>Вы не заполнили одно из полей!</center>';
        }
        else {
            if (!preg_match('|^([a-z0-9_\.\-]{1,20})@([a-z0-9\.\-]{1,20})\.([a-z]{2,4})|is', strtolower($_POST['email']))) {
                echo '<center>Вы указали неверно e-mail!</center>';
            }
            else {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $msg = $_POST['message'];
                mail('wmatrosw@gmail.com', 'Сообщение от '.$name, $msg);
                echo "<p align='center'> E-mail отправлен!<br> Имя: $name <br>Адрес отправителя:  $email <br>Текст сообщения: $msg</p>";
            }
        }
    }
}
?>

</body>
</html>
