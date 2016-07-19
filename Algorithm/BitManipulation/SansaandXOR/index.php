<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 18/07/16
 * Time: 11:14 PM
 * https://www.hackerrank.com/challenges/sansa-and-xor
 */

fscanf(STDIN, "%d", $t);
while($t--) {
    fscanf(STDIN, "%d", $len);
    $arr = array_map('intval', explode(" ", trim(fgets(STDIN))));
    if($len%2) {
        $xor = 0;
        for($i=0; $i<$len; $i++) {
            if($i%2 === 0) {
                $xor = $xor ^ $arr[$i];
            }
        }
        echo $xor . PHP_EOL;
    } else {
        echo 0 . PHP_EOL;
    }
}

?>