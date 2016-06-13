<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 13/06/16
 * Time: 9:43 PM
 * https://www.hackerrank.com/challenges/closest-numbers
 */

fscanf(STDIN, "%d", $t);
$len = $t;
$arr = array();
$minDifference = 999999;
$a_temp = rtrim(fgets(STDIN), "\n\r");
$arr = explode(" ",$a_temp);
array_walk($arr,'intval');
sort($arr);
for($i=1; $i<$len; $i++) {
    $diff = abs($arr[$i]-$arr[$i-1]);
    if($diff<$minDifference) {
        $minDifference = $diff;
    }
}
for($i=1; $i<$len; $i++) {
    $diff = abs($arr[$i]-$arr[$i-1]);
    if($diff===$minDifference) {
        echo $arr[$i-1] . " " . $arr[$i] . " ";
    }
}
echo PHP_EOL;

?>