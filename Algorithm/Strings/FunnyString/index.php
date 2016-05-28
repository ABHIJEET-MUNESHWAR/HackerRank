<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 26/05/16
 * Time: 10:40 PM
 * https://www.hackerrank.com/challenges/funny-string
 */

fscanf(STDIN, "%d", $t);
while ($t--) {
    $str = rtrim(fgets(STDIN), "\n\r");
    $len = strlen($str);
    $isFunny = "Funny";
    for ($i = 1; $i < $len; $i++) {
        $s = abs(ord($str[$i])-ord($str[$i-1]));
        $r = abs(ord($str[$len-$i])-ord($str[$len-$i-1]));
        if($s != $r) {
            $isFunny = "Not Funny";
            break;
        }
    }
    echo $isFunny . "\n";
}

?>