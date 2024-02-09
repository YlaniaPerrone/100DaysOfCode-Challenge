<?php
//Random number generator with equality check

$data = [];
$numberInterantion = 3;

function getRandomNbrs()
{
    return rand(1, 10);
}


function insertValueIfNotInArray(int $value, array $data): array
{
    if (!in_array($value, $data)) {
        $data[] = $value;
    }
    return $data;
}


function generatArrayRandomNbr(array $array, int $value): array
{
    while (count($array) < $value) {
        $nbrRand = getRandomNbrs();
        $array = insertValueIfNotInArray($nbrRand, $array);
    }

    return $array;
}


$result = generatArrayRandomNbr($data, $numberInterantion);
print_r($result);