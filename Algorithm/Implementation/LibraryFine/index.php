<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 21/05/16
 * Time: 7:01 PM
 * https://www.hackerrank.com/challenges/library-fine
 */

function getDateFrom($d)
{
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
if ($yr < $yd) {
    echo "0\n";
} elseif ($yr == $yd) {
    if($mr < $md) {
        echo "0\n";
    } elseif ($mr == $md) {
        if($dr<=$dd) {
            echo "0\n";
        } else {
            echo ($dr - $dd) * 15;
        }
    } else {
        echo ($mr - $md) * 500;
    }
} else {
    echo "10000\n";
}

?>