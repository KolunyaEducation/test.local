<?php
#?a=1&b=10&c=2&d=21&e=3&f=40&g=5&h=51&i=6&j=67
#($_GET["a"],$_GET["b"],$_GET["c"],$_GET["d"],$_GET["e"],$_GET["f"],$_GET["g"],$_GET["h"],$_GET["i"],$_GET["j"]);

$arr=array();

if(isset($_GET['a']) && is_numeric($_GET['a'])) {
    $arr[]=$_GET['a'];}
if(isset($_GET['b']) && is_numeric($_GET['b'])) {
    $arr[]=$_GET['b'];}
if(isset($_GET['c']) && is_numeric($_GET['c'])){
    $arr[]=$_GET['c'];}
if(isset($_GET['d']) && is_numeric($_GET['d'])){
    $arr[]=$_GET['d'];}
if(isset($_GET['e']) && is_numeric($_GET['e'])){
    $arr[]=$_GET['e'];}
if(isset($_GET['f']) && is_numeric($_GET['f'])){
    $arr[]=$_GET['f'];}
if(isset($_GET['g']) && is_numeric($_GET['g'])){
    $arr[]=$_GET['g'];}
if(isset($_GET['h']) && is_numeric($_GET['h'])){
    $arr[]=$_GET['h'];}
if(isset($_GET['i']) && is_numeric($_GET['i'])){
    $arr[]=$_GET['i'];}
if(isset($_GET['j']) && is_numeric($_GET['j'])){
    $arr[]=$_GET['j'];}



$arr1 = $arr;



$s = count($arr)-1;
for($i=$s; $i>=0; $i--) {
    for($j=0; $j<=($i-1); $j++)
        if ($arr[$j]>$arr[$j+1]) {
            $k = $arr[$j];
            $arr[$j]=$arr[$j+1];
            $arr[$j+1] = $k;
        }
}

print_r($arr);
echo '<br/>';
sort($arr1);
print_r($arr1);
echo '<br/>';
