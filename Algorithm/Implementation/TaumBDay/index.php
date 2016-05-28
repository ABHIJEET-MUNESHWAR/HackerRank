<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 23/05/16
 * Time: 12:07 AM
 * https://www.hackerrank.com/challenges/taum-and-bday
 */

fscanf(STDIN, "%d", $t);
$b = $w = $x = $y = $z = 0;
$cost = 0;
while ($t--) {
    fscanf(STDIN, "%ld %ld", $b, $w);
    fscanf(STDIN, "%ld %ld %ld", $x, $y, $z);
    $cost = 0;
    $c1 = $b * $x + $w * $y;
    $c2 = ($z + $y) * $b + $y * $w;
    $c3 = $x * $b + ($x + $z) * $w;
    $cost = min($c1, $c2, $c3);
    echo $cost . "\n";
}

?>