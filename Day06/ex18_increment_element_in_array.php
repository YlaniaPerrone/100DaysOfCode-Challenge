<?php

$array = [2, 4, 5, 8, 9, 12, 15, 22];
$newArray = [];
$count = 1;
function incrementElementInArray(array $array, array $saveData, int $count): array
{
    for ($i = 0; $i < count($array); $i++) {
        $saveData[] += $array[$i] + $count;
        $count++;
    }
    return $saveData;
}
$result = incrementElementInArray($array, $newArray, $count);
print_r($result);



//function recursiv(array $array, array $newArray)
//{
//
//}

