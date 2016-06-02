<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 02/06/16
 * Time: 11:04 PM
 * https://www.hackerrank.com/contests/projecteuler/challenges/euler001
 */

fscanf(STDIN, "%d", $t);
while ($t--) {
    fscanf(STDIN, "%d", $n);
    $sum = 0;
    $three = intval(($n - 1) / 3);
    $five = intval(($n - 1) / 5);
    $fifteen = intval(($n - 1) / 15);
    $sum = 3 * intval($three * ($three + 1) / 2);
    $sum += 5 * intval($five * ($five + 1) / 2);
    $sum -= 15 * intval($fifteen * ($fifteen + 1) / 2);
    echo $sum . PHP_EOL;
}

?>