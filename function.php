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

function readFileJason($filePath)
{
    $getData = file_get_contents($filePath);
    return json_decode($getData, true);
}

function saveFileJason($data, $filePath)
{
    $dataDecode = readFileJason($filePath);
    array_push($dataDecode, $data);
    $dataNew = json_encode($dataDecode);
    file_put_contents($filePath, $dataNew);
}
