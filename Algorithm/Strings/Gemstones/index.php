<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 26/05/16
 * Time: 10:14 PM
 * https://www.hackerrank.com/challenges/gem-stones
 */

fscanf(STDIN, "%d", $t);
$letter = array_fill(0, 30, 0);
$count = 0;
for ($i = 0; $i < $t; $i++) {
    $str = rtrim(fgets(STDIN), "\n\r");
    $len = strlen($str);
    for($j=0; $j<$len; $j++) {
        $value = ord($str[$j]) - 97;
        if($letter[$value] === $i) {
            $letter[$value]++;
            if($letter[$value] === $t) {
                $count++;
            }
        }
    }
}
echo $count . "\n";
?>