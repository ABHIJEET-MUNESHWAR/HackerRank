<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 25/05/16
 * Time: 12:30 AM
 * https://www.hackerrank.com/challenges/matrix-rotation-algo
 */

$m = $n = $r = 0;
$matrix = array();
fscanf(STDIN, "%d %d %d", $m, $n, $r);
for ($i = 0; $i < $m; $i++) {
    $a_temp = rtrim(fgets(STDIN), "\n\r");
    $arr = explode(" ", $a_temp);
    array_walk($arr, 'intval');
    $matrix[] = $arr;
}

$flat = array();
$k = min($m, $n);
for ($i = 0; $i < $k; $i++) {
    if (($i + 1) * 2 > $k) {
        break;
    }
    $ptr = 0;
    // top row ; left to right
    for ($j = $i; $j < $n - $i; $j++) {
        $flat[$ptr++] = $matrix[$i][$j];
    }
    // right column; top to bottom
    for ($j = $i + 1; $j < $m - $i; $j++) {
        $flat[$ptr++] = $matrix[$j][$n - $i - 1];
    }
    // bottom row; right to left
    for ($j = $n - $i - 2; $j >= $i; $j--) {
        $flat[$ptr++] = $matrix[$m - $i - 1][$j];
    }
    // left column; bottom to top
    for ($j = $m - $i - 2; $j > $i; $j--) {
        $flat[$ptr++] = $matrix[$j][$i];
    }
    $start = $r % $ptr;
    if ($start > 0) {
        // top row ; left to right
        for ($j = $i; $j < $n - $i; $j++) {
            $matrix[$i][$j] = $flat[$start];
            $start = ($start + 1) % $ptr;
        }
        // right column; top to bottom
        for ($j = $i + 1; $j < $m - $i; $j++) {
            $matrix[$j][$n - $i - 1] = $flat[$start];
            $start = ($start + 1) % $ptr;
        }
        // bottom row; right to left
        for ($j = $n - $i - 2; $j >= $i; $j--) {
            $matrix[$m - $i - 1][$j] = $flat[$start];
            $start = ($start + 1) % $ptr;
        }
        // left column; bottom to top
        for ($j = $m - $i - 2; $j > $i; $j--) {
            $matrix[$j][$i] = $flat[$start];
            $start = ($start + 1) % $ptr;
        }
    }
}
for($i=0; $i<$m; $i++) {
    for($j=0; $j<$n; $j++) {
        echo $matrix[$i][$j] . " ";
    }
    echo "\n";
}
?>