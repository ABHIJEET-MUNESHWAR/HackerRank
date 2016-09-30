<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 06/07/16
 * Time: 10:18 AM
 * https://www.hackerrank.com/contests/hourrank-10/challenges/bomber-man
 */

$rows = 0;
$columns = 0;
$seconds = 0;
$grid = array();
$bombGrid = array();
$nonBombGrid = array();
$size = 202;
$handle = fopen ("php://stdin","r");
for ($i = 0; $i < $size; $i++) {
    $grid[] = array_fill(0, $size, 0);
    $bombGrid[] = array_fill(0, $size, 0);
    $nonBombGrid[] = array_fill(0, $size, 0);
}

fscanf(STDIN, "%d %d %d", $rows, $columns, $seconds);
for ($i = 1; $i <= $rows; $i++) {
    $t = trim(fgets(STDIN));
    $t = str_split($t);
    $k=0;
    for ($j = 1; $j <= $columns; $j++) {
        $grid[$i][$j] = $t[$k++];
    }
}

if ($seconds === 1) {
    for ($i = 1; $i <= $rows; $i++) {
        for ($j = 1; $j <= $columns; $j++) {
            echo $grid[$i][$j];
        }
        echo PHP_EOL;
    }
    return;
}
if ($seconds % 2 === 0) {
    for ($i = 1; $i <= $rows; $i++) {
        for ($j = 1; $j <= $columns; $j++) {
            echo 'O';
        }
        echo PHP_EOL;
    }
    return;
}
for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $columns; $j++) {
        if ($grid[$i][$j] === 'O') {
            $bombGrid[$i][$j] = $bombGrid[$i + 1][$j] = $bombGrid[$i - 1][$j] = $bombGrid[$i][$j + 1] = $bombGrid[$i][$j - 1] = 1;
        }
    }
}
for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $columns; $j++) {
        if ($bombGrid[$i][$j] === 0) {
            $nonBombGrid[$i][$j] = $nonBombGrid[$i + 1][$j] = $nonBombGrid[$i - 1][$j] = $nonBombGrid[$i][$j + 1] = $nonBombGrid[$i][$j - 1] = 1;
        }
    }
}

if ($seconds % 4 === 3) {
    for ($i = 1; $i <= $rows; $i++) {
        for ($j = 1; $j <= $columns; $j++) {
            if ($bombGrid[$i][$j]) {
                echo '.';
            } else {
                echo 'O';
            }
        }
        echo PHP_EOL;
    }
}
if ($seconds % 4 === 1) {
    for ($i = 1; $i <= $rows; $i++) {
        for ($j = 1; $j <= $columns; $j++) {
            if ($nonBombGrid[$i][$j]) {
                echo '.';
            } else {
                echo 'O';
            }
        }
        echo PHP_EOL;
    }
}
echo PHP_EOL;
?>