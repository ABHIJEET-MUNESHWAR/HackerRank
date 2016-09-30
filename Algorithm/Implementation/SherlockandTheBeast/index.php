<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 14/05/16
 * Time: 4:56 PM
 * https://www.hackerrank.com/challenges/sherlock-and-the-beast
 * 4
 * 1    -1
 * 3    555
 * 5    33333
 * 11   55555533333
 */
/*
*/
$n = intval(fgets(STDIN));
$arr = array();
for ($i = 0; $i < $n; $i++) {
    $arr[] = intval(fgets(STDIN));
}

for ($l = 0; $l < $n; $l++) {
    $num = $arr[$l];
    $ans = "";
    for ($i = $num; $i >= 0; $i--) {
        if (($i % 3 === 0) && (($num - $i) % 5 === 0)) {
            for ($j = 0; $j < $i; $j++) {
                $ans = $ans . "5";
            }
            for ($k = $j; $k < $num; $k++) {
                $ans = $ans . "3";
            }
            break;
        }
    }
    if (strlen($ans)) {
        echo $ans . "\n";
    } else {
        echo "-1\n";
    }
}

/*
function getNumberString($fiveCounter, $threeCounter)
{
    $numString = "";
    for ($i = 0; $i < $fiveCounter; $i++) {
        $numString = $numString . "5";
    }
    for ($i = 0; $i < $threeCounter; $i++) {
        $numString = $numString . "3";
    }
    return $numString;
}

for($j = 0; $j < $n; $j++){
    $num = $arr[$j];
    $fiveCounter = $num;
    $threeCounter = 0;
    $isFound = false;
    for($i=0; $i<($num*2); $i++) {
        $numString = getNumberString($fiveCounter, $threeCounter);
        if( ( ($fiveCounter % 3) == 0) && (($threeCounter % 5) == 0) ) {
            echo $numString . "\n";
            $isFound = true;
            break;
        }
        $fiveCounter--;
        $threeCounter++;
    }
    if(!$isFound) {
        echo "-1\n";
    }
}
*/
?>