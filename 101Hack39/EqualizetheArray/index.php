<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 12/07/16
 * Time: 10:01 PM
 * https://www.hackerrank.com/contests/101hack39/challenges/equality-in-a-array
 */

fscanf(STDIN, "%d", $len);
$arr = array_map('intval', explode(" ", trim(fgets(STDIN))));
$frequency = array();
for($i=0; $i<$len; $i++) {
    $value = $arr[$i];
    if(isset($frequency[$value])){
        $frequency[$value]++;
    } else {
        $frequency[$value] = 1;
    }
}
sort($frequency);
$frequencyLen = count($frequency);
$answer = $len - $frequency[$frequencyLen-1];
echo $answer . PHP_EOL;
?>