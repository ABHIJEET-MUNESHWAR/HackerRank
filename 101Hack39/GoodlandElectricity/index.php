<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 12/07/16
 * Time: 10:15 PM
 * https://www.hackerrank.com/contests/101hack39/challenges/pylons
 */

fscanf(STDIN, "%d %d", $len, $k);
$arr = array_map('intval', explode(" ", trim(fgets(STDIN))));
$zeros = 0;
$once = 0;
$zeroArray = array_fill(0, $len, 0);
$i = 1;
if($arr[0]) {
    $i = 0;
}
$count = 0;
$isElectrified = true;
$k--;
while (1) {
    if (($arr[$i] === 1) && ($arr[$i + 1] === 0)) {
        $count++;
        $lb = $i - $k;
        if ($lb < 0) {
            $lb = 0;
        }
        $ub = $i + $k;
        if ($ub > $len - 1) {
            $ub = $len - 1;
        }
        for ($j = $lb; $j <= $ub; $j++) {
            $zeroArray[$j] = 1;
        }
        $i = $j;
        if ($i > $len - 1) {
            break;
        }
    }
    if (($arr[$i - 1] === 0) && ($arr[$i] === 1)) {
        $count++;
        $lb = $i - $k;
        if ($lb < 0) {
            $lb = 0;
        }
        $ub = $i + $k;
        if ($ub > $len - 1) {
            $ub = $len - 1;
        }
        for ($j = $lb; $j <= $ub; $j++) {
            $zeroArray[$j] = 1;
        }
        $i = $j;
        if ($i > $len - 1) {
            break;
        }
    }
    if ($i >= $len - 1) {
        break;
    }
    $i++;
}
if (array_search(0, $zeroArray) === false) {
    echo $count . PHP_EOL;
} else {
    echo "-1" . PHP_EOL;
}

?>