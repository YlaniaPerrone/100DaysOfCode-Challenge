<?php

$array = [1,5,9,8,6,5,2,7,6,3,12,48,36];
$length  = count($array);

function insertionSort(array $array, int $length): array
{
    for ($i = 1; $i < $length; $i++) {
        $key = $array[$i];
        $j = $i - 1;
        while ($j >= 0 && $array[$j] > $key) {
            $array[$j + 1] = $array[$j];
            $j = $j - 1;
        }
        $array[$j + 1] = $key;
    }
    return $array;
}

$sort = insertionSort($array, $length);
print_r([
    'array init' => $array,
    'array sort' => $sort

]);