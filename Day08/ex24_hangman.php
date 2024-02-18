<?php

$array = ['moon', 'sunshine', 'adventure', 'ocean', 'rainbow'];
$symbol = '*';
function getRandomWord($array): string
{
    return $array[array_rand($array)];
}

function replaceChar($charInit, $symbol): string
{
    return str_replace(str_split($charInit), $symbol, $charInit);
}

function isCharacterIsInWord(string $character, array $word): bool
{
    return in_array($character, $word);
}

function getPositionCharacter(array $word, string $characterToCheck): array
{
    return array_keys($word, $characterToCheck);
}

function replaceCharacter($word, $letter, $positions)
{
    foreach ($positions as $position) {
        $word[$position] = $letter;
    }
    return $word;
}


function playGame($array, $symbol): void
{
    $guessChar = [];
    $wrongChar = [];
    $chance = 6;

    echo "you have  $chance chance \n";
    echo $word = getRandomWord($array);
    $letterHidden = replaceChar($word, $symbol);
//    echo $letterHidden;

    while ($chance > 0 && $letterHidden != $word) {
        echo  implode(", ", $guessChar) . "\n";
        echo $letterHidden . "\n";
        $letterToCheck = trim(readline('Enter a character : ' . "\n"));

        $convertToArray = str_split($word);
        $arrayLetterHidden = str_split($letterHidden);


        if (isCharacterIsInWord($letterToCheck, $convertToArray)) {
            $position = getPositionCharacter($convertToArray, $letterToCheck);
            $replace = replaceCharacter($arrayLetterHidden, $letterToCheck, $position);
            $letterHidden = implode($replace);
            $guessChar[] = $letterToCheck;

        } else {
            $wrongChar[] = $letterToCheck;
            $chance--;
        }

    }


}

playGame($array, $symbol);
//
//$word = getRandomWord($array);
//echo $word . "\n";
//
//$lengthWord = strlen($word);
//
//$letterHidden = replaceChar($symbol, count($word));
//
//
//$find = 'e';
//$convertToArray = str_split($word);
//
//$position = getPositionCharacter($convertToArray, $find);
////print_r($position);
//
//$replace = replaceCharacterIfFound($letterHidden, $find, $position);
//print_r($replace);
//
//$position = getPositionCharacter($convertToArray, $find);
//print_r($position);
//
//$replace = replaceCharacterIfFound($letterHidden, $find, $position);
//print_r($replace);


//do{
//    $letter = readline('Enter an character');
//
//}while(in_array($letterHidden, $symbol ));

