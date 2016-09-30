<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 16/06/16
 * Time: 10:52 PM
 * https://www.hackerrank.com/challenges/sherlock-and-array
 */
fscanf(STDIN, "%d", $t);
while ($t--) {
    fscanf(STDIN, "%d", $len);
    $a_temp = rtrim(fgets(STDIN), "\n\r");
    $arr = explode(" ", $a_temp);
    array_walk($arr, 'intval');
    $isExists = false;
    if ($len == 1) {
        echo "YES" . PHP_EOL;
    } else {
        $total = 0;
        foreach ($arr as $item) {
            $total += $item;
        }
        $sum = 0;
        for ($i = 0; $i < $len; $i++) {
            $sum += $arr[$i];
            if ($sum === ($total - $sum - $arr[$i + 1])) {
                $isExists = true;
                break;
            }
        }
        if ($isExists) {
            echo "YES" . PHP_EOL;
        } else {
            echo "NO" . PHP_EOL;
        }
    }
}

?>