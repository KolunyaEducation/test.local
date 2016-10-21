<?php

$t=file_get_contents('layout.php');
echo $t;



switch ($_GET['page']) {
    case 'main':
        require __DIR__.'\main.php';
        break;
    case 'contact':
        require __DIR__.'\contact.php';
        break;
    case 'company':
        require __DIR__.'\company.php';
        break;
    default:
        $content= require __DIR__.'\main.php';
        break;
}

/*


include 'main.php';


if (isset($_get['page'])) {
    switch ($_GET['page']) {
        case 'main':
            require 'main.php';
            break;
        case 'contact':
            require 'contact.php';
            break;
        case 'company':
            require 'company.php';
            break;
    }
}
*/

?>