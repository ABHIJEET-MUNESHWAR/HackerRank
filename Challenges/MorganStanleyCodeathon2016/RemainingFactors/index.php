<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 06/08/16
 * Time: 11:08 PM
 * https://www.hackerrank.com/contests/morgan-stanley-2016/challenges/remaining-factors
 */

fscanf(STDIN, "%d", $n);
$temp = $n;
$ans = 1;
$ans1 = 1;
for ($i = 2; ($i * $i) <= $n; $i++) {
    $cnt = 0;
    while (($temp % $i) == 0) {
        $cnt++;
        $temp /= $i;
    }
    $ans = $ans * ($cnt * 2 + 1);
    $ans1 = $ans1 * ($cnt + 1);
}
if ($temp != 1) {
    $ans = $ans * 3;
    $ans1 = $ans1 * 2;
}
$ans = ($ans - 1) / 2;
$ans++;
$ans = $ans - $ans1;
echo $ans . PHP_EOL;