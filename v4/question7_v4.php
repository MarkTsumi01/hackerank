<?php

// Big O Notation = O(n)

function displayMinMaxSum(array $numberList): void
{
    $totalSum = 0;
    $min = $numberList[0];
    $max = $numberList[0];

    foreach ($numberList as $number) {
        $totalSum += $number;
        
        // if ($number < $min) $min = $number;
        // if ($number > $max) $max = $number;

        if ($number < $min) {
            $min = $number;
        } elseif ($number > $max) {
            $max = $number;
        }
    }

    $minSum = ($totalSum - $max);
    $maxSum = ($totalSum - $min);

    echo $minSum . ' ' . $maxSum;
}

$numberList = [7, 69, 2, 221, 8974];

displayMinMaxSum($numberList);
