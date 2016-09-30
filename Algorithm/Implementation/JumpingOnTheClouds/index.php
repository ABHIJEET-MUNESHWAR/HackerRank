<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 21/07/16
 * Time: 10:31 PM
 * https://www.hackerrank.com/challenges/jumping-on-the-clouds
 */

fscanf(STDIN, "%d", $len);
$arr = array_map('intval', explode(" ", trim(fgets(STDIN))));
$jumps = -1;
for ($i = 0; $i < $len; $i++, $jumps++) {
    if (($i + 2 < $len) && ($arr[$i + 2] == 0)) {
        $i++;
    }
}

echo $jumps . PHP_EOL;

?>