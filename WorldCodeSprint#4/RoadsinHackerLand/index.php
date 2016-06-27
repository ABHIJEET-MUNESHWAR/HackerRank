<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 26/06/16
 * Time: 5:06 PM
 * https://www.hackerrank.com/contests/june-world-codesprint/challenges/johnland
 */
$cities = 0;
$roads = 0;
fscanf(STDIN, "%d %d", $cities, $roads);
$matrix = array();
for ($i = 0; $i < $cities; $i++) {
    for ($j = 0; $j < $cities; $j++) {
        if ($i === $j) {
            $matrix[$i][$j] = 0;
        } else {
            $matrix[$i][$j] = 9999999;
        }
    }
}
for ($i = 0; $i < $roads; $i++) {
    $u = 0;
    $v = 0;
    $d = 0;
    fscanf(STDIN, "%d %d %d", $u, $v, $d);
    $distance = pow(2, $d);
    $u--;
    $v--;
    $matrix[$u][$v] = $distance;
    $matrix[$v][$u] = $distance;
}
for ($k = 0; $k < $cities; $k++) {
    for ($i = 0; $i < $cities; $i++) {
        for ($j = 0; $j < $cities; $j++) {
            if ($matrix[$i][$j] > ($matrix[$i][$k] + $matrix[$k][$j])) {
                $matrix[$i][$j] = $matrix[$i][$k] + $matrix[$k][$j];
            }
        }
    }
}
$sum = 0;
for($i=1; $i<$cities; $i++) {
    for($j=0; $j<$i; $j++) {
        $sum += $matrix[$i][$j];
    }
}

echo decbin($sum) . PHP_EOL;
?>