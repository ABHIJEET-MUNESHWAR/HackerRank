<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 26/06/16
 * Time: 1:35 PM
 * https://www.hackerrank.com/contests/june-world-codesprint/challenges/equal-stacks
 */

$len1 = 0;
$len2 = 0;
$len3 = 0;
fscanf(STDIN, "%d %d %d", $len1, $len2, $len3);
$arr1 = array_map('intval', explode(" ", trim(fgets(STDIN))));
$arr2 = array_map('intval', explode(" ", trim(fgets(STDIN))));
$arr3 = array_map('intval', explode(" ", trim(fgets(STDIN))));
$t1 = array_sum($arr1);
$t2 = array_sum($arr2);
$t3 = array_sum($arr3);
$i = 0;
$j = 0;
$k = 0;
while (1) {
    if (($t1 === $t2) && ($t2 === $t3)) {
        echo $t1 . PHP_EOL;
        break;
    } else {
        if (($t1 >= $t2) && ($t1 >= $t3)) {
            $t1 = $t1 - $arr1[$i++];
        } elseif (($t2 >= $t1) && ($t2 >= $t3)) {
            $t2 = $t2 - $arr2[$j++];
        } elseif (($t3 >= $t1) && ($t3 >= $t2)) {
            $t3 = $t3 - $arr3[$k++];
        }
    }
}
?>