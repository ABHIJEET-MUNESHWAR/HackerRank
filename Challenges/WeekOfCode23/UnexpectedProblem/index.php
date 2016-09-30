<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 16/09/16
 * Time: 7:58 AM
 * https://www.hackerrank.com/contests/w23/challenges/commuting-strings
 */

function getrepeatedstring($string) {
    if (strlen($string)<2) return $string;
    for($i = 1; $i<strlen($string); $i++) {
        if (substr(str_repeat(substr($string, 0, $i),strlen($string)/$i+1), 0, strlen($string))==$string)
            return substr($string, 0, $i);
    }
    return $string;
}

$s = trim(fgets(STDIN));
fscanf(STDIN, "%d", $m);
$s1 = getrepeatedstring($s);
$l1 = strlen($s1);
$ans = intval($m/$l1);
$mod = 1000 * 1000 * 1000 + 7;
$ans = $ans % $mod;
echo $ans . PHP_EOL;

?>