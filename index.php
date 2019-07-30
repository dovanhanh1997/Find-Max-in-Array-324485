<?php
include 'function.php';
$maxArray = [];

$array = [
    [6, 5, 4, 9, 8, 3, 2],
    [19, 8, 7, 35, 3, 2, 1],
    [3, 2, 1, 5, 6, 4, 29]
];
?> Double Matrix <br><?php
for ($i = 0; $i < count($array); $i++):
    echo '<br>';
    foreach ($array[$i] as $key => $value) {
        echo $value . ' ';
    }
endfor;
echo '<br>';
$maxValue = maxValue($array);
echo '<br> Max value is: '.$maxValue;
findIndexValue($maxValue,$array);