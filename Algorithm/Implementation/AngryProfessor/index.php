<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 08/05/16
 * Time: 11:36 PM
 * https://www.hackerrank.com/challenges/angry-professor
 */

$handle = fopen("php://stdin","r");
fscanf($handle,"%d",$t);
for($i = 0; $i < $t; $i++){
    $n = 0;
    $k = 0;
    $a_temp = null;
    $a = array();
    fscanf($handle,"%d %d",$n,$k);
    $a_temp = rtrim(fgets(STDIN), "\n\r");
    $a = explode(" ",$a_temp);
    array_walk($a,'intval');
    $len = sizeof($a);
    $cnt = 0;
    for($j=0; $j<$len; $j++) {
        if($a[$j] < 1) {
            $cnt++;
        }
    }
    if($cnt >= $k) {
        echo "NO\n";
    } else {
        echo "YES\n";
    }
}

?>
