<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 07/07/16
 * Time: 12:48 PM
 * https://www.hackerrank.com/challenges/floyd-city-of-blinding-lights
 */

$nodes = 0;
$edges = 0;
$graph = array();
$from = 0;
$to = 0;
$weight = 0;
fscanf(STDIN, "%d %d", $nodes, $edges);
for ($i = 0; $i < $nodes; $i++) {
    $graph[] = array_fill(0, $nodes, PHP_INT_MAX);
    $graph[$i][$i] = 0;
}
for ($i = 0; $i < $edges; $i++) {
    fscanf(STDIN, "%d %d %d", $from, $to, $weight);
    $from--;
    $to--;
    $graph[$from][$to] = $weight;
}

for ($k = 0; $k < $nodes; $k++) {
    for ($i = 0; $i < $nodes; $i++) {
        for ($j = 0; $j < $nodes; $j++) {
            if ($graph[$i][$j] > ($graph[$i][$k] + $graph[$k][$j])) {
                $graph[$i][$j] = $graph[$i][$k] + $graph[$k][$j];
            }
        }
    }
}
fscanf(STDIN, "%d", $t);
while ($t--) {
    fscanf(STDIN, "%d %d", $from, $to);
    $from--;
    $to--;
    $distance = $graph[$from][$to];
    if ($distance == PHP_INT_MAX) {
        echo "-1" . PHP_EOL;
    } else {
        echo $graph[$from][$to] . PHP_EOL;
    }
}
?>