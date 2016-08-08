<?php
/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 07/08/16
 * Time: 3:43 PM
 * https://www.hackerrank.com/contests/booking-passions-hacked-backend/challenges/a-couple-and-their-passions
 */

fscanf(STDIN, "%d", $totalPeople);
$peoplePassion = array();
$cityPassion = array();
$cityLocation = array();
$cityCuts = array();
$cities = array();
$matchingCities = array();
for ($i = 0; $i < $totalPeople; $i++) {
    $arr = explode(" ", trim(fgets(STDIN)));
    array_shift($arr);
    $peoplePassion[$i] = $arr;
}
fscanf(STDIN, "%d", $totalPlaces);
for ($k = 0; $k < $totalPlaces; $k++) {
    $arr = explode(" ", trim(fgets(STDIN)));
    $len = count($arr);
    $cities[$i] = $arr[0];
    $cityLocation[$arr[0]]["latitude"] = $arr[1];
    $cityLocation[$arr[0]]["longitude"] = $arr[2];
    $totalCityPassion = $arr[3];
    for ($i = 4, $j = 0; $i < $len; $i++) {
        $cityPassion[$arr[0]][$j++] = $arr[$i];
    }
}
for ($p = 0; $p < $totalPeople; $p++) {
    $personPassions = $peoplePassion[$p];
    foreach ($personPassions as $personPassionKey => $personPassion) {
        foreach ($cityPassion as $citiesKey => $cities) {
            foreach ($cities as $cPassionKey => $cPassion) {
                if ($personPassion === $cPassion) {
                    if (isset($cityCuts[$p][$citiesKey])) {
                        $cityCuts[$p][$citiesKey]++;
                    } else {
                        $cityCuts[$p][$citiesKey] = 1;
                    }
                }
            }
        }
    }
}
for ($c = 0; $c < $totalPeople; $c++) {
    $cc = $cityCuts[$c];
    ksort($cc);
    asort($cc);
    $cityCuts[$c] = $cc;
}
for ($c = 0; $c < $totalPeople; $c++) {
    $cc = $cityCuts[$c];
    foreach ($cc as $key => $value) {
        if (isset($matchingCities[$key])) {
            $matchingCities[$key] += $value;
        } else {
            $matchingCities[$key] = $value;
        }
    }
}
$matchingCitiesLen = count($matchingCities);
$finalArr = array_slice($matchingCities, $matchingCitiesLen - 2, 2, true);
ksort($finalArr);
foreach ($finalArr as $key => $value) {
    echo $key . " ";
}
echo PHP_EOL;
?>