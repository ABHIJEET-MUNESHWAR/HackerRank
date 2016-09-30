<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 27/08/16
 * Time: 9:39 PM
 * https://www.hackerrank.com/contests/world-codesprint-6/challenges/combination-lock
 */

$arr1 = array_map('intval', explode(" ", trim(fgets(STDIN))));
$arr2 = array_map('intval', explode(" ", trim(fgets(STDIN))));
$len = count($arr1);
$sum = 0;
for ($i = 0; $i < $len; $i++) {
    if ($arr1[$i] < $arr2[$i]) {
        $t = $arr2[$i] - $arr1[$i];
        if ($t > 5) {
            $sum += 10 - $t;
        } else {
            $sum += $t;
        }

    } elseif ($arr1[$i] > $arr2[$i]) {
        $t = $arr1[$i] - $arr2[$i];
        if ($t > 5) {
            $sum += 10 - $t;
        } else {
            $sum += $t;
        }
    }
}
echo $sum . PHP_EOL;
?>