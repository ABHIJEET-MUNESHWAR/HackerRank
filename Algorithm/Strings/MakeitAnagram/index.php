<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 28/05/16
 * Time: 10:27 PM
 * https://www.hackerrank.com/challenges/make-it-anagram
 */

$str1 = rtrim(fgets(STDIN), "\n\r");
$str2 = rtrim(fgets(STDIN), "\n\r");
$alphabets1 = array_fill(0, 26, 0);
$alphabets2 = array_fill(0, 26, 0);
$len1 = strlen($str1);
$len2 = strlen($str2);
for ($i = 0; $i < $len1; $i++) {
    $value = ord($str1[$i]) - 97;
    $alphabets1[$value]++;
}
for ($i = 0; $i < $len2; $i++) {
    $value = ord($str2[$i]) - 97;
    $alphabets2[$value]++;
}
$odds = 0;
for($i=0; $i<26; $i++) {
    $odds += abs($alphabets1[$i]-$alphabets2[$i]);
}
echo $odds . PHP_EOL;
?>