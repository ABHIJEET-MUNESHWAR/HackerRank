<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 06/07/16
 * Time: 10:00 AM
 * https://www.hackerrank.com/contests/hourrank-10/challenges/jumping-on-the-clouds-revisited
 */
$len = 0;
$jump = 0;
$energy = 100;
fscanf(STDIN, "%d %d", $len, $jump);
$arr = array_map('intval', explode(" ", trim(fgets(STDIN))));
$currentJumpLocation = 0;
while(1) {
    $currentJumpLocation = ($jump+$currentJumpLocation)%$len;
    if($arr[$currentJumpLocation]) {
        $energy = $energy-1-2;
    } else {
        $energy = $energy-1;
    }
    if($currentJumpLocation === 0) {
        break;
    }
}
echo $energy . PHP_EOL;

?>