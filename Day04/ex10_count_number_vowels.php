<?php
$word = 'papyrus';
$vowels = ['a', 'o', 'e', 'i', 'u', 'y'];

$nbrVowels = 0;

function countNbrVowel(array $vowels, string $word, $nbrVowels ): int
{
    foreach ($vowels as $item)
    {
        $nbrVowels += substr_count($word, $item);
    }

  return $nbrVowels;
}

function showAnswer($vowels, $word): string
{
    return $vowels > 0 ? "nbr vowels in $word is : $vowels" : "no vowel";

}

$sumVowels = countNbrVowel($vowels, $word, $nbrVowels);
$result = showAnswer($sumVowels, $word);

echo $result;
