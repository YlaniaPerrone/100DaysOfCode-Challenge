<?php

function saveDataInArray($firstname, $lastname, $result): array
{
    return [
        'firstname' => $firstname,
        'lastname'  => $lastname,
        'result'    => $result
    ];
}
function checkIfIsCharacter($word): void
{
    while (!ctype_alpha($word)){
        echo 'only alphabetic characters';
    }
}

function getElement(int $nbr, int $nbrNote): array
{
    $result = [];
    $students = [];

    for ($i = 0; $i < $nbr; $i++) {
        $firstname = (string)readline("enter de firstname of student $i : ");

        $lastname = (string)readline("enter de lastname of student $i : ");
        for ($j = 0; $j < $nbrNote; $j++) {
            $subject = (string)readline("enter de subject of student $i : ");
            $note = (float)readline("enter de note of student $i : ");
            while (!is_numeric($note)) {
                $note = (float)readline("enter de note of student $i : ");
            }
            $result[$subject] = $note;
        }
        $students[] = saveDataInArray($firstname, $lastname, $result);
    }
    return $students;
}

$nbr = (int)readline('how many students you want to record ? ');
$nbrNote = (int)readline('how many notes you want to record ? ');

while ($nbr <= 0 || $nbrNote <= 0) {
    echo "Please enter numeric values.\n";
    $nbr = (int)readline('how many students you want to record ? ');
    $nbrNote = (int)readline('how many notes you want to record ? ');
}

$t = getElement($nbr, $nbrNote);
print_r($t);

