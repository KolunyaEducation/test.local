<?php
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
    default:
        $content= require __DIR__.'\main.php';
        break;
}
$content= ob_get_contents();
ob_end_clean();

require_once(__DIR__.'\layout.php');
echo $_GET['page'];

?>