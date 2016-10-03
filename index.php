<?php
$a = $_GET['a'];

$arr = array();
foreach ($a as $value) {
    if(isset($value) && is_numeric($value)) {
        $arr[]=$value;
    }

}
# сортировка по увеличению значения

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
sort($arr);
print_r($arr);
echo '<br/>';


# сортировка по уменьшению значения

rsort($arr);
print_r($arr);
echo '<br/>';

for($i=$s; $i>=0; $i--) {
    for($j=0; $j<=($i-1); $j++)
        if ($arr[$j]<$arr[$j+1]) {
            $k = $arr[$j];
            $arr[$j]=$arr[$j+1];
            $arr[$j+1] = $k;
        }
}

print_r($arr);
echo '<br/>';
