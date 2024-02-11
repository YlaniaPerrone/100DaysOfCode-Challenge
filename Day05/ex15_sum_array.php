<?php

$array = [1, 5, 8, 45, 25, 12,36];

function sumArray(array $array) : int
{
    return count($array) < 1 ? 0 : $array[0] + sumArray(array_slice($array,1));
}

$result = sumArray($array);
echo $result;