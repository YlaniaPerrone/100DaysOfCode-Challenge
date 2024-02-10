<?php

$arrayNbrs  = [1,5,6,4,8,9,5,6,4,45,789];

echo array_sum($arrayNbrs) . "\n";

//with loop for

$totalElement = 0;
function sumElementsInArray(array $array, int $newArray) : int
{
    for ($i = 0; $i < count($array); $i++) {
        $newArray += $array[$i];
    }
    return $newArray;
}

function showAnswer(array $array, int $total) : string
{
    return implode(' + ', $array) .  ' = ' . $total;
}

$sumElement = sumElementsInArray($arrayNbrs, $totalElement);
$test = showAnswer($arrayNbrs, $sumElement);
print_r($test);


