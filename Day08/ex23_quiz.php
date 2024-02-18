<?php
//    "Three friends have different ages. The sum of their ages is 27 years. If the oldest is twice the age of the youngest, and the middle one is three times the age of the youngest, what is the age of each?" => 9 ,

$array = [
    "If a pack of 36 pencils is shared equally between 4 children, how many pencils does each child receive? "      => 9,
    "If a mobile phone costs €400 after a 20% discount, what was its price before the discount? "                   => 480,
    "In a bookshelf. If the middle book is the fifth from both the left and right sides. How many books are there?" => 9,
    "2 + 2 "                                                                                                        => 4,
    "2 + 3 "                                                                                                        => 5,
    "4 + 6 "                                                                                                        => 10,
];

//function getRandomQuestions($array): int|array|string
//{
//   return  array_rand($array, 2);
//}

//$questions = getRandomQuestions($array);
//print_r($questions);

function saveQuestionInArray(array $arrayInit): array
{
    return array_intersect_key($arrayInit, array_flip(array_rand($arrayInit, 2)));
}

$questions = saveQuestionInArray($array);
//print_r($questions);

function game($questions): void
{
    $score = 0;

    foreach ($questions as $key => $answer) {
        echo $key . "\n";
        $answerUser = readline('Answer : ');

        if ($answer == $answerUser){
//            echo 'Winner !!!!!' . "\n" ;
            $score ++;
        }
        else{
            echo 'Bad answer ! The answer was ' . $answer . "\n";
        }
    }
    echo 'score ' . $score . ' / ' . count($questions);
}

game($questions);