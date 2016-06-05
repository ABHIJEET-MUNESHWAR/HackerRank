<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 05/06/16
 * Time: 9:27 AM
 * https://www.hackerrank.com/tests/5i754liq0c0/questions/e74ojct5
 */

function checkIfValidBrace($values)
{
    $len = count($values);
    $arr = array();
    for ($i = 0; $i < $len; $i++) {
        $brace = $values[$i];
        $braceArray = str_split($brace);
        $sampleArray = array();
        $isValidBrace = true;
        $braceArrayLength = count($braceArray);
        if ($braceArrayLength % 2) {
            $isValidBrace = false;
        } else {
            foreach ($braceArray as $key => $value) {
                switch ($value) {
                    case "(":
                        array_push($sampleArray, "(");
                        break;
                    case "{":
                        array_push($sampleArray, "{");
                        break;
                    case "[":
                        array_push($sampleArray, "[");
                        break;
                    case ")":
                        $char = array_pop($sampleArray);
                        if ($char !== "(") {
                            $isValidBrace = false;
                        }
                        break;
                    case "}":
                        $char = array_pop($sampleArray);
                        if ($char !== "{") {
                            $isValidBrace = false;
                        }
                        break;
                    case "]":
                        $char = array_pop($sampleArray);
                        if ($char !== "[") {
                            $isValidBrace = false;
                        }
                        break;
                }
            }
        }
        if ($isValidBrace) {
            $arr[$i] = "YES";
        } else {
            $arr[$i] = "NO";
        }
    }
    return $arr;
}

fscanf(STDIN, "%d", $t);
$len = $t;
$str = array();
while ($t--) {
    fscanf(STDIN, "%s", $str[]);
}
$arr = checkIfValidBrace($str);
for ($i = 0; $i < $len; $i++) {
    echo $arr[$i] . PHP_EOL;
}

?>