<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 10/06/16
 * Time: 7:34 AM
 * https://www.hackerrank.com/challenges/countingsort4
 */

fscanf(STDIN, "%d", $len);
$frequency = array();
$stringsArray = array();
for ($i = 0; $i < $len; $i++) {
    $value = $string = 0;
    fscanf(STDIN, "%d %s", $value, $string);
    $frequency[$value][] = $string;
    $stringsArray[$i] = $string;
}
ksort($frequency);
foreach ($frequency as $fItem) {
    foreach ($fItem as $key=>$value) {
        $mappingIndex = array_search($value, $stringsArray);
        if($mappingIndex<intval($len/2)) {
            echo "- ";
        } else{
            echo $value . " ";
        }
    }
}
echo PHP_EOL;
?>