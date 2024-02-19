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

function colorize($text, $colorCode) {
    return "\033[" . $colorCode . "m" . $text . "\033[0m";
}

function playGame($array, $symbol): void
{
    echo colorize("\n----- Welcome to Hangman -----\n", "0;34");

//    $guessChar = [];
    $wrongChar = [];
    $chance = 6;

    $word = getRandomWord($array);
    $letterHidden = replaceChar($word, $symbol);
//    echo $letterHidden;

    while ($chance > 0 && $letterHidden != $word) {
        echo colorize("\nwrongs letter : [ " . implode(', ', $wrongChar) ." ]\n", "0;93");
        echo colorize("you have : $chance chances \n\n", "0;35");
        echo colorize("$letterHidden \n\n", "0;36");

//        echo "\nwrongs letter : [ " . implode(', ', $wrongChar) ." ]\n";
//        echo "you have : $chance chances \n\n" ;n
//        echo $letterHidden . "\n\n";
        $letterToCheck = trim(readline('Enter a character : ' ));

        $convertToArray = str_split($word);
        $arrayLetterHidden = str_split($letterHidden);

        if (isCharacterIsInWord($letterToCheck, $convertToArray)) {
            $position = getPositionCharacter($convertToArray, $letterToCheck);
            $replace = replaceCharacter($arrayLetterHidden, $letterToCheck, $position);
            $letterHidden = implode($replace);
        } else {
            if (!in_array($letterToCheck, $wrongChar))
            {
                $wrongChar[] = $letterToCheck;
            }
            $chance--;
        }
    }
    echo $letterHidden === $word ? 'Bingo, you win !!!' : 'You loose';
}

playGame($array, $symbol);