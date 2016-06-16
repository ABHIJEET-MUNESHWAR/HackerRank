<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 16/06/16
 * Time: 6:39 PM
 * https://www.hackerrank.com/challenges/sherlock-and-pairs
 */

fscanf(STDIN, "%d", $t);
while($t--) {
    fscanf(STDIN, "%d", $len);
    $temp = rtrim(fgets(STDIN), "\n\r");
    $arr = explode(" ", $temp);
    array_walk($arr, 'intval');
    $frequencyArray = array();
    $count = 0;
    foreach ($arr as $key=>$value) {
        $frequencyArray[$value] = 0;
    }
    foreach ($arr as $key=>$value) {
        $frequencyArray[$value]++;
    }
    foreach ($frequencyArray as $item) {
        $count += $item * ($item-1);
    }
    echo $count . PHP_EOL;
}

?>