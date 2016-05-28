<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 02/05/16
 * Time: 1:03 AM
 * https://www.hackerrank.com/challenges/30-binary-numbers
 */

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
if($n < 1) {
    echo 0;
    return;
}
$bin = 0;
$i = 1;
while($n!==0) {
    $rem = $n % 2;
    $n = intval($n / 2);
    $bin = $bin + $rem*$i;
    $i = $i * 10;
}
$binArray = array_map('intval', str_split($bin));
$len = sizeof($binArray);
$cnt = 0;
$max = 0;
for($i=0; $i<$len; $i++) {
    if($binArray[$i]) {
        $cnt ++;
    } else {
        if($cnt > $max) {
            $max = $cnt;
        }
        $cnt = 0;
    }
}
if( (!$max) || ($cnt > $max)){
    $max = $cnt;
}
echo $max;
?>