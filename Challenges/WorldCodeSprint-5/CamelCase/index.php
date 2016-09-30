<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 23/07/16
 * Time: 9:31 PM
 * https://www.hackerrank.com/contests/world-codesprint-5/challenges/camelcase
 */

fscanf(STDIN, "%s", $s);
$arr = str_split($s);
$len = count($arr);
$count = 1;
for ($i = 0; $i < $len; $i++) {
    $val = ord($arr[$i]);
    if(($val<=90) && ($val>=65)) {
        $count++;
    }
}
echo $count. PHP_EOL;

?>