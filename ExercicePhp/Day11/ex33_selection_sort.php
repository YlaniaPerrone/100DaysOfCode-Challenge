<?php

$array = [1, 5, 9, 8, 6, 5, 2, 7, 6, 3, 12, 48, 36];
$lengthArray = count($array);

function sectionSort(array $array, int $lengthArray): array
{
    for ($i = 0; $i < $lengthArray - 1; $i++) {
        $min = $i;
        for ($j = $i + 1; $j < $lengthArray; $j++) {
            if ($array[$j] < $array[$min]) {
                $min = $j;
            }
        }
        $temp = $array[$i];
        $array[$i] = $array[$min];
        $array[$min] = $temp;
    }
    return $array;
}

$result = sectionSort($array, $lengthArray);
print_r($result);