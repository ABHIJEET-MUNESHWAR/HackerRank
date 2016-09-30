<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 23/07/16
 * Time: 9:49 PM
 * https://www.hackerrank.com/contests/world-codesprint-5/challenges/short-palindrome
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

function ncr($n, $r)
{
    $answer = getFactorial($n) / (getFactorial($r) * getFactorial($n - $r));
    return $answer;
}

fscanf(STDIN, "%s", $s);
$arr = str_split($s);
$len = count($arr);
$frequency = array();
for ($i = 0; $i < $len; $i++) {
    $val = ord($arr[$i]) - 97;
    if (isset($frequency[$val])) {
        $frequency[$val]++;
    } else {
        $frequency[$val] = 1;
    }
}
$mod = pow(10, 9) + 7;
$answer = 0;
foreach ($frequency as $key => $value) {
    if ($value > 1) {
        $answer += ncr($value, 4);
    }
}

$answer = $answer % $mod;
echo $answer . PHP_EOL;

?>