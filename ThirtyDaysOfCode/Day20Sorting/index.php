<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 07/05/16
 * Time: 1:32 PM
 * https://www.hackerrank.com/challenges/30-sorting
 */

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$a_temp = fgets($handle);
$a = explode(" ",$a_temp);
array_walk($a,'intval');
$nos = 0;
$bound = $n - 1;
for ($i = 0; $i < $n - 1; $i++) {
    $numberOfSwaps = 0;
    for ($j = 0; $j < $bound; $j++) {
        if ($a[$j] > $a[$j + 1]) {
            $t = $a[$j];
            $a[$j] = $a[$j+1];
            $a[$j+1] = $t;
            $numberOfSwaps++;
            $nos++;
        }
    }
    $bound = $j - 1;

    if ($numberOfSwaps == 0) {
        break;
    }
}
echo "Array is sorted in $nos swaps.\n";
echo "First Element: " . $a[0] . "\n";
echo "Last Element: " . $a[$n-1];
?>