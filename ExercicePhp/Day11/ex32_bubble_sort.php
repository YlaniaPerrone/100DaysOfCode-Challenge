<?php
$array = [64, 34, 25, 12, 22, 11, 90];

$lengthArray = count($array);

function bubbleSort(int $lengthArray, array $array) : array
{
    for ($i = 0; $i < $lengthArray; $i++) {
        #$lengthArray(6) - $i(0) - 1 = 5
        #$lengthArray(5) - $i(1) - 1 = 4
        for ($j = 0; $j < $lengthArray -$i -1; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
    return $array;
}

$sort = bubbleSort($lengthArray, $array);
print_r([
    'array init' => $array,
    'array sort' => $sort
]);