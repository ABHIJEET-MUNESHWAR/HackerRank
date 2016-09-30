<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 19/05/16
 * Time: 9:52 PM
 * https://www.hackerrank.com/challenges/bear-and-workbook
 */

$noOfChapters = 0;
$maxProbPerPage = 0;
fscanf(STDIN, "%d %d", $noOfChapters, $maxProbPerPage);
$a_temp = rtrim(fgets(STDIN), "\n\r");
$problemsPerChapter = explode(" ", $a_temp);
array_walk($problemsPerChapter, 'intval');
$currentPageNo = 1;
$match = 0;
foreach ($problemsPerChapter as $problemPerChapter) {
    if ($problemPerChapter <= $maxProbPerPage) {
        if ($currentPageNo <= $problemPerChapter) {
            $match++;
        }
        $currentPageNo++;
    } else {
        $pagesCovered = ceil($problemPerChapter / $maxProbPerPage);
        for ($i = 0; $i < $pagesCovered; $i++) {
            if ((($maxProbPerPage * $i + 1) <= $currentPageNo) && ($currentPageNo <= ($maxProbPerPage * ($i + 1)))) {
                if ((($maxProbPerPage * $i + 1) <= $problemPerChapter) && ($problemPerChapter <= ($maxProbPerPage * ($i + 1)))) {
                    if ($currentPageNo <= $problemPerChapter) {
                        $match++;
                    }
                } else {
                    $match++;
                }
            }
            $currentPageNo++;
        }
    }
}
echo $match . "\n";
?>