<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 24/05/16
 * Time: 10:58 PM
 * https://www.hackerrank.com/challenges/new-year-chaos
 */

fscanf(STDIN, "%d", $T);
for ($a0 = 0; $a0 < $T; $a0++) {
    fscanf(STDIN, "%d", $n);
    $q_temp = rtrim(fgets(STDIN), "\n\r");
    $q = explode(" ", $q_temp);
    array_walk($q, 'intval');
    $bribes = 0;
    $bribeCount = 0;
    $bound = $n - 1;
    for ($i = 0; $i < $n; $i++) {
        $bribeCount = 0;
        for ($j = $i + 1; $j < $n; $j++) {
            if ($q[$i] > $q[$j]) {
                $bribeCount++;
            }
            if($bribeCount > 2) {
                break 2;
            }
        }
        $bribes += $bribeCount;
    }
    if ($bribeCount > 2) {
        echo "Too chaotic\n";
    } else {
        echo $bribes . "\n";
    }
}

?>