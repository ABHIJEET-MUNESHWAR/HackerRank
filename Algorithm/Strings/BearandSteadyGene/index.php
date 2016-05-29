<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 28/05/16
 * Time: 11:21 PM
 * https://www.hackerrank.com/challenges/bear-and-steady-gene
 */

fscanf(STDIN, "%d", $len);
$str = rtrim(fgets(STDIN), "\n\r");
$keys = array("A", "C", "G", "T");
$arr = array_fill_keys($keys, 0);
$requiredNumber = $len / 4;
$subStringLength = 0;
$replaceA = $replaceC = $replaceG = $replaceT = 0;
$countA = $countC = $countG = $countT = 0;
$stopIndex = 0;
for ($i = 0; $i < $len; $i++) {
    $arr[$str[$i]]++;
}
if (($arr["A"] == $arr["C"]) && ($arr["C"] == $arr["G"]) && ($arr["G"] == $arr["T"])) {
    echo $subStringLength . PHP_EOL;
}
if ($arr["A"] > $requiredNumber) {
    $replaceA = $arr["A"] - $requiredNumber;
}
if ($arr["C"] > $requiredNumber) {
    $replaceA = $arr["C"] - $requiredNumber;
}
if ($arr["G"] > $requiredNumber) {
    $replaceA = $arr["G"] - $requiredNumber;
}
if ($arr["T"] > $requiredNumber) {
    $replaceA = $arr["T"] - $requiredNumber;
}
for ($i = 0; $i < $len; $i++) {
    if ($str[$i] === "A") {
        $countA++;
    } elseif ($str[$i] === "C") {
        $countC++;
    } elseif ($str[$i] === "G") {
        $countG++;
    } else {
        $countT++;
    }
    if (($countA >= $replaceA) && ($countC >= $replaceC) && ($countG >= $replaceG) && ($countT >= $replaceT)) {
        break;
    }
}
$stopIndex = $i;
$subStringLength = $stopIndex + 1;
$startIndex = 0;
while (1) {
    while (1) {
        if ($str[$startIndex] === "A") {
            $countA--;
        } elseif ($str[$startIndex] === "C") {
            $countC--;
        } elseif ($str[$startIndex] === "G") {
            $countG--;
        } else {
            $countT--;
        }
        $startIndex++;
        if (($countA >= $replaceA) && ($countC >= $replaceC) && ($countG >= $replaceG) && ($countT >= $replaceT)) {
            $subStringLength = $stopIndex - $startIndex + 1;
        } else {
            break;
        }
    }
    $stopIndex++;
    if ($stopIndex > $len-1) {
        break;
    }
    if ($str[$stopIndex] === "A") {
        $countA++;
    } elseif ($str[$stopIndex] === "C") {
        $countC++;
    } elseif ($str[$stopIndex] === "G") {
        $countG++;
    } else {
        $countT++;
    }
}
echo $subStringLength . PHP_EOL;
?>