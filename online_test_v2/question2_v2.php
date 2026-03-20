<?php

function calculateSum(array $numberList): int
{
    $sum = 0;

    foreach ($numberList as $number) {
        $sum += $number;
    }

    return $sum;
}

function isEven(int $number): bool
{
    $isEven = ($number % 2) === 0;

    return $isEven;
}

function isOdd(int $number): bool
{
    $isOdd = !isEven($number);

    return $isOdd;
}

function formatNumberList(array $numberList): string
{
    $result    = '[';
    $lastIndex = (count($numberList)) - 1;

    foreach ($numberList as $index => $number) {
        $result .= $number;

        if ($index < $lastIndex) {
            $result .= ', ';
        }
    }
    
    $result .= ']';

    return $result;
}

$numberList = [23, 13, 56, 12, 7, 89, 33, 20, 34, 8, 66, 10, 16, 72, 4, 3, 11, 55, 16, 19, 47];
$evenList = [];
$oddList  = [];

foreach ($numberList as $number) {
    if (isEven($number)) {
        $evenList[] = $number;
    } else {
        $oddList[] = $number;
    }
}

$sumEven       = calculateSum($evenList);
$sumOdd        = calculateSum($oddList);
$isEvenSumEven = isEven($sumEven);
$isOddSumOdd   = isOdd($sumOdd);

echo 'even => ' . formatNumberList($evenList) . '<br>';
echo 'odd  => ' . formatNumberList($oddList)  . '<br>';
echo 'sumEven = ' . $sumEven . ' => ' . ($isEvenSumEven ? 'true' : 'false') . '<br>';
echo 'sumOdd  = ' . $sumOdd  . ' => ' . ($isOddSumOdd  ? 'true' : 'false');
