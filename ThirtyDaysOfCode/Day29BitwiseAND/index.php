<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 16/05/16
 * Time: 10:41 PM
 * https://www.hackerrank.com/challenges/30-bitwise-and
 */

fscanf(STDIN, "%d", $t);
$arr = array();
while ($t--) {
    $a_temp = rtrim(fgets(STDIN), "\n\r");
    $a = explode(" ", $a_temp);
    array_walk($a, 'intval');
    $arr[] = $a;
}
$len = count($arr);
for ($i = 0; $i < $len; $i++) {
    $n = $arr[$i][0];
    $k = $arr[$i][1];
    $ans = (($k|($k-1))>$n) ? ($k-2) : ($k-1);
    echo $ans . "\n";
}

?>