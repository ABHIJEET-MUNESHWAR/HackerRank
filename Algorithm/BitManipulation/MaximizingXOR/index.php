<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 23/06/16
 * Time: 8:28 AM
 * https://www.hackerrank.com/challenges/maximizing-xor
 */

fscanf(STDIN, "%d", $a);
fscanf(STDIN, "%d", $b);
$max = 0;
for ($i = $a; $i <= $b; $i++) {
    for ($j = $a; $j <= $b; $j++) {
        $xor = $i ^ $j;
        if ($xor > $max) {
            $max = $xor;
        }
    }
}
echo $max . PHP_EOL;
?>