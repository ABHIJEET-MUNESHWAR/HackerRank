<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 09/08/16
 * Time: 8:37 PM
 * https://www.hackerrank.com/contests/w22/challenges/subtree-expectation
 */

fscanf(STDIN, "%d", $t);
while ($t--) {
    fscanf(STDIN, "%d", $n);
    $vertices = array();
    $weights = array_map('intval', explode(" ", trim(fgets(STDIN))));
    $arr = array_map('intval', explode(" ", trim(fgets(STDIN))));
    $len = count($arr) - 1;
    for ($i = 0; $i < $n - 1; $i++) {
        $u = 0;
        $v = 0;
        fscanf(STDIN, "%d %d", $u, $v);
        $u--;
        $v--;
        $vertices[$u][$v] = 1;
    }
    $sum = array_sum($arr);
    $answer = $sum/$len;
    echo $answer . PHP_EOL;
}

?>