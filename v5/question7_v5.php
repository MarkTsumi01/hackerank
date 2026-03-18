<?php

// Big O Notation = O(n)

function displayMinMaxSum(array $numberList): array
{
    $total = 0;
    $min = $numberList[0];
    $max = $numberList[0];

    foreach ($numberList as $number) {
        $total += $number;

        if ($number < $min) {
            $min = $number;
        }

        if ($number > $max) {
            $max = $number;
        }
    }

    $minSum = ($total - $max);
    $maxSum = ($total - $min);
    $result = [$minSum, $maxSum];

    return $result;
}

$numberList = [7, 69, 2, 221, 8974];

$result = displayMinMaxSum($numberList);

echo $result[0] . ' ' . $result[1];
