<?php
//Random number generator with equality check
function getRandomNbrs()
{
    return rand(1, 10);
}

function checkNbrIsEgal($nbr)
{
    $array = [];
    while (count($array) < $nbr) {
        $nbrRand = getRandomNbrs();
        if (!in_array($nbrRand, $array)) {
            $array[] = $nbrRand;
        }
    }
    return $array;
}

$resul = checkNbrIsEgal(3);
print_r($resul);


