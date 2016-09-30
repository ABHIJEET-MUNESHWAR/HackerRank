<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 23/07/16
 * Time: 9:40 PM
 * https://www.hackerrank.com/contests/world-codesprint-5/challenges/string-construction
 */

fscanf(STDIN, "%d", $t);
while ($t--) {
    fscanf(STDIN, "%s", $s);
    $arr = str_split($s);
    $len = count($arr);
    $frequency = array();
    for ($i = 0; $i < $len; $i++) {
        $val = ord($arr[$i]);
        if (isset($frequency[$val])) {
            $frequency[$val]++;
        } else {
            $frequency[$val] = 1;
        }
    }
    echo count($frequency) . PHP_EOL;
}

?>