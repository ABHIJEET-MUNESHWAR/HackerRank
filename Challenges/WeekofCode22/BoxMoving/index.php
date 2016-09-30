<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 10/08/16
 * Time: 8:53 PM
 * https://www.hackerrank.com/contests/w22/challenges/box-moving
 */

fscanf(STDIN, "%d", $len);
$arr1 = array_map('intval', explode(" ", trim(fgets(STDIN))));
$arr2 = array_map('intval', explode(" ", trim(fgets(STDIN))));
$sum1 = array_sum($arr1);
$sum2 = array_sum($arr2);
if ($sum1 !== $sum2) {
    echo "-1" . PHP_EOL;
} else {
    $count = 0;
    $i = 0;
    $j = $len - 1;
    sort($arr1);
    sort($arr2);
    for ($i = 0; $i < $len; $i++) {
        if ($arr2[$i] > $arr1[$i]) {
            $count += $arr2[$i] - $arr1[$i];
        }
    }
    echo $count . PHP_EOL;
}
?>