<?php
#?a=1&b=10&c=2&d=21&e=3&f=40&g=5&h=51&i=6&j=67
$arr = array($_GET["a"],$_GET["b"],$_GET["c"],$_GET["d"],$_GET["e"],$_GET["f"],$_GET["g"],$_GET["h"],$_GET["i"],$_GET["j"]);
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
echo "\n";
sort($arr1);
print_r($arr1);