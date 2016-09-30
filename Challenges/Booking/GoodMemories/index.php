<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 07/08/16
 * Time: 6:02 PM
 * https://www.hackerrank.com/contests/booking-passions-hacked-backend/challenges/good-memories
 */

fscanf(STDIN, "%d", $t);
while($t--) {
    fscanf(STDIN, "%d", $totalExcursion);
    $excursions = array();
    for($i=0; $i<$totalExcursion; $i++) {
        $excursions[$i] = explode(",", trim(fgets(STDIN)));
    }
    $frequency = array();
    for($i=0; $i<$totalExcursion; $i++) {
        $excursion = $excursions[$i][0];
        if(isset($frequency[$excursion])) {
            $frequency[$excursion]++;
        } else {
            $frequency[$excursion] = 1;
        }
    }
    $frequencyLen = count($frequency);
    if($frequencyLen<$totalExcursion) {
        echo "ORDER EXISTS";
    } else {
        echo "ORDER VIOLATION";
    }
    echo PHP_EOL;
}

?>