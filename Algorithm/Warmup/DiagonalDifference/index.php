<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 07/05/16
 * Time: 1:03 AM
 * https://www.hackerrank.com/challenges/diagonal-difference
 */


$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$a = array();
for($a_i = 0; $a_i < $n; $a_i++) {
    $a_temp = fgets($handle);
    $a[] = explode(" ",$a_temp);
    array_walk($a[$a_i],'intval');
}
$s1 = 0;
$s2 = 0;
for($i=0; $i<$n; $i++) {
    $s1 += $a[$i][$i];
}
for($i=0, $j=$n-1; $i<$n; $i++, $j--) {
    $s2 += $a[$i][$j];
}
echo abs($s1 - $s2);
?>
