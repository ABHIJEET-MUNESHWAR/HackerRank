<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 23/08/16
 * Time: 10:01 PM
 * https://www.hackerrank.com/contests/101hack40/challenges/designer-pdf-viewer
 */

$alphabets = array_map('intval', explode(" ", trim(fgets(STDIN))));
$input = trim(fgets(STDIN));
$len = strlen($input);
$max = 0;
for ($i = 0; $i < $len; $i++) {
    $value = $alphabets[ord($input[$i]) - 97];
    if ($max < $value) {
        $max = $value;
    }
}
echo $max * $len . PHP_EOL;

?>