<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 03/06/16
 * Time: 11:00 PM
 * https://www.hackerrank.com/challenges/icecream-parlor
 */

fscanf(STDIN, "%d", $t);
while ($t--) {
    fscanf(STDIN, "%d", $sum);
    fscanf(STDIN, "%d", $len);
    $a_temp = rtrim(fgets(STDIN), "\n\r");
    $arr = explode(" ", $a_temp);
    array_walk($arr, 'intval');
    $len = sizeof($arr);
    for ($i = 0; $i < $len; $i++) {
        for ($j = $i+1; $j < $len; $j++) {
            $add = $arr[$i] + $arr[$j];
            if ($add == $sum) {
                echo ($i + 1) . " " . ($j + 1) . PHP_EOL;
                break 2;
            }
        }
    }
}

?>