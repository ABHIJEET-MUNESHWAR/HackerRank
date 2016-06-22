<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 22/06/16
 * Time: 9:55 PM
 * https://www.hackerrank.com/challenges/lonely-integer
 */

fscanf(STDIN, "%d", $len);
$arr = array_map('intval', explode(" ", trim(fgets(STDIN))));
$result = $arr[0];
for ($i = 1; $i < $len; $i++) {
    $result = $result ^ $arr[$i];
}
echo $result . PHP_EOL;
?>