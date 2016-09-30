<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 25/05/16
 * Time: 11:50 PM
 * https://www.hackerrank.com/challenges/alternating-characters
 */

fscanf(STDIN, "%d", $t);
while ($t--) {
    $str = rtrim(fgets(STDIN), "\n\r");
    $len = strlen($str);
    $deleteCount = 0;
    $prev = $str[0];
    for ($i = 1; $i < $len; $i++) {
        $curr = $str[$i];
        if($curr == $prev) {
            $deleteCount++;
        }
        $prev = $curr;
    }
    echo $deleteCount . "\n";
}

?>