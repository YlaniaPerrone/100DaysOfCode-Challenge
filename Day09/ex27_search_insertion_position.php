<?php
//Return the index where the target value should be inserted to maintain the order of the array.

function getRandomNumber($max): int
{
    return rand(1,$max);
}

function saveInArray(int $max, int $count): array
{
    $array = [];
    while (count($array) < $count) {
        $nbrRand = getRandomNumber($max);
        if (!in_array($nbrRand, $array)) {
            $array[] = $nbrRand;
        }
    }
    sort($array);
    return $array;

}

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
    return $nbrEnd;
}


function addNbrInArray(array $array, int $nbrToAdd, $nbrLeft, $nbrRight): array
{
    $index = searchBinary($nbrLeft, $nbrRight, $array, $nbrToAdd);
    if (!in_array($nbrToAdd, $array)) {
        array_splice($array, $index + 1, 0, $nbrToAdd);
    } else {
        echo "Number is already in the array \n";
    }
    return $array;
}

$array = [];
$max = 25;
$count = 10;


$nbrToAdd = getRandomNumber($max);
echo "number to add  : $nbrToAdd  \n";
//echo $nbrToAdd;
$array = saveInArray($max, $count);
echo "array init : " . implode(", ", $array) . "\n";

$nbrLeft = 0;
$nbrRight = count($array) -1;
$newArray = addNbrInArray($array, $nbrToAdd, $nbrLeft, $nbrRight);
echo "new array : " . implode(", ", $newArray);

