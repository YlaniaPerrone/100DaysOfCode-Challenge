<?php

$array = ["Inès", "Raphaël", "Rose", "Adam", "Juliette", "Miguel", "Issa", "Liam"];

function searchStudentName(array $array, string $name): int
{
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] == $name) {
            return $i;
        }
    }
    return -1;
}

function showResult(int $position, string $name): void
{
    if ($position != -1) {
        echo "$name is in the position : $position";
    } else {
        echo "$name is not in array.";
    }
}

$nameToCheck = "Miguel";

$position = searchStudentName($array, $nameToCheck);

showResult($position, $nameToCheck);
