<?php
//Displays cubes of numbers 1 to 5

$array = [];
//with for
foreach (range(1, 5) as $value) {
    $array[] = $value ** 3;
}

// with array_map
$array = array_map(function ($value) {
    return $value ** 3;
}, range(1, 5));

print_r($array);