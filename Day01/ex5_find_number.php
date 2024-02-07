<?php
//
$nbr = rand( 1,10);
$count = 0;

echo $nbr;

do {
    echo "enter a number between 1 to 30 :  ";
    $nbrToCheck = readline();
    $count++;

}while($nbrToCheck != $nbr);

echo "bingo, you found in $count tries";