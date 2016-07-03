<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 01/07/16
 * Time: 11:38 PM
 * https://www.hackerrank.com/contests/w21/challenges/count-ways-1
 */


$lb = 0;
$ub = 0;
$sum = 0;
$mod = pow(10, 9) + 7;
$sum = 0;
$dp = array();
fscanf(STDIN, "%d", $len);
$arr = array_map('intval', explode(" ", trim(fgets(STDIN))));
fscanf(STDIN, "%d %d", $lb, $ub);

function findCombinations($sum, $arr)
{
    $mod = pow(10, 9) + 7;
    if ($sum <= 0) {
        return 0;
    }
    $len = count($arr);
    if ($len === 0) {
        return 0;
    }
    $sum = $sum % $mod;
    $dp = array_fill(0, $sum + 1, 0);
    $dp[0] = 1;
    for ($i = 0; $i < $len; $i++) {
        for ($j = $arr[$i]; $j <= $sum; $j++) {
            $dp[$j] += ($dp[$j - $arr[$i]]) % ($mod);
        }
    }
    return $dp;
}

$dp = findCombinations($ub, $arr);
for ($i = $lb; $i <= $ub; $i++) {
    $sum += ($dp[$i]) % ($mod);
}

$sum%=$mod;

echo $sum . PHP_EOL;

?>