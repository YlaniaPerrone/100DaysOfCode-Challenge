<?php

$arrayData = [];
$wordEnter = readline();
$letterToCheck = 'f';
$letterChang = 'l';
$nbrWord = readline();

function saveWordInArray(string $word, array $array) : array
{
        $array[] = $word;
        return $array;
}

function changeFirstLetter(string $letter, string $newLetter, array $array) : array
{
    for ($i = 0; $i < count($array); $i++) {
       if (substr($array[$i], 0, 1) === $letter){
           $array[$i] = $newLetter . substr($array[$i], 1);
       }
    }
    return $array;
}

$data = saveWordInArray($wordEnter, $arrayData, $nbrWord);

$result = changeFirstLetter($letterToCheck, $letterChang, $data);
print_r($result);
