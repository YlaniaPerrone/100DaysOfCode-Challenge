<?php

$arrayData = [];
$wordEnter = readline('Enter a word : ');
$letterToCheck = 'f';
$letterChang = 'l';

$newWord = str_replace($letterToCheck, $letterChang, $wordEnter);

function showAnswer(string $word, $convertWorld) :string
{
    return $word ===$convertWorld ? "word init :  $word"
        : "Word $word been changed to : $convertWorld";
}

$result = showAnswer($wordEnter, $newWord);
print_r($result);