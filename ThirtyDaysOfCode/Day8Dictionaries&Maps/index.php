<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 01/05/16
 * Time: 5:12 PM
 * https://www.hackerrank.com/challenges/30-dictionaries-and-maps
 */

$_fp = fopen("php://stdin", "r");
$T = intval(fgets(STDIN));
$dict = array();
$inputArr = array();
for($i=0;$i<$T;$i++) {
    $input = rtrim(fgets(STDIN), "\n\r");
    $input = explode(" ", $input);
    $dict[$input[0]] = $input[1];
}

for($i=0;$i<$T;$i++) {
    $inputArr[] = rtrim(fgets(STDIN), "\n\r");
}


for($i=0;$i<$T;$i++) {
    if($inputArr[$i] != "") {

        if(array_key_exists($inputArr[$i], $dict)) {
            echo $inputArr[$i] . "=" . $dict[$inputArr[$i]] . "\n";
        } else {
            echo "Not found\n";
        }


    }

}

?>