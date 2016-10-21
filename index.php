<?php

switch ($_GET['page']) {
    case 'main':
        $content= require __DIR__.'\main.php';
        break;
    case 'contact':
        $content= require __DIR__.'\contact.php';
        break;
    case 'company':
        $content= require __DIR__.'\company.php';
        break;
    default:
        $content= require __DIR__.'\main.php';
        break;
}
require_once(__DIR__.'\layout.php');

?>