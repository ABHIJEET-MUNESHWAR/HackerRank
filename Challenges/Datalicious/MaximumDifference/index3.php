<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 05/06/16
 * Time: 8:03 AM
 */
function maxDifference($a)
{
    $arr = $a;
    $max_diff = $arr[1] - $arr[0];
    $min_element = $arr[0];
    $len = count($arr);
    for ($i = 1; $i < $len; $i++) {
        if ($arr[$i] - $min_element > $max_diff)
            $max_diff = $arr[$i] - $min_element;
        if ($arr[$i] < $min_element)
            $min_element = $arr[$i];
    }
    return $max_diff;
}

fscanf(STDIN, "%d", $len);
$arr = array();
while ($len--) {
    fscanf(STDIN, "%d", $arr[]);
}
$res = maxDifference($arr);
echo $res . PHP_EOL;

?>