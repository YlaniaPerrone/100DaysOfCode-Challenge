<?php

$arrayData = [];
$count = 4;

function getRandomNbr(): int
{
    return rand(1, 5);
}

function addIteemsInArray(int $nbr, array $array): array
{
    $array[] = $nbr;
    return $array;
}

function generateArray(int $value, array $array): array
{
    while (count($array) < $value) {
        $nbrRand = getRandomNbr();
        $array = addIteemsInArray($nbrRand, $array);

    }
    return $array;
}


function sumOfItemsInTheTable(array $array): float|int
{
    for ($i = 0; $i < count($array); $i++) {
        $sumValueInArray = array_sum($array);
    }
    return $sumValueInArray;
}

$arrayD = generateArray($count, $arrayData);
$result = sumOfItemsInTheTable($arrayD);

print_r([
     $arrayD,
    'resultat' => $result
]);






