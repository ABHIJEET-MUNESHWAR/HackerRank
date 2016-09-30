<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 01/07/16
 * Time: 7:12 PM
 * https://www.hackerrank.com/challenges/save-the-prisoner
 */

fscanf(STDIN, "%d", $t);
while ($t--) {
    $sweets = 0;
    $start = 0;
    $last = 0;
    fscanf(STDIN, "%d %d %d", $prisoners, $sweets, $start);
    $last = ($sweets + $start - 1) % $prisoners;
    if(!$last) {
        $last = $prisoners;
    }
    echo $last . PHP_EOL;
}

?>