<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 28/06/16
 * Time: 10:59 PM
 * https://www.hackerrank.com/contests/w21/challenges/lazy-sorting
 */
function calculateFactorial($n)
{
    $fact = 1;
    while ($n) {
        $fact *= ($n--);
    }
    return $fact;
}

fscanf(STDIN, "%d", $len);
$arr = array_map('intval', explode(" ", trim(fgets(STDIN))));
$frequency = array();
for ($i = 0; $i < $len; $i++) {
    $val = $arr[$i];
    if(isset($frequency[$val])) {
        $frequency[$val]++;
    } else {
        $frequency[$val] = 1;
    }
}
$counter = count($frequency);
if ($counter === 1) {
    echo number_format(1, 6, '.', '') . PHP_EOL;
} else {
    $denominator = 1;
    $numerator = calculateFactorial($len);
    foreach ($frequency as $key=>$value) {
        $denominator*=calculateFactorial($value);
    }
    $ans = $numerator/$denominator;
    echo number_format($ans, 6, '.', '') . PHP_EOL;
}

?>