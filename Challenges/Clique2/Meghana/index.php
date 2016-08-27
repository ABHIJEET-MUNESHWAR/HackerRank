<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 26/08/16
 * Time: 11:10 PM
 * https://www.hackerrank.com/contests/clique3/challenges/meghana-and-her-pre-birthday-gift
 */

fscanf(STDIN, "%d", $t);
while($t--) {
    $x = 0;
    $k = 0;
    fscanf(STDIN, "%d %d", $x, $k);
    $gender = str_split(trim(fgets(STDIN)));
    $balloons = array_map('intval', explode(" ", trim(fgets(STDIN))));
    $sum = 0;
    for($i=0; $i<$x-1; $i++) {
        if($gender[$i]==="B") {
            $sum+=$balloons[$i];
        }
    }
    if ($sum < $k) {
        echo ("Tihor is Sad :(");
    } else {
        echo ("Meghana is Happy :)");
    }
    echo PHP_EOL;
}

?>