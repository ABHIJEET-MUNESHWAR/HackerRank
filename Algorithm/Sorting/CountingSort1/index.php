<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 09/06/16
 * Time: 7:01 AM
 * https://www.hackerrank.com/challenges/countingsort1
 */

fscanf(STDIN, "%d", $len);
$a_temp = rtrim(fgets(STDIN), "\n\r");
$arr = explode(" ",$a_temp);
array_walk($arr,'intval');
$countArray = array_fill(0, 100, 0);
foreach ($arr as $item) {
    $countArray[$item]++;
}

for($i=0; $i<100; $i++){
    echo $countArray[$i] . " ";
}
echo PHP_EOL;
?>