<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 24/05/16
 * Time: 12:07 AM
 * https://www.hackerrank.com/challenges/kaprekar-numbers
 */

fscanf(STDIN, "%d", $lb);
fscanf(STDIN, "%d", $ub);
$count = 0;
for($i=$lb; $i<=$ub; $i++) {
    $power = pow($i, 2);
    $len = strlen($power);
    $middle = intval($len/2);
    $s1 = substr($power, 0, $middle);
    $s2 = substr($power, $middle);
    if(($s1+$s2) == $i) {
        $count++;
        echo $i . " ";
    }
}
if(!$count) {
    echo "INVALID RANGE";
}
?>