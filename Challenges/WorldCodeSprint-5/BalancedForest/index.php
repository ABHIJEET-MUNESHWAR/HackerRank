<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 24/07/16
 * Time: 10:54 AM
 * https://www.hackerrank.com/contests/world-codesprint-5/challenges/balanced-forest
 */

fscanf(STDIN, "%d", $t);
while ($t--) {
    fscanf(STDIN, "%d", $nodes);
    $arr = array_map('intval', explode(" ", fgets(STDIN)));
    $matrix = array();
    for ($i = 0; $i < $nodes; $i++) {
        fscanf(STDIN, "%d %d", $a, $b);
        $a--;
        $b--;
        $matrix[$a][$b] = 1;
        $matrix[$b][$a] = 1;
    }
    echo "-1" . PHP_EOL;
}

?>