<?php

function showArray($array) {
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

function fillArrayWithNumbers($length = 10, $min = 0, $max = 100)
{
    $numbers = array();
    
    for ($i = 0; $i < $length; $i++) {
        $numbers[] = rand($min, $max);
    }
    
    return $numbers;
}

// Voorbeeld
$myArray = fillArrayWithNumbers(5, 1, 10);
showArray($myArray);
?>