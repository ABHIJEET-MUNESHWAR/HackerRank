<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 04/06/16
 * Time: 7:29 PM
 * https://www.hackerrank.com/challenges/runningtime
 */

fscanf(STDIN, "%d", $len);
$a_temp = rtrim(fgets(STDIN), "\n\r");
$arr = explode(" ",$a_temp);
array_walk($arr,'intval');
$count = 0;
for($i=1; $i<$len; $i++) {
    $element = $arr[$i];
    $j=$i;
    while( ($j>=1) && ($arr[$j-1]>$element) ){
        $arr[$j] = $arr[$j-1];
        $j--;
        $count++;
    }
    $arr[$j] = $element;
}

echo $count . PHP_EOL;

?>