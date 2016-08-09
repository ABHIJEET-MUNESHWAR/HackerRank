<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 09/08/16
 * Time: 8:37 PM
 * https://www.hackerrank.com/contests/w22/challenges/polygon-making
 */

fscanf(STDIN, "%d", $len);
$arr = array_map('intval', explode(" ", trim(fgets(STDIN))));
$addition = array_sum($arr);
$divisionision = intval($addition / 2);
$count = 0;
for ($i = 0; $i < $len; $i++) {
    if ($arr[$i] >= $divisionision) {
        $count++;
    }
}
echo $count . PHP_EOL;
?>