<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 17/05/16
 * Time: 11:42 PM
 * https://www.hackerrank.com/challenges/cavity-map
 */

fscanf(STDIN,"%d",$n);
$grid = array();
for($a_i = 0; $a_i < $n; $a_i++) {
    $a_temp = rtrim(fgets(STDIN), "\n\r");
    $grid[] = str_split($a_temp);
    array_walk($grid[$a_i],'intval');
}
$answerGrid = $grid;

for($i=1; $i<$n-1; $i++) {
    for($j=1; $j<$n-1; $j++) {
        $curr = $grid[$i][$j];
        if(($curr>$grid[$i-1][$j]) && ($curr>$grid[$i+1][$j]) && ($curr>$grid[$i][$j-1]) && ($curr>$grid[$i][$j+1])) {
            $answerGrid[$i][$j] = 'X';
        }
    }
}
for($i=0; $i<$n; $i++) {
    for($j=0; $j<$n; $j++) {
        echo $answerGrid[$i][$j];
    }
    echo "\n";
}

?>