<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 23/06/16
 * Time: 11:34 PM
 * https://www.hackerrank.com/challenges/flipping-bits
 */

fscanf(STDIN, "%d", $t);
while($t--) {
    fscanf(STDIN, "%d", $n);
    $maxNum = pow(2, 32) - 1;
    $answer = $maxNum-$n;
    echo $answer . PHP_EOL;
}

?>