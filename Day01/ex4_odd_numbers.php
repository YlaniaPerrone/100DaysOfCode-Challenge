<?php
//Uses a loop to display odd numbers from 1 to 15
$array = [];

//with for
for ($i = 0; $i <= 15; $i++) {
    if ($i % 2 != 0) {
        $array[] = $i;
    }
}
print_r($array);

//with array_map
$array = array_map(function ($value) {
    return $value % 2 != 0;
}, range(1, 15));

print_r($array);

//only range
$array = range(1, 15, 2);
print_r($array);