<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 29/05/16
 * Time: 7:07 PM
 * https://www.hackerrank.com/challenges/sherlock-and-anagrams
 */

function isAnagram ($sub1, $sub2) {
    $isAnagram = true;
    $len1 = strlen($sub1);
    $len2 = strlen($sub2);
    $alphabets = array_fill(0, 26, 0);
    if($len1 != $len2) {
        $isAnagram = false;
    } else{
        for($i=0; $i<$len1; $i++) {
            $value = ord($sub1[$i])-97;
            $alphabets[$value]++;
        }
        for($i=0; $i<$len2; $i++) {
            $value = ord($sub2[$i])-97;
            $alphabets[$value]--;
        }
        for($i=0; $i<26; $i++) {
            if($alphabets[$i]!==0) {
                $isAnagram = false;
                break;
            }
        }
    }
    return $isAnagram;
}

fscanf(STDIN, "%d", $t);
while ($t--) {
    $str = rtrim(fgets(STDIN), "\n\r");
    $len = strlen($str);
    $sub1 = $sub2 = "";
    $count=0;
    for ($i = 1; $i < $len; $i++) {
        for ($j = 0; $j < $len - $i; $j++) {
            $sub1 = substr($str, $j, $i);
            for ($k = $j + 1; $k < $len - $i + 1; $k++) {
                $sub2 = substr($str, $k, $i);
                if(isAnagram($sub1, $sub2)) {
                    $count++;
                }
            }
        }
    }
    echo $count . PHP_EOL;
}

?>