<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 26/07/16
 * Time: 9:35 PM
 * https://www.hackerrank.com/contests/rookierank/challenges/counting-valleys
 */

fscanf(STDIN, "%d", $len);
fscanf(STDIN, "%s", $s);
$arr = array();
$arr = str_split($s);
$ups = 0;
$downs = 0;
$total = 0;
$diff = 0;
$previousDiff = 0;
for ($i = 0; $i < $len; $i++) {
    $current = $arr[$i];
    if ($current === "U") {
        $ups++;
    } else {
        $downs++;
    }
    $previousDiff = $diff;
    $diff = ($ups - $downs);
    if (($diff === 0) && ($previousDiff < 0)) {
        $total++;
    }
}
echo $total . PHP_EOL;
?>