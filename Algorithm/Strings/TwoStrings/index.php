<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 28/05/16
 * Time: 8:32 PM
 * https://www.hackerrank.com/challenges/two-strings
 */

fscanf(STDIN, "%d", $t);
while ($t--) {
    $str1 = rtrim(fgets(STDIN), "\n\r");
    $str2 = rtrim(fgets(STDIN), "\n\r");
    $alphabets = str_split("abcdefghijklmnopqrstuvwxyz");
    $isSubStr = "NO";
    foreach ($alphabets as $char) {
        if ((strpos($str1, $char)!==false) && (strpos($str2, $char)!=false)) {
            $isSubStr = "YES";
            break;
        }
    }
    echo $isSubStr . "\n";
}

?>