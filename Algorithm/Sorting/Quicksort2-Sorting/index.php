<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 05/06/16
 * Time: 10:02 PM
 * https://www.hackerrank.com/challenges/quicksort2
 */

function partition(&$arr, $leftIndex, $rightIndex)
{
    $pivot = $arr[($leftIndex + $rightIndex) / 2];

    while ($leftIndex <= $rightIndex) {
        while ($arr[$leftIndex] < $pivot)
            $leftIndex++;
        while ($arr[$rightIndex] > $pivot)
            $rightIndex--;
        if ($leftIndex <= $rightIndex) {
            $tmp = $arr[$leftIndex];
            $arr[$leftIndex] = $arr[$rightIndex];
            $arr[$rightIndex] = $tmp;
            $leftIndex++;
            $rightIndex--;
        }
    }
    echo implode(" ", $arr) . PHP_EOL;
    return $leftIndex;
}

function quickSort(&$arr, $leftIndex, $rightIndex)
{
    $index = partition($arr, $leftIndex, $rightIndex);
    if ($leftIndex < $index - 1)
        quickSort($arr, $leftIndex, $index - 1);
    if ($index < $rightIndex)
        quickSort($arr, $index, $rightIndex);
}

fscanf(STDIN, "%d", $len);
$temp = rtrim(fgets(STDIN), "\n\r");
$arr = explode(" ", $temp);
array_walk($arr, 'intval');
quickSort($arr, 0, $len - 1);
?>