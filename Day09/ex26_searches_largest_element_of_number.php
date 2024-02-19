<?php
//local maximum search (local maximum if it is greater  to its neighbours on the left and right)

$array = [2,23,14,1,65,47,78];

$nbrLeft = 0;

$nbrRight = count($array) - 1;

function findMaxLocal($array, $nbrLeft, $nbrRight) {

   while ($nbrLeft <= $nbrRight )
   {
       $center = floor(($nbrLeft + $nbrRight) / 2);
       #$center == 0 : checks whether the current element is the first element of the array
       #$center == count($array) - 1  : check if the current element is the last element in the array
       if (($center == 0 || $array[$center] >= $array[$center - 1]) && ($center == count($array) - 1 || $array[$center] >= $array[$center + 1]))
       {
           return $array[$center];
       }
       elseif($center > 0 && $array[$center -1]> $array[$center]){
           $nbrRight = $center - 1;
       }
       else{
           $nbrLeft = $center + 1;
       }
   }
    return null;  // aucun maximum local trouvé
}


$max = findMaxLocal($array, $nbrLeft, $nbrRight);

echo "max local in array is $max";