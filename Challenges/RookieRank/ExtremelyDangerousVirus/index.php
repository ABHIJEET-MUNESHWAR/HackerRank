<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 26/07/16
 * Time: 9:53 PM
 * https://www.hackerrank.com/contests/rookierank/challenges/extremely-dangerous-virus
 */

function power($x, $y, $p)
{
    $res = 1;      // Initialize result

    $x = $x % $p;  // Update x if it is more than or
    // equal to p

    while ($y > 0) {
        // If y is odd, multiply x with result
        if ($y & 1)
            $res = ($res * $x) % $p;

        // y must be even now
        $y = $y >> 1; // y = y/2
        $x = ($x * $x) % $p;
    }
    return $res;
}

$mod = pow(10, 9) + 7;
fscanf(STDIN, "%d %d %d", $a, $b, $t);
$k = intval(($a + $b) / 2);
$answer = power($k, $t, $mod);
$answer = $answer % $mod;
echo $answer . PHP_EOL;

?>