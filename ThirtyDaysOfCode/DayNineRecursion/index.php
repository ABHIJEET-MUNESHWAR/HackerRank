<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 01/05/16
 * Time: 6:18 PM
 * https://www.hackerrank.com/challenges/30-recursion
 */

$handle = fopen ("php://stdin","r");
$arr = array();
$max = -999999;
for($arr_i = 0; $arr_i < 6; $arr_i++) {
    $arr_temp = fgets($handle);
    $arr[] = explode(" ",$arr_temp);
    array_walk($arr[$arr_i],'intval');
}

for($i=1; $i<=4; $i++) {
    $total = 0;
    for($j=1; $j<=4; $j++) {
        $total = $arr[$i-1][$j-1] + $arr[$i-1][$j] + $arr[$i-1][$j+1] + $arr[$i][$j] + $arr[$i+1][$j-1] + $arr[$i+1][$j] + $arr[$i+1][$j+1];
        if($total > $max) {
            $max = $total;
        }
    }
}
echo $max;

?>