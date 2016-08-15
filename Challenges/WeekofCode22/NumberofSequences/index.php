<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 09/08/16
 * Time: 8:37 PM
 * https://www.hackerrank.com/contests/w22/challenges/number-of-sequences
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

fscanf(STDIN, "%d", $len);
$maxK = intval($len / 2);
$arr = array_map('intval', explode(" ", trim(fgets(STDIN))));
$mod = pow(10, 9) + 7;
$count = 0;
$answer = 0;
for ($i = 0; $i < $len; $i++) {
    if ($arr[$i] < 1) {
        $count++;
    }
}
if ($count === $len) {
    $answer = getFactorial($count);
} elseif ($count > 1) {
    // Generate sequences
} else {
    // check if nice or not
    // if nice then 1
    // if not nice then 0
    $isNice = true;
    for ($k = 1; $k <= $maxK; $k++) {
        $ki = $k - 1;
        for ($m = $k; $m <= $len; $m += $k) {
            $mi = $m - 1;
            if (($arr[$ki] % $k) !== ($arr[$mi] % $k)) {
                $isNice = false;
                break;
            }
        }
    }
    if ($isNice) {
        $answer = 1;
    } else {
        $answer = 0;
    }
}
$answer = $answer % $mod;
echo $answer . PHP_EOL;
?>