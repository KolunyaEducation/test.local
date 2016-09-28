<?php
#?a=15&b=10&c=9&d=9&e=4&f=12&g=7&h=19&i=3&j=17
$arr = array($_GET["a"],$_GET["b"],$_GET["c"],$_GET["d"],$_GET["e"],$_GET["f"],$_GET["g"],$_GET["h"],$_GET["i"],$_GET["j"]);

#sort($arr);

#print_r($arr);
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
