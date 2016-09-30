<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 02/07/16
 * Time: 12:49 PM
 * https://www.hackerrank.com/challenges/coin-change
 */

fscanf(STDIN, "%d %d", $total, $len);
$arr = array_map('intval', explode(" ", trim(fgets(STDIN))));
$dp = array_fill(0, $total + 1, 0);
$dp[0] = 1;
for ($i = 0; $i < $len; $i++) {
    for ($j = $arr[$i]; $j <= $total; $j++) {
        $dp[$j] += $dp[$j - $arr[$i]];
    }
}
echo $dp[$total] . PHP_EOL;
?>