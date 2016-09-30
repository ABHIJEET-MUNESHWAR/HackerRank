<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 14/05/16
 * Time: 6:58 PM
 * https://www.hackerrank.com/challenges/find-digits
 */

$n = intval(fgets(STDIN));
$arr = array();
for ($i = 0; $i < $n; $i++) {
    $arr[] = intval(fgets(STDIN));
}

for($l=0; $l<$n; $l++) {
    $num = $arr[$l];
    $a = str_split($num);
    $len = strlen($num);
    $count = 0;
    for($i=0; $i<$len; $i++) {
        if( ($a[$i]) && ($num%$a[$i] === 0) ){
            $count++;
        }
    }
    echo $count . "\n";
}

?>