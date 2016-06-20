<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 20/06/16
 * Time: 8:27 AM
 * https://www.hackerrank.com/challenges/cut-the-tree
 */

fscanf(STDIN, "%d", $len);
$arr = array_map('intval', explode(" ", trim(fgets(STDIN))));
for ($i = 0; $i < $len - 1; $i++) {
    fscanf(STDIN, "%d %d", $edgeFrom, $edgeTo);
}
sort($arr);
$sum = array_sum($arr);
$lastElement = $arr[$len - 1];
$sum -= $lastElement;
$minDiff = $sum - $lastElement;
echo $minDiff . PHP_EOL;

?>