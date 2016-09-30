<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 14/05/16
 * Time: 6:47 PM
 * https://www.hackerrank.com/challenges/utopian-tree
 */
$n = intval(fgets(STDIN));
$arr = array();
for ($i = 0; $i < $n; $i++) {
    $arr[] = intval(fgets(STDIN));
}

for ($l = 0; $l < $n; $l++) {
    $cycles = $arr[$l];
    $height = 1;
    for ($i = 1; $i <= $cycles; $i++) {
        if ($i % 2) {
            $height *= 2;
        } else {
            $height++;
        }
    }
    echo $height . "\n";
}
?>