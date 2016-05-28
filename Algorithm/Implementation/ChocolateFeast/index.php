<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 18/05/16
 * Time: 6:22 PM
 * https://www.hackerrank.com/challenges/chocolate-feast
 */

fscanf(STDIN, "%d", $t);
$l = $t;
$arr = array();
while ($t--) {
    $a_temp = rtrim(fgets(STDIN), "\n\r");
    $a = explode(" ", $a_temp);
    array_walk($a, 'intval');
    $arr[] = $a;
}
for ($i = 0; $i < $l; $i++) {
    $m = $arr[$i][0];
    $c = $arr[$i][1];
    $wG = $arr[$i][2];
    $eat = intval($m / $c);
    $wH = $eat;
    while ($wH >= $wG) {
        $nW = intval($wH / $wG);
        $eat += $nW;
        $aW = $wH % $wG;
        $wH = $nW + $aW;
    }
    echo $eat . "\n";
}

?>