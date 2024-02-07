<?php
//Find the minimum and maximum of a series of numbers
$arrayNbr= [];

do{
    echo "Enter nbr, Press 0 to stop : ";

    $nbr = readline();
    if (is_numeric($nbr) && $nbr !=0){
        $arrayNbr[] = $nbr;
    }
}while($nbr != 0);

print_r($arrayNbr);
$max = max($arrayNbr);
$min = min($arrayNbr);
print_r("biggest nuber is : $max and smallest is : $min");