<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 02/06/16
 * Time: 10:07 PM
 * https://www.hackerrank.com/contests/hourrank-9/challenges/fair-rations
 */

fscanf(STDIN, "%d", $t);
$a_temp = rtrim(fgets(STDIN), "\n\r");
$a = explode(" ", $a_temp);
array_walk($a, 'intval');
$len = count($a);
$cost = 0;
for ($i = 0; $i < $len; $i++) {
    if ($a[$i] % 2) {
        if ($i === $len - 1) {
            echo "NO" . PHP_EOL;
            exit;
        } else {
            $a[$i]++;
            $a[$i + 1]++;
            $cost += 2;
        }
    }
}
echo $cost . PHP_EOL;

?>