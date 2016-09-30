<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 28/05/16
 * Time: 9:21 PM
 * https://www.hackerrank.com/challenges/game-of-thrones
 */

$input = rtrim(fgets(STDIN), "\n\r");
$alphabets = array_fill(0, 26, 0);
$len = strlen($input);
for ($i = 0; $i < $len; $i++) {
    $value = ord($input[$i]) - 97;
    $alphabets[$value]++;
}
$odds = 0;
for ($i = 0; $i < 26; $i++) {
    if ($alphabets[$i]%2) {
        $odds++;
    }
}
if(($len%2===0) && ($odds === 0)) {
    echo "YES" . PHP_EOL;
} else {
    if(($len%2) && ($odds === 1)) {
        echo "YES" . PHP_EOL;
    } else {
        echo "NO" . PHP_EOL;
    }
}

?>