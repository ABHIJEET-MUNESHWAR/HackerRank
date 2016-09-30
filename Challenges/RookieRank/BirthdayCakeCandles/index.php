<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 26/07/16
 * Time: 9:30 PM
 * https://www.hackerrank.com/contests/rookierank/challenges/birthday-cake-candles
 */

fscanf(STDIN, "%d", $len);
$arr = array_map('intval', explode(" ", trim(fgets(STDIN))));
$frequency = array();
for($i=0; $i<$len; $i++) {
    $value = $arr[$i];
    if(isset($frequency[$value])) {
        $frequency[$value]++;
    } else{
        $frequency[$value] = 1;
    }
}
sort($frequency);
echo end($frequency) . PHP_EOL;

?>