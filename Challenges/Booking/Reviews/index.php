<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 07/08/16
 * Time: 6:43 PM
 * https://www.hackerrank.com/contests/booking-passions-hacked-backend/challenges/reviews
 */

$totalPassions = 0;
$totalReviews = 0;
$passions = array();
$reviewers = array();
fscanf(STDIN, "%d %d", $totalPassions, $totalReviews);
for ($i = 0; $i < $totalPassions; $i++) {
    $passions[$i] = trim(fgets(STDIN));
}
for ($i = 0; $i < $totalReviews; $i++) {
    $id = 0;
    $time = 0;
    fscanf(STDIN, "%d %d", $id, $time);
    $reviews = array();
    $reviews["id"] = $id;
    $reviews["date"] = $time;
    $reviews["body"] = trim(fgets(STDIN));
    if (!isset($reviewers[$id])) {
        $reviewers[$id] = array();
    }
    array_push($reviewers[$id], $reviews);
}
$ratings = array();
foreach ($reviewers as $id => $reviewer) {
    foreach ($reviewer as $review) {
        $june15 = 1465948800;
        $july15 = 1468540800;
        $bodyLength = strlen($review["body"]);
        if (($review["date"] >= $june15) && ($review["date"] < $july15)) {
            $ratings[$id]["date"] = 20;
        } else {
            $ratings[$id]["date"] = 10;
        }
        if ($bodyLength >= 100) {
            $ratings[$id]["body"] = 20;
        } else {
            $ratings[$id]["body"] = 10;
        }
        foreach ($passions as $passion) {
            if (stripos($review["body"], $passion) === false) {
                $ratings[$id][$passion] = false;
            } else {
                if (!isset($ratings[$id][$passion])) {
                    $ratings[$id][$passion] = 0;
                }
                $ratings[$id][$passion] = $ratings[$id][$passion] + $ratings[$id]["date"] + $ratings[$id]["body"];
            }
        }
    }
}
foreach ($passions as $passion) {
    $minID = PHP_INT_MAX;
    $maxTotal = PHP_INT_MIN;
    foreach ($ratings as $id => $rating) {
        if ((array_key_exists($passion, $rating)) && ($rating[$passion])) {
            if ($maxTotal <= ($rating[$passion])) {
                $maxTotal = $rating[$passion];
                if ($minID > $id) {
                    $minID = $id;
                }
            }
        }
    }
    if ($minID === PHP_INT_MAX) {
        echo "-1" . PHP_EOL;
    } else {
        echo $minID . PHP_EOL;
    }
}