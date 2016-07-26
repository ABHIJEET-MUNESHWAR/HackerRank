<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 05/06/16
 * Time: 8:03 AM
 */
function maxDifference($a)
{
    $answer = -1;
    $max = max($a);
    $maxIndex = array_search($max, $a);
    $min = 99999;
    for($i=0; $i<$maxIndex; $i++) {
        if($a[$i]<$min) {
            $min = $a[$i];
        }
    }
    $diff = $max-$min;
    if($diff>1) {
        $answer = $diff;
    }
    return $answer;
}

$file = fopen('input.txt', "w");

$__fp = fopen("php://stdin", "r");

$_a_cnt = 0;
fscanf($__fp, "%d", $_a_cnt);
$_a = array();
for ($_a_i = 0; $_a_i < $_a_cnt; $_a_i++) {
    fscanf($__fp, "%d", $_a_item);
    $_a[] = $_a_item;
}

$res = maxDifference($_a);
fwrite($file, $res . "\n");

fclose($file);
?>