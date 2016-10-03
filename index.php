<?php
$a = $_GET['a'];

$arr = array();
foreach ($a as $value) {
    if(isset($value) && is_numeric($value)) {
        $arr[]=$value;}

}

print_r( $arr);
echo '<br/>';



/*


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
*/