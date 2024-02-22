<?php
//Use a foreach loop to browse the array and count the number of occurrences for each element


$array = [1,2,5,8,2,3,4,5,6,8,1,5];
function searchOccurrenceOfValue($array): array
{
//     return array_count_values($array);
    $occurrence = [];
    foreach ($array as $value) {
       !isset($occurrence[$value]) ?  $occurrence[$value] = 1 : $occurrence[$value]++;
    }
    return $occurrence;
}

$occurrences = searchOccurrenceOfValue($array);

foreach ($occurrences as $value => $count) {
    echo "$value => $count occurrence(s)\n";
}

