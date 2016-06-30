<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 27/06/16
 * Time: 11:43 PM
 * https://www.hackerrank.com/challenges/bfsshortreach
 */

fscanf(STDIN, "%d", $t);
while ($t--) {
    $nodes = 0;
    $edges = 0;
    $graph = array();
    fscanf(STDIN, "%d %d", $nodes, $edges);
    for ($i = 0; $i < $nodes; $i++) {
        for ($j = 0; $j < $nodes; $j++) {
            $graph[$i][$j] = 99999;
        }
    }
    for ($i = 0; $i < $edges; $i++) {
        $u = 0;
        $v = 0;
        fscanf(STDIN, "%d %d", $u, $v);
        $graph[$u][$v] = 6;
        $graph[$v][$u] = 6;
    }
}

?>