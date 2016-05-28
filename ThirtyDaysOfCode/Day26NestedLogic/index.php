<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 13/05/16
 * Time: 9:59 AM
 * https://www.hackerrank.com/challenges/30-nested-logic
 */

function getDateFrom($d) {
    $d = explode(' ', $d);
    $d = implode("/", $d);
    return $d;
}


$returned = rtrim(fgets(STDIN), "\n\r");
$due = rtrim(fgets(STDIN), "\n\r");
$returned = getDateFrom($returned);
$due = getDateFrom($due);
$returnedDate = DateTime::createFromFormat('d/m/Y', $returned);;
$dueDate = DateTime::createFromFormat('d/m/Y', $due);
$dr = $returnedDate->format('d');
$mr = $returnedDate->format('m');
$yr = $returnedDate->format('y');
$dd = $dueDate->format('d');
$md = $dueDate->format('m');
$yd = $dueDate->format('y');
if($yr <= $yd) {
    if($mr <= $md) {
        if($dr <= $dd) {
            echo "0";
        } else {
            echo ($dr - $dd) * 15;
        }
    } else{
        echo ($mr - $md) * 500;
    }
} else {
    echo "10000";
}

?>