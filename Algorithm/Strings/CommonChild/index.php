<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 31/05/16
 * Time: 12:22 AM
 * https://www.hackerrank.com/challenges/common-child
 */

$str1 = rtrim(fgets(STDIN), "\n\r");
$str2 = rtrim(fgets(STDIN), "\n\r");
$len = strlen($str1);
$matrix = array();
for($i=$len; $i>0; $i--) {
    $str1[$i] = $str1[$i-1];
    $str2[$i] = $str2[$i-1];
}
for($i=0; $i<=$len; $i++) {
    $matrix[$i][0] = 0;
    $matrix[0][$i] = 0;
}
for($i=1; $i<=$len; $i++) {
    for($j=1; $j<=$len; $j++) {
        if($str1[$i] === $str2[$j]){
            $matrix[$i][$j] = $matrix[$i-1][$j-1] + 1;
        } else {
            $matrix[$i][$j] = max($matrix[$i-1][$j], $matrix[$i][$j-1]);
        }
    }
}
echo $matrix[$len][$len] . PHP_EOL;

?>