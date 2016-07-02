<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 01/07/16
 * Time: 11:38 PM
 * https://www.hackerrank.com/contests/w21/challenges/count-ways-1
 */

function findCombinations($sum, $arr)
{
    if ($sum <= 0) {
        return 0;
    }
    $len = count($arr);
    if ($len === 0) {
        return 0;
    }
    $dp = array_fill(0, $sum + 1, 0);
    $dp[0] = 1;
    for ($i = 0; $i < $len; $i++) {
        for ($j = $arr[$i]; $j <= $sum; $j++) {
            $dp[$j] += $dp[$j - $arr[$i]];
        }
    }
    return $dp[$sum];
}

fscanf(STDIN, "%d", $len);
$arr = array_map('intval', explode(" ", trim(fgets(STDIN))));
$lb = 0;
$ub = 0;
$sum = 0;
fscanf(STDIN, "%d %d", $lb, $ub);
$sum = 0;

for ($i = $lb; $i <= $ub; $i++) {
    $sum += findCombinations($i, $arr);
}

echo $sum . PHP_EOL;

?>