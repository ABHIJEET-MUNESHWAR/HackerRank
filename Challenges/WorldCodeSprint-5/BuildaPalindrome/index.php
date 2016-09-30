<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 24/07/16
 * Time: 11:10 AM
 * https://www.hackerrank.com/contests/world-codesprint-5/challenges/challenging-palindromes
 */

fscanf(STDIN, "%d", $t);
while ($t--) {
    fscanf(STDIN, "%s", $s1);
    fscanf(STDIN, "%s", $s2);
    $arr1 = str_split($s1);
    $arr2 = str_split($s2);
    $len1 = count($arr1);
    $len2 = count($arr2);
    $isPalindromePossible = false;
    if ($len1 > $len2) {
        for ($i = 0; $i < $len2; $i++) {
            $char = $arr2[$i];
            if (strpos($s1, $char) !== false) {
                $isPalindromePossible = true;
            }
        }
    } else {
        for ($i = 0; $i < $len1; $i++) {
            $char = $arr1[$i];
            if (strpos($s2, $char) !== false) {
                $isPalindromePossible = true;
            }
        }
    }
    if ($isPalindromePossible) {
        $sortedArr2 = $arr2;
        sort($sortedArr2);
        $positionInS1 = 0;
        $positionInS2 = 0;
        $char = "";
        for ($i = 0; $i < $len2; $i++) {
            $char = $sortedArr2[$i];
            $positionInS1 = strpos($s1, $char);
            $positionInS2 = strpos($s2, $char);
            if ($positionInS1 !== false) {
                break;
            }
        }
        if (substr_count($s1, $char) > 1) {
            $arr2Reverse = array_reverse($arr2);
            $matrix = array();
            for ($i = 0; $i <= $len1; $i++) {
                for ($j = 0; $j <= $len2; $j++) {
                    $matrix[$i][$j] = 0;
                }
            }
            $max = 0;
            $maxI = 0;
            $maxJ = 0;
            for ($i = 1; $i <= $len1; $i++) {
                for ($j = 1; $j <= $len2; $j++) {
                    if ($arr1[$i - 1] === $arr2Reverse[$j - 1]) {
                        $matrix[$i][$j] = $matrix[$i - 1][$j - 1] + 1;
                        if ($max < $matrix[$i][$j]) {
                            $max = $matrix[$i][$j];
                            $maxI = $i;
                            $maxJ = $j;
                        }
                    }
                }
            }
            $output = array();
            $maxI--;
            for ($i = $max, $j = $maxI; $i > 0; $i--, $j--) {
                array_unshift($output, $arr1[$j]);
            }
            $arr1L = $arr1[$j];
            $arr1R = $arr1[$maxI + 1];
            $arr2L = $arr2Reverse[$maxJ - 1];
            $arr2R = $arr2Reverse[$maxJ - 1 - $max];
            echo implode($output);
            echo $arr1R;
            $outputReverse = array_reverse($output);
            echo implode($outputReverse) . PHP_EOL;
        } else {
            if ((ord($arr2[$positionInS2 + 1])) > (ord($arr2[$positionInS2 - 1]))) {
                // traverse s2 from right to left
                $pos1 = $positionInS1;
                $pos2 = $positionInS2;
                $arr2Palindrome = array();
                while (($pos2 >= 0) && ($pos1 < $len1) && ($arr1[$pos1] === $arr2[$pos2])) {
                    echo $arr1[$pos1];
                    array_unshift($arr2Palindrome, $arr1[$pos1]);
                    $pos1++;
                    $pos2--;
                }
                if ($len1 > $len2) {
                    echo $arr1[$pos1];
                } else {
                    echo $arr2[$pos2];
                }
                echo implode($arr2Palindrome) . PHP_EOL;
            } else {
                // traverse s2 from left to right
                $pos1 = $positionInS1;
                $pos2 = $positionInS2;
                $arr1Palindrome = array();
                while (($pos1 >= 0) && ($pos2 < $len2) && ($arr1[$pos1] === $arr2[$pos2])) {
                    echo $arr2[$pos2];
                    array_unshift($arr1Palindrome, $arr2[$pos2]);
                    $pos2++;
                    $pos1--;
                }
                if ($len1 > $len2) {
                    echo $arr1[$pos1];
                } else {
                    echo $arr2[$pos2];
                }
                echo implode($arr1Palindrome) . PHP_EOL;
            }
        }

    } else {
        echo "-1" . PHP_EOL;
    }
}

?>