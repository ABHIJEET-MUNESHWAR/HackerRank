<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 22/05/16
 * Time: 12:51 PM
 * https://www.hackerrank.com/challenges/acm-icpc-team
 */
$n = $m = 0;
$people = array();
$orBinArr = array();
$orDecArr = array();
fscanf(STDIN, "%d %d", $n, $m);
function countBitsSet($max)
{
    $count = 0;
    $str = str_split($max);
    $len = count($str);
    for($i=0; $i<$len; $i++) {
        if($str[$i] === "1") {
            $count++;
        }
    }
    return $count;
}

for ($i = 0; $i < $n; $i++) {
    $people[] = rtrim(fgets(STDIN), "\n\r");
}
$cnt = 0;
for ($i = 0; $i < $n; $i++) {
    for ($j = $i; $j < $n; $j++) {
        $n1 = str_split($people[$i]);
        $n2 = str_split($people[$j]);
        $str = "";
        for($k=0; $k<$m; $k++) {
            $str = $str . "" . ($n1[$k] | $n2[$k]);
        }
        $orBinArr[$cnt++] = $str;
    }
}

$len = count($orBinArr);
for ($i = 0; $i < $len; $i++) {
    $orDecArr[] = countBitsSet($orBinArr[$i]);
}
$max = max($orDecArr);
$count = 0;
for ($i = 0; $i < $len; $i++) {
    if ($orDecArr[$i] == $max) {
        $count++;
    }
}
echo $max;
echo "\n";
echo $count;
echo "\n";
?>