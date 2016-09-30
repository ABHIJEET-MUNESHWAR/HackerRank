<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 06/08/16
 * Time: 9:26 PM
 * https://www.hackerrank.com/contests/morgan-stanley-2016/challenges/jesse-and-profit
 */

fscanf(STDIN, "%d %d", $len, $t);
$arr = array_map('intval', explode(" ", trim(fgets(STDIN))));
$frequency = array();
while ($t--) {
    fscanf(STDIN, "%d", $profit);
    $buyIndex = 0;
    $sellIndex = 0;
    $totalDays = PHP_INT_MAX;
    $currentProfit = 0;
    for ($i = 0; $i < $len; $i++) {
        $value = $arr[$i];
        if (isset($frequency[$value])) {
            $frequency[$value]++;
        } else {
            $frequency[$value] = 1;
        }
    }
    for ($i = 0; $i < $len; $i++) {
        $search = $arr[$i] + $profit;
        if (isset($frequency[$search])) {
            $key = array_search($search, $arr);
            if ($key !== false) {
                if (($key > $i) && (($key - $i) < $totalDays)) {
                    $buyIndex = $i;
                    $sellIndex = $key;
                    $totalDays = $sellIndex - $buyIndex;
                }
            }
        }
    }

    if ($totalDays === PHP_INT_MAX) {
        echo "-1";
    } else {
        $buyIndex++;
        $sellIndex++;
        echo $buyIndex . " " . $sellIndex;
    }
    echo PHP_EOL;
}

?>