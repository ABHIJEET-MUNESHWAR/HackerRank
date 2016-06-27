<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 27/06/16
 * Time: 9:34 PM
 * https://www.hackerrank.com/contests/w21/challenges/kangaroo
 */

$x1 = 0;
$v1 = 0;
$x2 = 0;
$v2 = 0;
fscanf(STDIN, "%d %d %d %d", $x1, $v1, $x2, $v2);
if ($v1 < $v2) {
    echo "NO" . PHP_EOL;
} else {
    $multiplier = intval(($x2 - $x1) / ($v1 - $v2));
    $ans1 = $multiplier * $v1 + $x1;
    $ans2 = $multiplier * $v2 + $x2;
    if($ans1 === $ans2) {
        echo "YES" . PHP_EOL;
    } else {
        echo "NO" . PHP_EOL;
    }
}

?>