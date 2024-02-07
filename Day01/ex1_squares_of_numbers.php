<?php

//Displays squares of numbers from 1 to 10
$array = [];

for ($i = 1; $i <= 10; $i++) {
    $array[] = $i ** 2;
}

echo implode(", ", $array);



