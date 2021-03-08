<?php

/*

Shehab-Habila

Binary search
---------------
- it's good for big arrays.
- the array must be sorted.
- Best case: steps=1
*/

$values = array(5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21); // 13 is the middle
// 17 value
$valuesNum = count($values);
$wantedValue = 13;
$steps = 0;

var_dump($values);
echo "<br>wanted value is $wantedValue <br>"; // printing wanted value

$start = 0;
$end = $valuesNum-1;
$middle = $start+(($end-$start)/2);

while ($end >= $start) {
    $middle = $start+(($end-$start)/2);
    if($values[$middle]==$wantedValue){
        echo "The index of '$wantedValue' is $middle";
        $end = $start-1;
    }
    elseif($values[$middle] > $wantedValue) {
        $end = $middle;
    }
    else {
        $start = $middle;
    }
    $steps++;
}
echo "<br> The number of steps is: $steps";
