<?php
//use a foreach loop

$array = [1,5,9,8,6,5,2,7,6,3,12,48,36];

function sumEvenNumber($array): int
{
    $sum = 0;
    foreach ($array as $value)
    {
        if ($value % 2 ===0)
        {
            $sum += $value;
        }
    }
    return $sum;
}

$numberEven = sumEvenNumber($array);
echo  $numberEven;