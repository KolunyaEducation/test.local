<?php
#?a=15&b=10&c=9&d=9&e=4&f=12&g=7&h=19&i=3&j=17
$arr = array($_GET["a"],$_GET["b"],$_GET["c"],$_GET["d"],$_GET["e"],$_GET["f"],$_GET["g"],$_GET["h"],$_GET["i"],$_GET["j"]);
/*
$array[0] = $_GET["a"];
$array[1] = $_GET["b"];
$array[2] = $_GET["c"];
$array[3] = $_GET["d"];
$array[4] = $_GET["e"];
$array[5] = $_GET["f"];
$array[6] = $_GET["g"];
$array[7] = $_GET["h"];
$array[8] = $_GET["i"];
$array[9] = $_GET["j"];


#$a = "hello world, ";
#echo $a . $_GET["name"];
#echo $arr[0];

*/



sort($arr);
/*
for ($w=0; $w<=9; $w++) {
	echo $arr[$w]."<br />";
	
}
*/

print_r($arr);