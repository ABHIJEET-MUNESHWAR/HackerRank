<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 23/05/16
 * Time: 10:08 PM
 * https://www.hackerrank.com/contests/w20/challenges/divisible-sum-pairs
 */

fscanf(STDIN, "%d %d", $n, $k);
$a_temp = fgets(STDIN);
$a = explode(" ", $a_temp);
array_walk($a, 'intval');
$len = count($a);
$count = 0;
for ($i = 0; $i < $len; $i++) {
    for ($j = $i + 1; $j < $len; $j++) {
        if (($a[$i] + $a[$j]) % $k === 0) {
            $count++;
        }
    }
}
echo $count . "\n";
?>