<form action='index.php?page=function' method='post'>
    <center><p><input type='text' name='number' /></p></center>
    <center><input type='submit' name='verify' value='Проверить'></center>
</form>


<?php

defined('_JEXEC') or die('Ай-яй-яй, сюда нельзя!');

function functions(){
    if (isset($_POST['verify'])) {
        if (isset($_POST['number'])){
            $num = intval($_POST['number']);
            if ($num == $_POST['number']){
                if ($num > 0) {

                    $i = 1;
                    $s = 2;
                    $s1 = 2;
                    while ($s < $num) {
                        $s = $s1 ** $i;
                        $i++;
                    }
                    echo $s;

                }
                else{
                    echo 'введите положительное число';
                }

            }

        }
    }
}
functions();

?>