<?php
// generate Random number and division based on their parity (even or odd) and size (divide even and  by random number)

$list = [];
$min = 2;
$max = 15;
$count = 10;
$nbrDevide = 4;

function getRandomNumber(int $count): int
{
    return rand(1, $count);
}

function saveInArray(int $count, int $min, int $max): array
{
    return array_map('getRandomNumber', array_fill($min, $count, $max));
}

$list = saveInArray($count, $min, $max);


$odd = [];
$even = [];

foreach ($list as $item) {
    if ($item % 2 == 0) {
        $even[] = $item;
    } else {
        $odd[] = $item;
    }
}

function divisionItem($array, $divide): array
{
    return array_map(function ($num) use ($divide) {
       return  $num / $divide;
    }, $array);
}


$getNbr = getRandomNumber($nbrDevide);
print_r($getNbr);

$even_divisions = divisionItem($even, $getNbr);
$odd_divisions = divisionItem($odd, $getNbr);

print_r([
    'list initial'  => $list,
    'even'          => $even,
    'odd'           => $odd,
    'even division' => $even_divisions,
    'odd division divided'  => $odd_divisions,

]);
