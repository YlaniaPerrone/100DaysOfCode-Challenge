<?php

// Generate 3 random numbers according to the length of the array.

$array = [1,2,3,4,5,6,7];
$array2 = [11,12,13,14,15,16,17];
$lengthArray = count($array);
$nbrToDivise = 3;

function generateSegment(int $lengthArray, $nbr): array
{
    $segment = [];
//    1, length => 6   (3-0-1) => 2
//    1, 6-2 => 3
    for ($i = 0; $i < $nbr -1 ; $i++) {
        $rand = rand(1, $lengthArray - ($nbr - $i - 1));
        $segment[] = $rand;
        $lengthArray -= $rand;
    }
    #rest
    $segment[] = $lengthArray;
    return $segment;
}

$seg = generateSegment($lengthArray, $nbrToDivise);
print_r($seg);

function getNumberBySegment(int $nbr, array $array , array $segment): array
{
    $data = [];
    for ($i = 0; $i < $nbr; $i++) {
        $offset = $i == 0 ? 0 : array_key_last($data[$i-1]) +1;
        $data[] = array_slice($array, $offset, $segment[$i] , true);
    }
    return $data;
}

$result = getNumberBySegment($nbrToDivise, $array2, $seg);
print_r($result);

function additionItem( $carry, $item): int
{
   return $carry + $item;
}

// sum first array
$sum = array_reduce($result[0], "additionItem");
print_r($sum);
echo "\n" ;

$data = implode(' + ' , $result[0]);
echo   $data . ' =  ' . $sum;