<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 19/06/16
 * Time: 5:58 PM
 * https://www.hackerrank.com/challenges/pairs
 */

fscanf(STDIN, "%d %d", $len, $k);
$arr = array_map('intval', explode(" ", trim(fgets(STDIN))));
sort($arr);
$i = 0;
$j = 1;
$count = 0;
while ($j < $len) {
    $diff = $arr[$j] - $arr[$i];
    if ($diff === $k) {
        $count++;
        $j++;
    } elseif ($diff > $k) {
        $i++;
    } else {
        $j++;
    }
}

echo $count . PHP_EOL;

?>