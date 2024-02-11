<?php


$nbr = 125;

// get lastDigit %10 and delete lastDigit /10
function sumDigitsNumber(int $nbr) {
    return $nbr < 10 ? $nbr : $nbr % 10 + sumDigitsNumber((int)($nbr / 10));
}

$result = sumDigitsNumber($nbr);
echo $result;