<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 09/06/16
 * Time: 10:35 PM
 * https://www.hackerrank.com/challenges/countingsort3
 */

fscanf(STDIN, "%d", $len);
$arr = array_fill(0, $len, 0);
$frequency = array_fill(0, 100, 0);
for($i=0; $i<$len; $i++) {
    fscanf(STDIN, "%d %s", $arr[$i], $s);
}
foreach ($arr as $item) {
    $frequency[$item]++;
}
for($i=1; $i<100; $i++) {
    $frequency[$i] += $frequency[$i-1];
}
for($i=0; $i<100; $i++) {
    echo $frequency[$i] . " ";
}
echo PHP_EOL;

?>