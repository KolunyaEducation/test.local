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
    <h2>Компания обучения Колюни</h2>
    <p>И вышел Колюня на тропу учения. И был он неопытен и глуп. Старается и усердствует
    Колюня. А помощь ему оказывает несусветную на этом темном пути великий и могучий Клауд</p>
    <p>Ведет он его и путь правдный указывает! А ежели Колюня попробует свернуть с пути этого, грубой силушкой
    повернет его в нужное направление</p>
</div>
<div id="footer">&copy; Kolunya Education</div>
</div>
</body>
</html>