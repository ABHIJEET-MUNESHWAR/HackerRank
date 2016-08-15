<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 09/08/16
 * Time: 8:37 PM
 * https://www.hackerrank.com/contests/w22/challenges/polygon-making
 */

fscanf(STDIN, "%d", $len);
$arr = array_map('intval', explode(" ", trim(fgets(STDIN))));
$addition = array_sum($arr);
$division = intval($addition / 2);
$count = 0;
if ($len === 1) {
    echo "2";
} elseif (($len === 2) && ($arr[0] === $arr[1])) {
    echo "2";
} elseif (($len === 2) && ($arr[0] !== $arr[1])) {
    echo "1";
} else {
    $max = max($arr);
    $rem = array_sum($arr) - $max;
    if ($max >= $rem) {
        echo 1;
    } else {
        echo 0;
    }
}
echo PHP_EOL;
?>