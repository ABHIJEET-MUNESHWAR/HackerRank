<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 13/06/16
 * Time: 9:58 PM
 * https://www.hackerrank.com/challenges/find-median
 */

fscanf(STDIN, "%d", $t);
$len = $t;
$arr = array();
$a_temp = rtrim(fgets(STDIN), "\n\r");
$arr = explode(" ",$a_temp);
array_walk($arr,'intval');
sort($arr);
$median = intval($len/2);
echo $arr[$median] . PHP_EOL;

?>