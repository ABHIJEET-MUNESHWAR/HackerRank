<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 04/06/16
 * Time: 12:23 PM
 * https://www.hackerrank.com/challenges/insertionsort2
 */
function printArray($arr) {
    foreach ($arr as $key=>$value) {
        echo $value . " ";
    }
    echo PHP_EOL;
}


fscanf(STDIN, "%d", $len);
$a_temp = rtrim(fgets(STDIN), "\n\r");
$arr = explode(" ",$a_temp);
array_walk($arr,'intval');
for($i=1; $i<$len; $i++) {
    $element = $arr[$i];
    $j=$i;
    while( ($j>=1) && ($arr[$j-1]>$element) ){
        $arr[$j] = $arr[$j-1];
        $j--;
    }
    $arr[$j] = $element;
    printArray($arr);
}

?>