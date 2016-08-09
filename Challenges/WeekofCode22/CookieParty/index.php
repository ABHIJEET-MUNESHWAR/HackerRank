<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 08/08/16
 * Time: 10:35 PM
 * https://www.hackerrank.com/contests/w22/challenges/cookie-party
 */
$guests = 0;
$cookies = 0;
fscanf(STDIN, "%d %d", $guests, $cookies);
$additionalCookies = $cookies % $guests;
if($additionalCookies) {
    $additionalCookies = $guests - $additionalCookies;
}
echo $additionalCookies . PHP_EOL;

?>