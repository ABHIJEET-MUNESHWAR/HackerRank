<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 09/08/16
 * Time: 8:37 PM
 * https://www.hackerrank.com/contests/w22/challenges/sequential-prefix-function
 */

function computeLPSArray($pat, $lps)
{
    $j = 0;  // length of the previous longest prefix suffix
    $lps[0] = 0; // lps[0] is always 0
    $i = 1;

    // the loop calculates lps[i] for i = 1 to (pat.length() - 1)
    while ($i < strlen($pat)) {
        if ($pat[$j] == $pat[$i]) {
            $lps[$i] = $j + 1;
            $i += 1;
            $j += 1;
        } else // (pat[i] != pat[j])
        {
            if ($j != 0) {
                $j = $lps[$j - 1];
            } else // if (j == 0)
            {
                $lps[$i] = 0;
                $i++;
            }
        }
    }
    return end($lps);
}

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
            break;
    }
    $n = strlen($sequence);
    if (($n === 0) || ($n === 1)) {
        echo 0;
    } else {
        $lps = array();
        $pattern = $sequence;
        $answer = computeLPSArray($pattern, $lps);
        echo $answer;
    }
    echo PHP_EOL;
}

?>