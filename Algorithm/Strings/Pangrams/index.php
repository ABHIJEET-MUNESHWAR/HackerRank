<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 25/05/16
 * Time: 11:21 PM
 * https://www.hackerrank.com/challenges/pangrams
 */

$str = rtrim(fgets(STDIN), "\n\r");
$big = array_fill(0, 26, 0);
$small = array_fill(0, 26, 0);
$len = strlen($str);
$isPangram = "pangram";
for ($i = 0; $i < $len; $i++) {
    $c = $str[$i];
    if ($c >= 'A' && $c <= 'Z') {
        $diff = ord($c) - ord('A');
        $big[$diff] = 1;
    } elseif ($c >= 'a' && $c <= 'z') {
        $diff = ord($c) - ord('a');
        $small[$diff] = 1;
    }
}
for ($i = 0; $i < 26; $i++) {
    if (!($big[$i] || $small[$i])) {
        $isPangram = "not pangram";
        break;
    }
}
echo $isPangram . "\n";
?>