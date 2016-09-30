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
    $maxIndex = -1;
    $max = max($a);
    foreach ($a as $key=>$value) {
        if($value == $max) {
            $maxIndex = $key;
        }
    }
    $min = 99999999;
    for ($i = 0; $i < $maxIndex; $i++) {
        if ($a[$i] < $min) {
            $min = $a[$i];
        }
    }
    $diff = $max - $min;
    if ($diff >= 1) {
        $answer = $diff;
    }
    return $answer;
}
fscanf(STDIN, "%d", $len);
$arr = array();
while($len--) {
    fscanf(STDIN, "%d", $arr[]);
}
$res = maxDifference($arr);
echo $res . PHP_EOL;

?>