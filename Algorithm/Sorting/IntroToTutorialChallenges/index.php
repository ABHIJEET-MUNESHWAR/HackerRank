<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 02/06/16
 * Time: 11:56 PM
 * https://www.hackerrank.com/challenges/tutorial-intro
 */

fscanf(STDIN, "%d", $key);
fscanf(STDIN, "%d", $len);
$a_temp = rtrim(fgets(STDIN), "\n\r");
$a = explode(" ", $a_temp);
array_walk($a, 'intval');
for($i=0; $i<$len; $i++) {
    if($a[$i] == $key) {
        echo $i . PHP_EOL;
        break;
    }
}

?>