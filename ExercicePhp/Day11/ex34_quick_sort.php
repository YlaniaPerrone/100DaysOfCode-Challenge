<?php

$array = [1,5,9,8,6,5,2,7,6,3,12,48,36];
$start= 0;
$end = count($array);

function quickSort(array $array, int $start, int $end): array
{
    if ($end > $start)
    {
        $pivot = partition($array, $start, $end);
        quickSort($array, $start, $pivot - 1);
        quickSort($array, $pivot + 1, $end);
    }
    return $array;
}

function partition($array, $end, $start): int
{
    $pivot = $array[$end];
    $i = $start - 1;
    for ($j = $start; $j < $end; $j++) {
        if ($array[$j] < $pivot) {
            $i++;
            $temp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $temp;
        }
    }
    $temp = $array[$i + 1];
    $array[$i + 1] = $array[$end];
    $array[$end] = $temp;
    return $i + 1;
}

$sort = quickSort($array, $start, $end);
print_r([
    'array init' => $array,
    'array sort' => $sort

]);