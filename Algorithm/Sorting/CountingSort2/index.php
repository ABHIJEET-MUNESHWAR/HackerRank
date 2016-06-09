<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 09/06/16
 * Time: 8:13 AM
 * https://www.hackerrank.com/challenges/countingsort2
 */

fscanf(STDIN, "%d", $len);
$temp = rtrim(fgets(STDIN), "\n\r");
$arr = explode(" ", $temp);
array_walk($arr, 'intval');
$frequency = array_fill(0, 100, 0);
$output = array();
foreach ($arr as $item) {
    $frequency[$item]++;
}
for($i=0; $i<100; $i++) {
    for($j=0; $j<$frequency[$i]; $j++) {
        echo $i . " ";
    }
}
echo PHP_EOL;
?>