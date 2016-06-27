<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 27/06/16
 * Time: 10:04 PM
 * https://www.hackerrank.com/contests/w21/challenges/luck-balance
 */

fscanf(STDIN, "%d %d", $n, $k);
$luckArray = array();
$noOfImportant = 0;
$sumOfLuck = 0;
for ($i = 0; $i < $n; $i++) {
    fscanf(STDIN, "%d %d", $l, $t);
    $sumOfLuck += $l;
    if ($t) {
        $luckArray[] = $l;
        $noOfImportant++;
    }
}
$ignore = $noOfImportant - $k;
sort($luckArray);
for($i=0; $i<$ignore; $i++) {
    $sumOfLuck-=($luckArray[$i]*2);
}
echo $sumOfLuck . PHP_EOL;
?>