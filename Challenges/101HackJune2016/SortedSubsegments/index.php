<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 20/06/16
 * Time: 11:22 PM
 * https://www.hackerrank.com/contests/101hack38/challenges/sorted-subsegments
 */

$operations = 0;
$index = 0;
fscanf(STDIN, "%d %d %d", $len, $operations, $index);
$arr = array_map('intval', explode(" ", trim(fgets(STDIN))));
while ($operations--) {
    $lb = 0;
    $ub = 0;
    fscanf(STDIN, "%d %d", $lb, $ub);
    $len = $ub - $lb + 1;
    $newArr = array_slice($arr, $lb, $len);
    sort($newArr);
    for ($i = $lb, $j=0; $i <= $ub; $i++) {
        $arr[$i] = $newArr[$j++];
    }
}
echo $arr[$index] . PHP_EOL;

?>