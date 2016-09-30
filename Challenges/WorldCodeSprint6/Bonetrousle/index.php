<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 27/08/16
 * Time: 11:34 PM
 * https://www.hackerrank.com/contests/world-codesprint-6/challenges/bonetrousle
 */

fscanf(STDIN, "%d", $t);
while ($t--) {
    $n = 0;
    $k = 0;
    $b = 0;
    fscanf(STDIN, "%d %d %d", $n, $k, $b);
    if ($n > ($k * $b)) {
        echo -1;
    } else {
        $sum = 0;
        for ($i = 0; $i < $b - 1; $i++) {
            $sum += ($i + 1);
            echo ($i + 1) . " ";
        }
        echo($n - $sum);
    }
    echo PHP_EOL;
}

?>