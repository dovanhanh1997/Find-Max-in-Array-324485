<?php

function findMax($array)
{
    $max = $array[0];
    for ($i = 0; $i < count($array); $i++) {
        if ($max < $array[$i]) {
            $max = $array[$i];
        }
    }
    return $max;
}

function maxArray($array)
{
    $maxArray = [];
    foreach ($array as $key => $value):
        array_push($maxArray, findMax($value));
    endforeach;
    return $maxArray;
}

function maxValue($array){
    return findMax(maxArray($array));
}

function findIndexValue($maxNumber,$array){
    for ($i = 0; $i < count($array); $i++):
        foreach ($array[$i] as $key => $value) {
        if ($maxNumber == $value){
            echo '<br>'.'X position: '.$i.'<br>';
            echo 'Y position: '.$key;
        }
        }
        endfor;
}

