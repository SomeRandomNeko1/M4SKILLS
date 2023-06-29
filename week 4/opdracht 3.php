<?php
function showArray($array) {
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

$myArray = array("1", "2", "3", "4", "5", "6");

showArray($myArray);
?>