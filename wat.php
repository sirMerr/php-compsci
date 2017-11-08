<?php
echo "<table>
    <caption>Days in a month</caption>";
$months = ["January", "February", "March", "April", "May"];

$dayMonths = array();

$days = [30, 31, 28];

foreach ($months as $k=>$month) {
    if ($month != "February") {
        $dayMonths[$month] = $k%2==0?30:31;
    } else {
        $dayMonths[$month] = 28;
    }
}

foreach ($dayMonths as $k=>$days) {
    echo "<caption>$k: $days</caption>";
}
echo "</table>";

/**
 * Short code question #2
 * @param $length
 */
function getMonths($length) {
    $monthsToDisplay = '';
    $dayMonths = $GLOBALS["dayMonths"];
    foreach ($dayMonths as $k=>$days) {
        if ($days == $length) {
            $monthsToDisplay .= $k." ";
        }
    }
    echo $monthsToDisplay;
}

getMonths(30);




