<?php

defined('_JEXEC') or die('Ай-яй-яй, сюда нельзя!');

function check_exponent($num, $i=1, $s= 2, $s1= 2){
    while ($s < $num) {
        $s = $s1 ** $i;
        $i++;
    }
    return $s;
}


?>