<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 23/05/16
 * Time: 10:21 PM
 * https://www.hackerrank.com/contests/w20/challenges/non-divisible-subset
 */
$n = $k = 0;
fscanf(STDIN, "%d %d", $n, $k);
$a_temp = rtrim(fgets(STDIN), "\n\r");
$a = explode(" ", $a_temp);
array_walk($a, 'intval');
$len = count($a);
$subset = array();
for ($i = 0; $i < $len; $i++) {
    $divisibleCount = 0;
    for ($j = 0; $j < $len; $j++) {
        if (($a[$i] + $a[$j]) % $k === 0) {
            $divisibleCount++;
        }
    }
    if ($divisibleCount < $len - 1) {
        $subset[] = $a[$i];
    }
}
echo count($subset) . "\n";
?>