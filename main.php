<?php
defined('_JEXEC') or die('Ай-яй-яй, сюда нельзя!');
?>
<h2>Компания обучения Колюни</h2>
<p>так
    теперь следующий этап
<p>1. тексты и обработчики кладешь в разные файлы (для главной будет main.php).</p>
<p>2. скриптом входа на сайт будет index.php</p>
<p>3. страница будет выбираться в зависимости от гет запроса ?page= ...</p>
<p>4. подключение той или иной страницы будет происходить через оператор switch case</p>
<p>5. почитай про include , require, include_once , require_once</p>
<p>6. лейаут (общий шаблон страницы) - вынеси в отдельный файл (это сама страница + меню не считая текста или формы в блоке)</p>
<p>7. запрещаешь вызов файлов страниц напрямую ( пригодится к примеру константа и проверка ее существования if defined
    стили сам писал или стырил?)</p>

<p>8. в меню выдели активную ссылку классом active</p>

<p>9. Для класса active - сделай стилем цвет другой</p>
<p>10. ссылки вида index.php, index.php?page=contact
    в index.php смотришь GET['page']
    дальше swich case оператор
    и include нужного файла
    просто захардкодь
    href="/index.php?page=contact"</p>
