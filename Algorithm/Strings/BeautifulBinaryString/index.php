<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 05/07/16
 * Time: 12:03 AM
 * https://www.hackerrank.com/challenges/beautiful-binary-string
 */

fscanf(STDIN, "%d", $len);
fscanf(STDIN, "%s", $str);
echo substr_count($str, "010") . PHP_EOL;

?>