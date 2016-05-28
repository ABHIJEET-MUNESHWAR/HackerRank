<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 21/05/16
 * Time: 6:03 PM
 * https://www.hackerrank.com/challenges/caesar-cipher-1
 */

fscanf(STDIN,"%d",$n);
fscanf(STDIN,"%s",$s);
fscanf(STDIN,"%d",$k);
$str = str_split($s);
$len = count($str);
foreach ($str as $item) {
    $value = ord($item);
    if($value>=97 && $value <=122) {
        $value +=$k;
        if($value>122) {
            $value -= 26;
        }
    }
    echo chr($value);
}
echo "\n";
?>