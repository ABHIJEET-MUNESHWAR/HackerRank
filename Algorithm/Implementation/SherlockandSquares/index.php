<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 14/05/16
 * Time: 11:41 PM
 * https://www.hackerrank.com/challenges/sherlock-and-squares
 */

$n = intval(fgets(STDIN));
$arr = array();
while($n--) {
    $a = 0;
    $b = 0;
    $a_temp = rtrim(fgets(STDIN), "\n\r");
    $arr = explode(" ",$a_temp);
    array_walk($arr,'intval');
    $a = $arr[0];
    $b = $arr[1];
    $count = 0;
    $count = floor(sqrt($b)) - ceil(sqrt($a)) + 1;
    echo $count . "\n";
}

?>