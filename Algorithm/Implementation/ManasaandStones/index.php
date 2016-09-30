<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 21/05/16
 * Time: 9:04 PM
 * https://www.hackerrank.com/challenges/manasa-and-stones
 */

fscanf(STDIN, "%d", $t);
while ($t--) {
    fscanf(STDIN, "%d", $n);
    fscanf(STDIN, "%d", $a1);
    fscanf(STDIN, "%d", $b1);
    $a = min($a1, $b1);
    $b = max($a1, $b1);
    $lb = $a * ($n - 1);
    $ub = $b * ($n - 1);
    $diff = ($b-$a);
    if($a == $b) {
        echo $lb;
    } else{
        for($i=$lb; $i<=$ub; $i+=$diff) {
            echo $i . " ";
        }
    }
    echo "\n";
}
?>