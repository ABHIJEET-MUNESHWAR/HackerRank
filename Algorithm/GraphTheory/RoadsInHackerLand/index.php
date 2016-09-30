<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 11/07/16
 * Time: 9:08 PM
 * https://www.hackerrank.com/challenges/johnland
 */

fscanf(STDIN, "%d %d", $nodes, $edges);
$graph = array();
$sum = 0;
for ($i = 0; $i < $nodes; $i++) {
    $graph[] = array_fill(0, $nodes, PHP_INT_MAX);
}
for ($i = 0; $i < $edges; $i++) {
    fscanf(STDIN, "%d %d %d", $a, $b, $weight);
    $a--;
    $b--;
    $weight = pow(2, $weight);
    $graph[$a][$b] = $weight;
    $graph[$b][$a] = $weight;
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

for ($i = 1; $i < $nodes; $i++) {
    for ($j = 0; $j < $i; $j++) {
        $sum += $graph[$i][$j];
    }
}
echo $sum . PHP_EOL;
$sum = decbin($sum);
echo $sum . PHP_EOL;
?>
