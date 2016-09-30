<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 09/08/16
 * Time: 8:37 PM
 * https://www.hackerrank.com/contests/w22/challenges/sequential-prefix-function
 */

$j = 0;// length of the previous longest prefix suffix
$lps = array();
$lps[0] = 0; // lps[0] is always 0
$i = 1;
$lastI = 0;
$lastJ = 0;
$lastLPS = array();
fscanf(STDIN, "%d", $t);
$sequence = "";
while ($t--) {
    $temp = explode(" ", trim(fgets(STDIN)));
    $operation = $temp[0];
    switch ($operation) {
        case "+":
            $sequence = $sequence . $temp[1];
            break;
        case "-";
            $sequence = substr($sequence, 0, -1);
            array_pop($lps);
            $i = $lastI;
            $j = $lastJ;
            break;
    }
    $n = strlen($sequence);
    if (($n === 0) || ($n === 1)) {
        echo 0;
    } else {
        $pattern = $sequence;
        while ($i < strlen($pattern)) {
            if ($pattern[$j] == $pattern[$i]) {
                $lps[$i] = $j + 1;
                $lastJ = $j;
                $lastI = $i;
                $i += 1;
                $j += 1;
            } else {// (pat[i] != pat[j])
                if ($j != 0) {
                    $lastJ = $j;
                    $j = $lps[$j - 1];
                } else { // if (j == 0)
                    $lastI = $i;
                    $lps[$i] = 0;
                    $i++;
                }
            }
        }
        $answer = end($lps);
        echo $answer;
    }
    echo PHP_EOL;
}
?>