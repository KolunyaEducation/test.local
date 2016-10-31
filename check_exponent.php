<form action='index.php?page=check_exponent' method='post'>
    <center><p><input type='text' name='number' /></p></center>
    <center><input type='submit' name='verify' value='Проверить'></center>
</form>


<?php
defined('_JEXEC') or die('Ай-яй-яй, сюда нельзя!');

if (isset($_POST['verify'])){
    if (isset($_POST['number'])){
        $num = intval($_POST['number']);
        if ($num == $_POST['number']){
            if ($num > 0){
                require_once 'functions.php';
                echo check_exponent($num);
            }
            else {
                echo 'enter number';
            }

        }
    }
}


?>