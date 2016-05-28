<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 15/05/16
 * Time: 8:32 PM
 * https://www.hackerrank.com/challenges/service-lane
 */

$n = 0;
$t = 0;
fscanf(STDIN, "%d %d", $n, $t);
$a_temp = rtrim(fgets(STDIN), "\n\r");
$segmentArr = explode(" ", $a_temp);
array_walk($segmentArr, 'intval');
$arr = array();
while ($t--) {
    $a_temp = rtrim(fgets(STDIN), "\n\r");
    $a = explode(" ", $a_temp);
    array_walk($a, 'intval');
    $arr[] = $a;
}
$len = count($arr);
for ($i = 0; $i < $len; $i++) {
    $a = $arr[$i][0];
    $b = $arr[$i][1];
    $min = 3;
    for ($j = $a; $j <= $b; $j++) {
        if ($segmentArr[$j] < $min) {
            $min = $segmentArr[$j];
        }
    }
    echo $min . "\n";
}

?>