<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 09/08/16
 * Time: 8:37 PM
 * https://www.hackerrank.com/contests/w22/challenges/submask-queries-
 */

function getAllSubset($set, $setSize, $powerSetSize)
{
    $powerSetArr = array();
    for ($counter = 0; $counter < $powerSetSize; $counter++) {
        $index = "";
        for ($j = 0; $j < $setSize; $j++) {
            if ($counter & (1 << $j)) {
                $index .= $set[$j];
            }
        }
        $powerSetArr[$index] = 0;
    }
    return $powerSetArr;
}

fscanf(STDIN, "%d %d", $setSize, $queries);
$arr = array();
for ($i = 0; $i < $setSize; $i++) {
    $arr[$i] = $i + 1;
}
$powerSetSize = pow(2, $setSize);
$powerSetArr = getAllSubset($arr, $setSize, $powerSetSize);
$x = 0;
while ($queries--) {
    $tempArr = explode(" ", trim(fgets(STDIN)));
    $operation = intval($tempArr[0]);
    if ($operation !== 3) {
        $x = intval($tempArr[1]);
        $uMask = $tempArr[2];
    } else {
        $uMask = $tempArr[1];
    }
    $uMaskArray = array_map('intval', str_split($uMask));
    if($operation === 3) {
        for ($i = 0, $j = 0; $i < $setSize; $i++) {
            if ($uMaskArray[$i]) {
                echo $powerSetArr[$i + 1] . PHP_EOL;
                break;
            }
        }
    } else {
        $maskedArray = array();
        for ($i = 0, $j = 0; $i < $setSize; $i++) {
            if ($uMaskArray[$i]) {
                $maskedArray[$j++] = ($i + 1);
            }
        }
        $maskedArraySize = count($maskedArray);
        $powerMaskedSetSize = pow(2, $maskedArraySize);
        $powerMaskedArray = getAllSubset($maskedArray, $maskedArraySize, $powerMaskedSetSize);
        if($operation === 1) {
            foreach ($powerMaskedArray as $key => $value) {
                $powerSetArr[$key] = $x;
            }
        } else {
            foreach ($powerMaskedArray as $key => $value) {
                $powerSetArr[$key] ^= $x;
            }
        }
    }
}

?>