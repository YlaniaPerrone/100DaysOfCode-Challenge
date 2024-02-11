<?php

$nbr = 7;

function factorial(int  $nbr) : int
{
    return $nbr <= 1 ?  1 : $nbr * factorial($nbr -1);
}
$result = factorial($nbr);
echo $result;