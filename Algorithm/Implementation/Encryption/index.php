<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 24/05/16
 * Time: 12:33 AM
 * https://www.hackerrank.com/challenges/encryption
 */

$message = rtrim(fgets(STDIN), "\n\r");
$len = strlen($message);
$squareRoot = sqrt($len);
$row = floor($squareRoot);
$column = ceil($squareRoot);
if($row*$column <$len) {
    $row++;
}
$matrix = array();
$count = 0;
for($i=0; $i<$row; $i++) {
    for($j=0; $j<$column; $j++) {
        $filler = "";
        if($count<$len) {
            $filler = $message[$count];
        }
        $matrix[$i][$j] = $filler;
        $count++;
    }
}
for($i=0; $i<$column; $i++) {
    for($j=0; $j<$row; $j++) {
        echo $matrix[$j][$i];
    }
    echo " ";
}
echo "\n";
?>