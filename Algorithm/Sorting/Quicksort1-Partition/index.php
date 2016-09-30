<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 05/06/16
 * Time: 4:59 PM
 * https://www.hackerrank.com/challenges/quicksort1
 */

fscanf(STDIN, "%d", $len);
$temp = rtrim(fgets(STDIN), "\n\r");
$arr = explode(" ", $temp);
array_walk($arr, 'intval');
$leftArray = array();
$rightArray = array();
$equal = $arr[0];
for($i=1; $i<$len; $i++) {
    $element = $arr[$i];
    if($element <= $equal) {
        array_push($leftArray, $element);
    } else {
        array_push($rightArray, $element);
    }
}
foreach ($leftArray as $key=>$value) {
    echo $value . " ";
}
echo $equal . " ";
foreach ($rightArray as $index => $item) {
    echo $item . " ";
}
?>