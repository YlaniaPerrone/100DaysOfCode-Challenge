<?php
// Generate 3 random numbers according to the length of the array.
//Divide the code into functions based on the random number.
// Addition the values from Table 1, then multiply the values from Table 2, take the sum of the results from Table 1 and 2, and divide it by the sum of Table 3.

$array = [1, 2, 3, 4, 5, 6, 7];
$tab2 = [11, 12, 13, 14, 15, 16, 17];
$lengthArray = count($array);
$nbrToDivide = 3;
$add = '+';
$sub = '-';
$multi = '*';

function generateNbrSlice(int $lengthArray, $nbr): array
{
    $nbrSlice = [];
//    1, length => 6   (3-0-1) => 2
//    1, 6-2 => 3
    for ($i = 0; $i < $nbr - 1; $i++) {
        $rand = rand(1, $lengthArray - ($nbr - $i - 1));
        $nbrSlice[] = $rand;
        $lengthArray -= $rand;
    }
    #rest
    $nbrSlice[] = $lengthArray;
    return $nbrSlice;
}

$seg = generateNbrSlice($lengthArray, $nbrToDivide);
print_r($seg);

function getNumberByArray(int $nbr, array $array, array $segment): array
{
    $data = [];
    for ($i = 0; $i < $nbr; $i++) {
        $offset = $i == 0 ? 0 : array_key_last($data[$i - 1]) + 1;
        $data[] = array_slice($array, $offset, $segment[$i], true);
    }
    return $data;
}

$nbrByArray = getNumberByArray($nbrToDivide, $tab2, $seg);
print_r($nbrByArray);

function multiplication($array)
{
    $tot = 1;
    foreach ($array as $value) {
        $tot *= $value;
    }
    return $tot;
}

function division($nbr, $value): float|int
{
    return $value / $nbr;
}

function showResult($array, $op): int
{
    $tot = 0;
    $nbr = 1;
    switch ($op) {
        case '+' :
            $tot = array_sum($array);
            break;
        case '*' :
            $tot = multiplication($array);
            break;
        case '/' :
            $tot = division($nbr, $array);
            break;
    }
    return $tot;
}

function convertArrayToString($array, $op): string
{
    return implode(" $op ", $array);
}

function getOperator($key): string
{
    switch ($key) {
        case 1:
            return '*';
        default :
            return '+';
    }
}

$resultOpe = [];
foreach ($nbrByArray as $key => $value) {
    //first string out : (array1, array2, ...)
//    ${"array" . $key + 1} = $value;

    $operator = getOperator($key);
    echo convertArrayToString($value, $operator) . ' = ' . showResult($value, $operator) . "\n";

    $resultOpe[] = showResult($value, $operator);
    }

print_r($resultOpe);
$result = $resultOpe[0] + $resultOpe[1] / $resultOpe[2];
echo number_format($result, 2, ',', ' ');