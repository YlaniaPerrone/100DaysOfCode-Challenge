<?php
//Uses a loop to display multiples of 5 up to 50

$array = [];
$nbr = 5;

for ($i = 1; $i <= 10 ; $i++) {
    $array[] = $i*$nbr;
}

echo implode(", " , $array);