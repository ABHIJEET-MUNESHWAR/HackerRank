<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 27/06/16
 * Time: 11:43 PM
 * https://www.hackerrank.com/challenges/bfsshortreach
 */

function bfs($graph, $s, $nodes, $queue)
{
    $distance = array();
    $parent = array();
    for ($i = 0; $i < $nodes; $i++) {
        $distance[$i] = -1;
        $parent[$i] = 0;
    }
    $distance[$s - 1] = 0;
    $queue->enqueue($s);
    while (!$queue->isEmpty()) {
        $current = $queue->dequeue();
        for ($i = 0; $i < $nodes; $i++) {
            if ($graph[$current - 1][$i] === 1) {
                if ($distance[$i] === -1) {
                    $distance[$i] = $distance[$current - 1] + 6;
                    $parent[$i] = $current;
                    $queue->enqueue($i + 1);
                }
            }
        }
    }
    for($i=0; $i<$nodes; $i++) {
        if($distance[$i]!==0) {
            echo $distance[$i] . " ";
        }
    }
    echo PHP_EOL;
}

fscanf(STDIN, "%d", $t);
while ($t--) {
    $nodes = 0;
    $edges = 0;
    $graph = array();
    fscanf(STDIN, "%d %d", $nodes, $edges);
    for ($i = 0; $i < $nodes; $i++) {
        for ($j = 0; $j < $nodes; $j++) {
            $graph[$i][$j] = 0;
        }
    }
    for ($i = 0; $i < $edges; $i++) {
        $u = 0;
        $v = 0;
        fscanf(STDIN, "%d %d", $u, $v);
        $u--;
        $v--;
        $graph[$u][$v] = 1;
        $graph[$v][$u] = 1;
    }
    fscanf(STDIN, "%d", $s);
    $queue = new SplQueue();
    bfs($graph, $s, $nodes, $queue);
}

?>