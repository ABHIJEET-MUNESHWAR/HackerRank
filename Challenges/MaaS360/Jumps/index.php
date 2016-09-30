<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 02/09/16
 * Time: 10:14 PM
 * https://www.hackerrank.com/tests/9hit4egmcf5/questions/bkir8614ke8
 */

fscanf(STDIN, "%d", $k);
fscanf(STDIN, "%d", $j);
$ans = 0;
if ($j === 1) {
    $ans = $k;
} elseif ($k == $j) {
    $ans = 1;
} else {
    $ans = $k % $j;
    $n = intval($k / $j);
    $ans += $n;
}
echo $ans . PHP_EOL;

?>