<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 22/05/16
 * Time: 4:06 PM
 * https://www.hackerrank.com/challenges/extra-long-factorials
 */

function largeMultiply($ans, $n)
{
    $len = count($ans);
    $carry = 0;
    for ($i = 0; $i < $len; $i++) {
        $prod = $n * $ans[$i] + $carry;
        $carry = intval($prod / 10);
        $ans[$i] = ($prod % 10);
    }
    if ($carry) {
        while($carry) {
            $ans[$i++] = $carry%10;
            $carry = intval($carry/10);
        }
    }
    return $ans;
}

fscanf(STDIN, "%d", $n);
if ($n < 2) {
    echo "1\n";
} else {
    $ans = array_reverse(str_split($n));
    while ($n) {
        $n--;
        if ($n > 1) {
            $ans = largeMultiply($ans, $n);
        }
    }
    $ans = array_reverse($ans);
    echo implode("", $ans) . "\n";
}

?>