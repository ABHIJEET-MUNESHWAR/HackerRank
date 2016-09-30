<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 19/06/16
 * Time: 11:35 AM
 * https://www.hackerrank.com/challenges/count-luck
 */

function displayHandWave($handWave)
{
    fscanf(STDIN, "%d", $k);
    if ($handWave == $k) {
        echo "Impressed" . PHP_EOL;
    } else {
        echo "Oops!" . PHP_EOL;
    }
}

function dfs($forest, $startI, $startJ, $handWave)
{
    if ($forest[$startI][$startJ] == "*") {
        displayHandWave($handWave);
        return;
    }

    $leftDot = 0;
    $rightDot = 0;
    $upDot = 0;
    $downDot = 0;

    if ((($startI - 1) >= 0) && (($forest[$startI - 1][$startJ] == ".") || ($forest[$startI - 1][$startJ] == "*"))) {
        $upDot++;
    }
    if ((($startI + 1) < count($forest)) && (($forest[$startI + 1][$startJ] == ".") || ($forest[$startI + 1][$startJ] == "*"))) {
        $downDot++;
    }
    if ((($startJ + 1) < count($forest[0])) && (($forest[$startI][$startJ + 1] == ".") || ($forest[$startI][$startJ + 1] == "*"))) {
        $rightDot++;
    }
    if ((($startJ - 1) >= 0) && (($forest[$startI][$startJ - 1] == ".") || ($forest[$startI][$startJ - 1] == "*"))) {
        $leftDot++;
    }
    $surroundingDots = $leftDot + $rightDot + $upDot + $downDot;
    if ($surroundingDots > 1) {
        $handWave++;
    }
    $forest[$startI][$startJ] = "X";
    if ($surroundingDots == 0) {
        return;
    }

    if ($upDot) {
        dfs($forest, $startI - 1, $startJ, $handWave);
    }
    if ($downDot) {
        dfs($forest, $startI + 1, $startJ, $handWave);
    }
    if ($rightDot) {
        dfs($forest, $startI, $startJ + 1, $handWave);
    }
    if ($leftDot) {
        dfs($forest, $startI, $startJ - 1, $handWave);
    }
}

fscanf(STDIN, "%d", $t);
while ($t--) {
    fscanf(STDIN, "%d %d", $row, $column);
    $forest = array();
    $startI = 0;
    $startJ = 0;
    for ($i = 0; $i < $row; $i++) {
        $forest[$i] = str_split(trim(fgets(STDIN)));
        $searchIndex = array_search("M", $forest[$i]);
        if ($searchIndex !== false) {
            $startI = $i;
            $startJ = $searchIndex;
        }
    }
    $handWave = 0;
    dfs($forest, $startI, $startJ, $handWave);
}

?>