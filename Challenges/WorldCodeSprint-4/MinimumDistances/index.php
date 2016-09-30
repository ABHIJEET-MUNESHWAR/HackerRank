<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 26/06/16
 * Time: 1:10 PM
 * https://www.hackerrank.com/contests/june-world-codesprint/challenges/minimum-distances
 */

fscanf(STDIN, "%d", $len);
$arr = array_map('intval', explode(" ", trim(fgets(STDIN))));
$minDiff = 9999;
for ($i = 0; $i < $len; $i++) {
    $elementI = $arr[$i];
    for ($j = $i + 1; $j < $len; $j++) {
        $elementJ = $arr[$j];
        if ($elementI === $elementJ) {
            $diff = $j - $i;
            if($minDiff>$diff) {
                $minDiff = $diff;
            }
        }
    }
}
if($minDiff === 9999) {
    echo -1 . PHP_EOL;
} else {
    echo $minDiff . PHP_EOL;
}

?>