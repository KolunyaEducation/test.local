<form action='index.php' method='post'>
    <center><p>Ваше имя: </p></center>
    <center><p><input type='text' name='name' /></p></center>
    <center><p>E-mail: </p></center>
    <center><p><input type='text' name='email' /></p></center>
    <center><p>Сообщение:</p></center>
    <center><p><textarea rows='10' cols='45' name='message' minlength='5'></textarea></p></center>
    <center><input type='submit' name='submit' value='Отправить'></center>
</form>

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
