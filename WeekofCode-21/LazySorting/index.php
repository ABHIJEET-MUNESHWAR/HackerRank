<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 28/06/16
 * Time: 10:59 PM
 * https://www.hackerrank.com/contests/w21/challenges/lazy-sorting
 */

fscanf(STDIN, "%d", $len);
$arr = array_map('intval', explode(" ", trim(fgets(STDIN))));
echo number_format($len, 6, '.', '') . PHP_EOL;

?>