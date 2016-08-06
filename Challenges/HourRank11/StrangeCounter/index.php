<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 02/08/16
 * Time: 10:00 PM
 * https://www.hackerrank.com/contests/hourrank-11/challenges/strange-code
 */

fscanf(STDIN, "%d", $t);
$s = 1;
$init = 3;
$ans = 0;
while (1) {
    if ($t === $s) {
        $ans = $s + 2;
        break;
    } elseif ($t < $s + $init) {
        $ans = $s + 2 - ($t - $s);
        break;
    }
    $s = $s + $init;
    $init *= 2;
}
echo $ans . PHP_EOL;

?>