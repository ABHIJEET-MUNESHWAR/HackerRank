<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 27/08/16
 * Time: 10:00 PM
 * https://www.hackerrank.com/contests/world-codesprint-6/challenges/abbr
 *
 * cDaxbyzc
 * ABC
 *
 * abA
 * AB
 *
 * AaABA
 * AaABa
 * AaABA
 * AaAB
 * AAB
 */

fscanf(STDIN, "%d", $t);
while ($t--) {
    $str1 = trim(fgets(STDIN));
    $str2 = trim(fgets(STDIN));
    $s1 = $str1;
    $s2 = $str2;
    $str1 = strtoupper($str1);
    $str2 = strtoupper($str2);
    $len1 = strlen($str1);
    $len2 = strlen($str2);
    $arr = array();
    for ($i = 0; $i < $len2; $i++) {
        $arr[$i] = strpos($str1, $str2[$i]);
    }
    $isPossible = true;
    $i = 0;
    $j = 0;
    while (($i < $len1) && ($j < $len2)) {
        if ($str1[$i] === $str2[$j]) {
            $str2[$j] = '0';
            $j++;
        }
        $i++;
    }
    for ($i = 0; $i < $len2; $i++) {
        if ($str2[$i] !== '0') {
            $isPossible = false;
            break;
        }
    }
    for ($i = 0; $i < $len1; $i++) {
        $value = ord($s1[$i]);
        if (($value >= 65) && ($value <= 90) && (strpos($s2, $s1[$i]) === false)) {
            $isPossible = false;
            break;
        }
    }
    $frequency1 = array();
    $frequency2 = array();
    for ($i = 0; $i < $len1; $i++) {
        $value = ord($s1[$i]);
        if (isset($frequency1[$value])) {
            $frequency1[$value]++;
        } else {
            $frequency1[$value] = 1;
        }
    }

    for ($i = 0; $i < $len2; $i++) {
        $value = ord($s2[$i]);
        if (isset($frequency2[$value])) {
            $frequency2[$value]++;
        } else {
            $frequency2[$value] = 1;
        }
    }

    foreach ($frequency1 as $key => $value) {
        if (($key >= 65) && ($key <= 90) && ($value > $frequency2[$key])) {
            $isPossible = false;
            break;
        }
    }

    if ($isPossible) {
        echo "YES";
    } else {
        echo "NO";
    }
    echo PHP_EOL;
}

?>