<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 18/05/16
 * Time: 3:30 PM
 * https://www.hackerrank.com/challenges/cut-the-sticks
 */


fscanf(STDIN, "%d", $n);
$a_temp = rtrim(fgets(STDIN), "\n\r");
$arr = explode(" ", $a_temp);
array_walk($arr, 'intval');
$min = 0;
$len = $n;
while($len) {
    echo "$len\n";
    $min = min($arr);
    for($i=0; $i<$len; $i++) {
        $sub = $arr[$i] - $min;
        if($sub < 1) {
            array_splice($arr, $i, 1);
            $len = count($arr);
            $i--;
        } else {
            $arr[$i] = $sub;
        }
    }
    $len = count($arr);
}

?>