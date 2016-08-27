<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 18/08/16
 * Time: 5:17 PM
 */
/*
6
100100
001010
000000
110000
111000
010100

100100
001110
000000
110000
111000
111100
 */


fscanf(STDIN, "%d", $size);
$bitmap = array();
for ($i = 0; $i < $size; $i++) {
    $temp = str_split(trim(fgets(STDIN)));
    $bitmap[$i] = array_map("intval", $temp);
}
for ($i = 0; $i < $size; $i++) {
    for ($j = 0; $j < $size; $j++) {
        $current = $bitmap[$i][$j];
        if (isset($bitmap[$i + 1][$j])) {
            $top = $bitmap[$i + 1][$j];
        } else {
            $top = 0;
        }
        if (isset($bitmap[$i - 1][$j])) {
            $bottom = $bitmap[$i - 1][$j];
        } else {
            $bottom = 0;
        }
        if(isset($bitmap[$i][$j + 1])) {
            $right = $bitmap[$i][$j + 1];
        } else {
            $right = 0;
        }
        if(isset($bitmap[$i][$j + 1])) {
            $left = $bitmap[$i][$j + 1];
        } else {
            $left = 0;
        }
        if (($current === 0) && ($right === 1) && ($left === 1) && ($bottom || $top)) {
            $bitmap[$i][$j] = 1;
        }
    }
}
var_dump($bitmap);
?>