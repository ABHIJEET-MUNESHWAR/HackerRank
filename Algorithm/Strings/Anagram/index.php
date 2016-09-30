<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 26/05/16
 * Time: 11:29 PM
 * https://www.hackerrank.com/challenges/anagram
 */

fscanf(STDIN, "%d", $t);
while($t--) {
    $letter = array_fill(0, 26, 0);
    $str = rtrim(fgets(STDIN), "\n\r");
    $len = strlen($str);
    if($len%2) {
        echo "-1" . "\n";
    } else {
        $count=0;
        for($i=0; $i<intval($len/2); $i++) {
            $value = ord($str[$i])-97;
            $letter[$value]++;
        }
        for($i=intval($len/2); $i<$len; $i++) {
            $value = ord($str[$i])-97;
            $letter[$value]--;
        }
        for($i=0; $i<26; $i++) {
            if($letter[$i]) {
                $count+=abs($letter[$i]);
            }
        }
        echo intval($count/2) . "\n";
    }
}

?>