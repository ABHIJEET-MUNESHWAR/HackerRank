<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 24/04/16
 * Time: 1:52 PM
 */
$_fp = fopen("php://stdin", "r");
$T = intval(fgets(STDIN));
$str = array();
for($i=0;$i<$T;$i++) {
    $str[] = rtrim(fgets(STDIN), "\n\r");
}
for($i=0;$i<$T;$i++) {
    $t = $str[$i];
    $len = strlen($t);
    $strArr = str_split($str[$i]);
    $a1 = null;
    $a2 = null;
    for($j=0, $k = 1; $j< $len; $j++, $k++) {
        $a1 = $a1 . $strArr[$j++];
        if($k < $len) {
            $a2 = $a2 . $strArr[$k++];
        }
    }
    echo($a1) . " ";
    echo($a2) . "\n";
}
?>