<?php
// Add the elements of a list, multiply them by a given number, then divide the result by the sum of another list.
$list = array();
$list2 = array(1,2,3);
$count = 3;
$nbr = 6;
$lengthArray2 = count($list2);

function readNumberInput($input): int
{
    do {
        $value = readline($input);
    } while (!is_numeric($value));

    return (int)$value;
}

function getValues(int $count): array
{
    return array_map('readNumberInput', array_fill(0, $count, "Enter a number: "));
}

$list = getValues($count);
//print_r($list);

$multiplication = array_map(fn($value) => $value * $nbr, $list);

$division = array_map(fn($value) => $value / $lengthArray2, $multiplication);

print_r([
    'values' => $list,
    'multiply' => $multiplication,
    'division' => $division,
]);