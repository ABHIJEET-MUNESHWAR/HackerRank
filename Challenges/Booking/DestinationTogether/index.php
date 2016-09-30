<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 07/08/16
 * Time: 3:33 PM
 * https://www.hackerrank.com/contests/booking-passions-hacked-backend/challenges/destinations-together-3
 */

function getFactorial($n)
{
    $n = $n % (pow(10, 9) + 7);
    $fact = 1;
    while ($n) {
        $fact = $fact * $n--;
    }
    return $fact;
}

fscanf(STDIN, "%d %d %d", $n, $m, $c);
$val = $n-$c+$m-1;
$ans = getFactorial($val);
echo $ans . PHP_EOL;
?>