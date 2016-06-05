<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 05/06/16
 * Time: 8:32 AM
 * https://www.hackerrank.com/tests/5i754liq0c0/questions/45boj9sd
 */

function check_IP($s) {
    $len = count($s);
    $arr = array();
    for($i=0; $i<$len; $i++) {
        $ip = $s[$i];
        $isValidIPv4 = filter_var($ip, FILTER_VALIDATE_IP,FILTER_FLAG_IPV4);
        $isValidIPv6 = filter_var($ip, FILTER_VALIDATE_IP,FILTER_FLAG_IPV6);
        if($isValidIPv4) {
            $arr[$i] = "IPv4";
        }elseif($isValidIPv6) {
            $arr[$i] = "IPv6";
        }else {
            $arr[$i] = "Neither";
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
$arr = check_IP($str);
for($i=0; $i<$len; $i++) {
    echo $arr[$i] . PHP_EOL;
}
?>