<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 27/05/16
 * Time: 10:33 PM
 * https://www.hackerrank.com/challenges/palindrome-index
 */

$t = stream_get_line(STDIN, 3, PHP_EOL);

while ($t--) {
    $line = stream_get_line(STDIN, 1000000, PHP_EOL);
    echo removed_index($line) . PHP_EOL;
}

function removed_index($line)
{
    // for each character, create a new, temporary string with that character removed
    // then test if palindrome
    $length = strlen($line);
    for ($i = 0; $i < $length; ++$i) {
        // build a new string composed of substrings that exclude the current character
        $substr_left = substr($line, 0, $i);
        $substr_right = substr($line, ($i + 1));
        $str = $substr_left . $substr_right;
        // instead of calling another function to check if this is a palindrome, split the current
        // string into left and right halves, flip the right half then compare both halves with each other
        $str_length = strlen($str);
        $substr_left = substr($str, 0, $str_length / 2);
        if ($str_length % 2 === 0) {
            $substr_right = substr($str, $str_length / 2);
        } else {
            $substr_right = substr($str, $str_length / 2 + 1);
        }
        $substr_right = strrev($substr_right);
        if (strcmp($substr_left, $substr_right) === 0) {
            return $i;
        }
    }
}

?>