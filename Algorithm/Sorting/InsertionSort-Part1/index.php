<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 03/06/16
 * Time: 12:06 AM
 * https://www.hackerrank.com/challenges/insertionsort1
 */

function printArray($arr) {
    $len = count($arr);
    for($i=0; $i<$len; $i++) {
        echo $arr[$i] . " ";
    }
    echo PHP_EOL;
}

fscanf(STDIN, "%d", $len);
$a_temp = rtrim(fgets(STDIN), "\n\r");
$a = explode(" ", $a_temp);
array_walk($a, 'intval');
$key = $a[$len-1];
for($i=$len-2; $i>=0; $i--) {
    if($a[$i]>$key) {
        $a[$i+1] = $a[$i];
        printArray($a);
    } else {
        $a[$i+1] = $key;
        printArray($a);
        break;
    }
    if($i<=0) {
        $a[0] = $key;
        printArray($a);
    }
}
?>