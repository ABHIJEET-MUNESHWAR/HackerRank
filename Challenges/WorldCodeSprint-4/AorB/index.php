<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 26/06/16
 * Time: 3:08 PM
 * https://www.hackerrank.com/contests/june-world-codesprint/challenges/aorbcd
 */

fscanf(STDIN, "%d", $t);
while($t--) {
    fscanf(STDIN, "%d", $k);
    fscanf(STDIN, "%s", $a);
    fscanf(STDIN, "%s", $b);
    fscanf(STDIN, "%s", $c);
    $a = hex2bin($a);
    $b = hex2bin($b);
    $c = hex2bin($c);
}

?>