<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 27/08/16
 * Time: 9:30 PM
 * https://www.hackerrank.com/contests/world-codesprint-6/challenges/bon-appetit
 */


fscanf(STDIN, "%d %d", $n, $k);
$arr = array_map('intval', explode(" ", trim(fgets(STDIN))));
fscanf(STDIN, "%d", $bc);
$sum = 0;
for ($i = 0; $i < $n; $i++) {
    if ($i != $k) {
        $sum += $arr[$i];
    }
}
$r = intval($sum / 2);
$result = ($bc - $r);
if($result >0) {
    echo $result  . PHP_EOL;
} else {
    echo "Bon Appetit"  . PHP_EOL;
}

?>