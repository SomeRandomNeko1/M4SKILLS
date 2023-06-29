<?php
$numbers = array();

for ($i = 0; $i < 6; $i++) {
    $number = rand(1, 10);
    $numbers[] = $number;
}

var_dump($numbers);
?>