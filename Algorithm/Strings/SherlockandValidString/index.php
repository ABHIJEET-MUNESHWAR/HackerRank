<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 01/06/16
 * Time: 9:32 PM
 * https://www.hackerrank.com/challenges/sherlock-and-valid-string
 */
$str = rtrim(fgets(STDIN), "\n\r");
$alphabets = array();
$numberOfChars = array();
$len = strlen($str);
for ($i = 0; $i < $len; $i++) {
    $value = ord($str[$i]) - 97;
    $alphabets[$value] = 0;
}
for ($i = 0; $i < $len; $i++) {
    $value = ord($str[$i]) - 97;
    $alphabets[$value]++;
}
$min = min($alphabets);
$max = max($alphabets);
$once = 0;
foreach ($alphabets as $key => $value) {
    if ($value === 1) {
        $once++;
    }
    $numberOfChars[$value] = 0;
}
foreach ($alphabets as $key => $value) {
    $numberOfChars[$value]++;
}
$lenOfFrequencyArray = count($numberOfChars);
if ($lenOfFrequencyArray === 1) {
    echo "YES" . PHP_EOL;
} elseif (($lenOfFrequencyArray === 2) && ( ($once === 1) || (in_array(1, $numberOfChars))) ) {
    echo "YES" . PHP_EOL;
} else {
    echo "NO" . PHP_EOL;
}
?>