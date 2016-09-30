<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 27/07/16
 * Time: 2:07 AM
 * https://www.hackerrank.com/contests/rookierank/challenges/magic-square-forming
 */

$matrix = array();
$diff0 = 0;
$diff1 = 0;
$diff2 = 0;
$diff3 = 0;
$diff4 = 0;
$diff5 = 0;
$diff6 = 0;
$diff7 = 0;

for ($i = 0; $i < 3; $i++) {
    $matrix[$i] = array_map('intval', explode(" ", trim(fgets(STDIN))));
}
$matrix0 = array(array(8, 3, 4), array(1, 5, 9), array(6, 7, 2));
$matrix1 = array(array(6, 7, 2), array(1, 5, 9), array(8, 3, 4));
$matrix2 = array(array(8, 1, 6), array(3, 5, 7), array(4, 9, 2));
$matrix3 = array(array(6, 1, 8), array(7, 5, 3), array(2, 9, 4));
$matrix4 = array(array(4, 9, 2), array(3, 5, 7), array(8, 1, 6));
$matrix5 = array(array(2, 9, 4), array(7, 5, 3), array(6, 1, 8));
$matrix6 = array(array(4, 3, 8), array(9, 5, 1), array(2, 7, 6));
$matrix7 = array(array(2, 7, 6), array(9, 5, 1), array(4, 3, 8));

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $diff0 += abs($matrix[$i][$j] - $matrix0[$i][$j]);
    }
}

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $diff1 += abs($matrix[$i][$j] - $matrix1[$i][$j]);
    }
}

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $diff2 += abs($matrix[$i][$j] - $matrix2[$i][$j]);
    }
}

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $diff3 += abs($matrix[$i][$j] - $matrix3[$i][$j]);
    }
}

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $diff4 += abs($matrix[$i][$j] - $matrix4[$i][$j]);
    }
}

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $diff5 += abs($matrix[$i][$j] - $matrix5[$i][$j]);
    }
}

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $diff6 += abs($matrix[$i][$j] - $matrix6[$i][$j]);
    }
}

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $diff7 += abs($matrix[$i][$j] - $matrix7[$i][$j]);
    }
}

$min = min($diff0, $diff1, $diff2, $diff3, $diff4, $diff5, $diff6, $diff7);
echo $min . PHP_EOL;
?>