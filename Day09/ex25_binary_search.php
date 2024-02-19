<?php

$array = [1, 5, 9, 13, 18, 24, 27, 36];

$nbrStart = 0;

$nbrEnd = count($array) - 1;


function getRandomNumberOfArray($array)
{
    return $array[array_rand($array)];
}

$nbrToFind = getRandomNumberOfArray($array);

function searchBinary($nbrStart, $nbrEnd, $array, $nbrToFind): int
{
    while ($nbrStart <= $nbrEnd) {
        $center = floor(($nbrStart + $nbrEnd) / 2);

        if ($nbrToFind == $array[$center]) {
            return $center;
        } elseif ($nbrToFind < $array[$center]) {
            $nbrEnd = $center - 1;
        } else {
            $nbrStart = $center + 1;
        }
    }
    #if no result
    return -1;
}

$result = searchBinary($nbrStart, $nbrEnd, $array, $nbrToFind);

echo $result != -1 ? "$nbrToFind is in position " . $result +1    : "  $nbrToFind is not in array";

