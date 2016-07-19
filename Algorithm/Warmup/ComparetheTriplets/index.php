<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 14/07/16
 * Time: 7:35 PM
 * https://www.hackerrank.com/challenges/compare-the-triplets
 */

$alice = array_map('intval', explode(" ", trim(fgets(STDIN))));
$bob = array_map('intval', explode(" ", trim(fgets(STDIN))));
$a = 0;
$b = 0;
for ($i = 0; $i < 3; $i++) {
    if ($alice[$i] > $bob[$i]) {
        $a++;
    } elseif ($alice[$i] < $bob[$i]) {
        $b++;
    }
}
echo $a . " " . $b;
echo PHP_EOL;

?>