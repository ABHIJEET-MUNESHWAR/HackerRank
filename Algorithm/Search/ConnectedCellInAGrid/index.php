<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 18/06/16
 * Time: 9:35 PM
 * https://www.hackerrank.com/challenges/connected-cell-in-a-grid
 */

function dfs(&$matrix, &$marked, $start, &$sum)
{
    if ($start[0] < 0) {
        return;
    }
    if ($start[1] < 0) {
        return;
    }
    if ($start[0] > count($matrix) - 1) {
        return;
    }
    if ($start[1] > count($matrix[0]) - 1) {
        return;
    }
    $element = $matrix[$start[0]][$start[1]];
    if (!$element || $marked[$start[0]][$start[1]]) {
        return;
    }
    $marked[$start[0]][$start[1]] = true;
    $sum++;
    dfs($matrix, $marked, [$start[0], $start[1] + 1], $sum);
    dfs($matrix, $marked, [$start[0], $start[1] - 1], $sum);
    dfs($matrix, $marked, [$start[0] - 1, $start[1] - 1], $sum);
    dfs($matrix, $marked, [$start[0] - 1, $start[1]], $sum);
    dfs($matrix, $marked, [$start[0] - 1, $start[1] + 1], $sum);
    dfs($matrix, $marked, [$start[0] + 1, $start[1] - 1], $sum);
    dfs($matrix, $marked, [$start[0] + 1, $start[1]], $sum);
    dfs($matrix, $marked, [$start[0] + 1, $start[1] + 1], $sum);
}

fscanf(STDIN, "%d", $row);
fscanf(STDIN, "%d", $column);
$matrix = array();
$marked = array();
for ($i = 0; $i < $row; $i++) {
    $matrix[$i] = array_map('intval', explode(" ", trim(fgets(STDIN))));
    $marked[$i] = array_fill(0, $column, 0);
}
$max = 0;
for ($i = 0; $i < $row; $i++) {
    for ($j = 0; $j < $column; $j++) {
        $sum = 0;
        dfs($matrix, $marked, [$i, $j], $sum);
        $max = max($max, $sum);
    }
}

echo $max . PHP_EOL;

?>