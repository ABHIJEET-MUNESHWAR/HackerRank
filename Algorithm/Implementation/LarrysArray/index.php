<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 24/05/16
 * Time: 9:52 PM
 * https://www.hackerrank.com/challenges/larrys-array
 */

fscanf(STDIN, "%d", $t);
while ($t--) {
    fscanf(STDIN, "%d", $n);
    $a_temp = rtrim(fgets(STDIN), "\n\r");
    $arr = explode(" ", $a_temp);
    array_walk($arr, 'intval');
    $output = "YES";
    $a2 = array();
    $sum = 0;
    for ($i = 0; $i < $n; $i++) {
        $count = 0;
        for ($j = $i + 1; $j < $n; $j++) {
            if ($arr[$i] > $arr[$j]) {
                $count++;
            }
        }
        $a2[$i] = $count;
    }
    for ($i = 0; $i < $n; $i++) {
        $sum += $a2[$i];
    }
    if ($sum % 2) {
        $output = "NO";
    }
    echo $output . "\n";
}

?>