<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 04/06/16
 * Time: 8:42 PM
 * https://www.hackerrank.com/contests/zalando-codesprint/challenges/the-inquiring-manager
 */

fscanf(STDIN, "%d", $len);
$eventArray = array();
$priceArray = array();
$timeArray = array();
for ($i = 0; $i < $len; $i++) {
    $a_temp = rtrim(fgets(STDIN), "\n\r");
    $a = explode(" ", $a_temp);
    array_walk($a, 'intval');
    $event = $a[0];
    $eventArray[] = $event;
    if ($event == 1) {
        $priceArray[] = $a[1];
        $timeArray[] = $a[2];
    } else {
        $priceArray[] = 0;
        $timeArray[] = $a[1];
    }
}
for($i=0; $i<$len; $i++) {
    $event = $eventArray[$i];
    if($event==2) {
        $currentTime = $timeArray[$i];
        $upToTime = $currentTime - 59;
        $max = -1;
        for($j=$i; $j>-1 && $timeArray[$j]>=$upToTime; $j--) {
            if( ($priceArray[$j]) && ($max<$priceArray[$j]) ){
                $max = $priceArray[$j];
            }
        }
        echo $max . PHP_EOL;
    }
}
?>