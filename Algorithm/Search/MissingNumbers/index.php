<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 18/06/16
 * Time: 7:58 AM
 * https://www.hackerrank.com/challenges/missing-numbers
 */

$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp,"%d",$n1);
$s1=fgets($_fp);

fscanf($_fp,"%d",$n2);
$s2=fgets($_fp);

$arr1=array_count_values(explode(" ",trim($s1)));
$arr2=array_count_values(explode(" ",trim($s2)));
ksort($arr2);
foreach($arr2 as $key=>$value)
{
    if($value!=@$arr1[$key])
        echo $key." ";
}
?>