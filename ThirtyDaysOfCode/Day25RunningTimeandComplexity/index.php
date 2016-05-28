<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 13/05/16
 * Time: 12:26 AM
 * https://www.hackerrank.com/challenges/30-running-time-and-complexity
 * 2, 3, 5, 7, 11, 13, 17, 19, 23, 27, 29, 31...
 */

$T = intval(fgets(STDIN));
$arr = array();
while ($T-- > 0) {
    $arr[] = intval(fgets(STDIN));
}
$len = count($arr);
for($i=0; $i<$len; $i++) {
    $n = $arr[$i];
    $isPrime = "Prime\n";
    if( ($n == 0) || ($n == 1) ) {
        $isPrime = "Not prime\n";
    }
    for($j=2; $j<=round(sqrt($n)); $j++){
        if($n % $j === 0) {
            $isPrime = "Not prime\n";
            break;
        }
    }
    echo $isPrime;
}

?>