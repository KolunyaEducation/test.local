<?php
define( '_JEXEC', 1 );

ob_start();
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
    case 'function':
        $content= require __DIR__.'\functions.php';
        break;
    default:
        $content= require __DIR__.'\main.php';
        break;
}
$content= ob_get_contents();
ob_end_clean();

require_once(__DIR__.'\layout.php');


?>