<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 08/06/16
 * Time: 7:18 AM
 * https://www.hackerrank.com/challenges/bigger-is-greater
 */

fscanf(STDIN, "%d", $t);
while ($t--) {
    fscanf(STDIN, "%s", $string);
    $stringArray = str_split($string);
    $numberArray = array();
    $charValueArray = array();
    $outputArray = array();
    foreach ($stringArray as $item) {
        $value = ord($item) - 97;
        $charValueArray[$value] = $item;
    }
    $len = count($stringArray);
    $i = 0;
    foreach ($stringArray as $item) {
        $value = ord($item) - 97;
        $numberArray[$i++] = $value;
    }
    $i = $len - 1;
    while (($len > 1) && ($numberArray[$i - 1] >= $numberArray[$i])) {
        $i--;
    }
    if ($i === 0) {
        echo "no answer" . PHP_EOL;
    } else {
        $leftIndexToBeSwapped = $i - 1;
        $j = $i;
        while (($j < $len) && ($numberArray[$j] >= $numberArray[$leftIndexToBeSwapped])) {
            $j++;
        }
        $j--;
        $temp = $numberArray[$leftIndexToBeSwapped];
        $numberArray[$leftIndexToBeSwapped] = $numberArray[$j];
        $numberArray[$j] = $temp;
        $l = $len - 1;
        if ($i < $len) {
            for ($k = $i; $k < $len, $l > $k; $k++) {
                $temp = $numberArray[$k];
                $numberArray[$k] = $numberArray[$l];
                $numberArray[$l] = $temp;
                $l--;
            }
        }
        for ($i = 0; $i < $len; $i++) {
            $outputArray[$i] = $charValueArray[$numberArray[$i]];
        }
        echo implode("", $outputArray) . PHP_EOL;
    }
}

?>