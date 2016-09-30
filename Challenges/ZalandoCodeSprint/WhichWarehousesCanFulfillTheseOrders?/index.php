<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 05/06/16
 * Time: 7:09 AM
 * https://www.hackerrank.com/contests/zalando-codesprint/challenges/which-warehouses-can-fullfill-these-orders
 */
$wareHouses = 0;
$orders = 0;
$products = 0;
$wareHousesProductsMatrix = array();
fscanf(STDIN, "%d %d %d", $wareHouses, $orders, $products);
for ($i = 0; $i < $wareHouses; $i++) {
    $a_temp = rtrim(fgets(STDIN), "\n\r");
    $a = explode(" ", $a_temp);
    array_walk($a, 'intval');
    $wareHousesProductsMatrix[] = $a;
}
while ($orders--) {
    $a_temp = rtrim(fgets(STDIN), "\n\r");
    $ordersArray = explode(" ", $a_temp);
    array_walk($ordersArray, 'intval');
    $totalWareHouses = 0;
    foreach ($ordersArray as $key => $value) {
        for ($i = 0; $i < $wareHouses; $i++) {
            $wareHousesItem = $wareHousesProductsMatrix[$i][$key];
            if (($wareHousesItem) && ($value) && ($wareHousesItem >= $value)) {
                $totalWareHouses++;
                break;
            }
        }
    }
    if(!$totalWareHouses) {
        echo "-1" . PHP_EOL;
    } else {
        echo $totalWareHouses . PHP_EOL;
    }
}