<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 17/07/16
 * Time: 1:49 AM
 * https://www.hackerrank.com/challenges/2s-complement
 */

fscanf(STDIN, "%d", $t);
while ($t--) {
    fscanf(STDIN, "%d %d", $lb, $ub);
    $once = 0;
    for ($i = $lb; $i <= $ub; $i++) {
        $bin = decbin($i);
        if($i<0) {
            $bin = substr("$bin", 32, 64);
        } else {
            $bin = str_pad($bin,(32-strlen($bin)),"0", STR_PAD_LEFT);
        }
        $once += substr_count($bin, '1');
    }
    echo $once . PHP_EOL;
}

?>