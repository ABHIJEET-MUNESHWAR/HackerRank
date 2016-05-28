<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 17/05/16
 * Time: 10:41 PM
 * https://www.hackerrank.com/contests/101hack37/challenges/maximum-perimeter-triangle
 */

fscanf(STDIN, "%d", $n);
$arr = array();
$a_temp = rtrim(fgets(STDIN), "\n\r");
$a = explode(" ", $a_temp);
array_walk($a, 'intval');
$arr = $a;
$a=$b=$c=$p=0;
$len = count($arr);
sort($arr);
$isDegenerate = true;
for($i=0; $i<$len; $i++) {
    for($j=$i+1; $j<$len; $j++) {
        for($k=$j+1; $k<$n; $k++) {
            if( ($arr[$i] + $arr[$j]) > $arr[$k]) {
                if(($arr[$i] + $arr[$j] + $arr[$k])>$p) {
                    $p = $arr[$i] + $arr[$j] + $arr[$k];
                    $a = $arr[$i];
                    $b = $arr[$j];
                    $c = $arr[$k];
                    $isDegenerate = false;
                }
            }
        }
    }
}

if ($isDegenerate) {
    echo "-1\n";
} else {
    echo $a . " " . $b . " " . $c . "\n";
}

?>