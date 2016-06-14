<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 14/06/16
 * Time: 11:02 PM
 * https://www.hackerrank.com/challenges/sherlock-and-watson
 */

$len = $rotations = $queries = 0;
fscanf(STDIN, "%d %d %d", $len, $rotations, $queries);
$temp = rtrim(fgets(STDIN), "\n\r");
$arr = explode(" ", $temp);
array_walk($arr, 'intval');
while ($queries--) {
    fscanf(STDIN, "%d", $index);
    $position = $index - ($rotations % $len);
    if ($position < 0) {
        $position += $len;
    }
    echo $arr[$position] . PHP_EOL;
}
?>