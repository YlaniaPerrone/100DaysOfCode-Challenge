<?php
// Calculating the sum of the diagonals of a matrix

$matrix = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

$lengthArray = count($matrix);

$diagonal = 0;
for ($i = 0; $i < count($matrix); $i++) {
    $diagonal += $matrix[$i][$i];
}

echo $diagonal;