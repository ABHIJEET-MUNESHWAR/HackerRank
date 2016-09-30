<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 07/05/16
 * Time: 12:42 PM
 * https://www.hackerrank.com/challenges/time-conversion
 */

$handle = fopen("php://stdin", "r");
fscanf($handle, "%s", $time);
$timeArr = explode(":", $time);
if ($timeArr[2][2] == "P") {
    if ($timeArr[0] != 12) {
        $timeArr[0] = $timeArr[0] + 12;
    }
    if ($timeArr[0] == 24) {
        $timeArr[0] = "00";
    }
} else {
    if($timeArr[0] == "12") {
        $timeArr[0] = "00";
    }
}

$timeArr[2] = $timeArr[2][0] . $timeArr[2][1];
echo implode(":", $timeArr);
?>