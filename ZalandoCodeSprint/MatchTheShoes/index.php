<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 04/06/16
 * Time: 7:47 PM
 * https://www.hackerrank.com/contests/zalando-codesprint/challenges/match-the-shoes
 */

$limit = 0;
$different = 0;
$len = 0;
fscanf(STDIN, "%d %d %d", $limit, $different, $len);
$frequency = array();
$arr = array();
for($i=0; $i<$len; $i++) {
    fscanf(STDIN, "%d", $arr[]);
}
for($i=0; $i<$len; $i++) {
    $frequency[$arr[$i]]=0;
}
for($i=0; $i<$len; $i++) {
    $frequency[$arr[$i]]++;
}
arsort($frequency);
$i=0;
foreach ($frequency as $key=>$value) {
    echo $key . PHP_EOL;
    if($i>=$limit-1) {
        break;
    }
    $i++;
}

?>