<?php

$nbr = 7;

function calculateFibonacciRecursive(int $nbr) : int {
    return $nbr <= 1 ? 1 : calculateFibonacciRecursive($nbr-1) + calculateFibonacciRecursive($nbr-2);
}

$result = calculateFibonacciRecursive($nbr);
echo $result;