<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 26/05/16
 * Time: 8:43 PM
 * https://www.hackerrank.com/challenges/the-love-letter-mystery
 */
fscanf(STDIN, "%d", $t);
while($t--) {
    $str = rtrim(fgets(STDIN), "\n\r");
    $len = strlen($str);
    $len--;
    $lPointer = $rPointer = $diff = 0;
    if($len%2) {
        // Odd
        $lPointer = intval($len/2);
        $rPointer = $lPointer + 1;
    } else {
        // Even
        $lPointer = intval($len/2)-1;
        $rPointer = $lPointer + 2;
    }
    while($lPointer>=0) {
        $diff += abs(ord($str[$lPointer]) - ord($str[$rPointer]));
        $lPointer--;
        $rPointer++;
    }
    echo $diff . "\n";
}
?>