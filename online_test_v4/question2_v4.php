<?php

// O(n)
function calculateSum(array $numberList): int
{
    $sum = 0;

    foreach ($numberList as $number) {
        $sum += $number;
    }

    return $sum;
}

// O(1)
function isEven(int $number): bool
{
    $isEven = (($number % 2) === 0);

    return $isEven;
}

// O(n)
function formatNumberList(array $numberList): string
{
    $formatList = '[';
    $lastIndex = ((count($numberList)) - 1);

    foreach ($numberList as $index => $number) {
        $formatList .= $number;

        if ($index < $lastIndex) {
            $formatList .= ', ';
        }
    }

    $formatList .= ']';

    return $formatList;
}

$numberList = [23, 13, 56, 12, 7, 89, 33, 20, 34, 8, 66, 10, 16, 72, 4, 3, 11, 55, 16, 19, 47];
$evenList = [];
$oddList  = [];

foreach ($numberList as $number) {
    if (isEven($number)) {
        $evenList[] = $number;

        continue;
    }

    $oddList[] = $number;
}

$formatEvenList = formatNumberList($evenList);
$formatOddList = formatNumberList($oddList);

$sumEven = calculateSum($evenList);
$sumOdd = calculateSum($oddList);

$isEven = (isEven($sumEven) ? 'true' : 'false');
$isOdd = (!isEven($sumOdd) ? 'true' : 'false');

echo 'even => ' . $formatEvenList . '<br>';
echo 'odd  => ' . $formatOddList  . '<br>';
echo 'sumEven = ' . $sumEven . ' => ' . $isEven . '<br>';
echo 'sumOdd  = ' . $sumOdd  . ' => ' . $isOdd;
