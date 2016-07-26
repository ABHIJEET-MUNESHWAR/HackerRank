<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 20/06/16
 * Time: 11:03 PM
 * https://www.hackerrank.com/contests/101hack38/challenges/points-on-a-line
 */

fscanf(STDIN, "%d", $t);
$xFrequency = array();
$yFrequency = array();
$len = $t;
while($t--) {
    fscanf(STDIN, "%d %d", $x, $y);
    if(!isset($xFrequency[$x])) {
        $xFrequency[$x] = 0;
    } else {
        $xFrequency[$x]++;
    }
    if(!isset($yFrequency[$y])) {
        $yFrequency[$y] = 0;
    } else {
        $yFrequency[$y]++;
    }
}
if((count($xFrequency)>1)&&(count($yFrequency)>1)) {
    echo "NO" . PHP_EOL;
} else {
    echo "YES" . PHP_EOL;
}
?>