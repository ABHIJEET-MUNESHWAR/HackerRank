<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 03/07/16
 * Time: 10:58 PM
 * https://www.hackerrank.com/challenges/reduced-string
 */

fscanf(STDIN, "%s", $str);
$arr = str_split($str);
$stack = array();
$len = count($arr);
for ($i = 0; $i < $len; $i++) {
    $value = $arr[$i];
    $stackLen = count($stack);
    if($stackLen) {
        if($value===$stack[$stackLen-1]) {
            array_pop($stack);
        } else {
            array_push($stack, $value);
        }
    } else {
        array_push($stack, $value);
    }
}
$stackLen = count($stack);
if($stackLen) {
    echo implode("", $stack);
} else {
    echo "Empty String";
}
echo PHP_EOL;
?>