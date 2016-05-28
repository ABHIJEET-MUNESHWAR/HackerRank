<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 20/05/16
 * Time: 10:28 PM
 * https://www.hackerrank.com/challenges/the-grid-search
 */

fscanf(STDIN,"%d", $t);
while($t--) {
    $gridRow = 0;
    $gridColumn = 0;
    $patternRow = 0;
    $patternColumn = 0;
    $grid = array();
    $pattern = array();
    fscanf(STDIN, "%d %d", $gridRow, $gridColumn);
    for ($i = 0; $i < $gridRow; $i++) {
        $a_temp = rtrim(fgets(STDIN), "\n\r");
        $a = str_split($a_temp);
        array_walk($a, 'intval');
        $grid[] = $a;
    }
    fscanf(STDIN, "%d %d", $patternRow, $patternColumn);
    for ($i = 0; $i < $patternRow; $i++) {
        $a_temp = rtrim(fgets(STDIN), "\n\r");
        $a = str_split($a_temp);
        array_walk($a, 'intval');
        $pattern[] = $a;
    }
    $isPatternExists = 'NO';
    for ($gridR = 0; $gridR < $gridRow; $gridR++) {
        for ($gridC = 0; $gridC < $gridColumn; $gridC++) {
            if ( ($grid[$gridR][$gridC] == $pattern[0][0]) && ( ($gridColumn - $gridC) >= $patternRow) ){
                $innerGridRow = $gridR;
                for ($patternR = 0; $patternR < $patternRow; $patternR++) {
                    $innerGridColumn = $gridC;
                    for ($patternC = 0; $patternC < $patternColumn; $patternC++) {
                        if ($grid[$innerGridRow][$innerGridColumn] == $pattern[$patternR][$patternC]) {
                            $isPatternExists = 'YES';
                        } else {
                            $isPatternExists = 'NO';
                            break 2;
                        }
                        $innerGridColumn++;
                    }
                    $innerGridRow++;
                }
                if($isPatternExists === 'YES') {
                    break 2;
                }
            }
        }
    }
    echo "$isPatternExists\n";
}

?>