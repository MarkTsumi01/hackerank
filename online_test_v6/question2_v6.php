<?php

// O(n)
function seperateOddEvenNumber(array $numberList): array
{
    $evenNumberList = [];
    $oddNumberList = [];

    foreach ($numberList as $number) {
        if (isEven($number)) {
            $evenNumberList[] = $number;

            continue;
        }

        $oddNumberList[] = $number;
    }

    $result = [
        'evenNumber' => $evenNumberList, 
        'oddNumber' => $oddNumberList
    ];

    return $result;
}

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

$numberList = [23, 13, 56, 12, 7, 89, 33, 20, 34, 8, 66, 10, 16, 72, 4, 3, 11, 55, 16, 19, 47];

$seperateNumberList = seperateOddEvenNumber($numberList);

$sumEven = calculateSum($seperateNumberList['evenNumber']);
$sumOdd = calculateSum($seperateNumberList['oddNumber']);

$evenStatus = (isEven($sumEven) ? 'true' : 'false');
$oddStatus = (!isEven($sumOdd) ? 'true' : 'false');

$formatEvenList = implode(', ', $seperateNumberList['evenNumber']);
$formatOddList = implode(', ', $seperateNumberList['oddNumber']);

$output  = 'even => ' . $formatEvenList . '<br>';
$output .= 'odd  => ' . $formatOddList  . '<br>';
$output .= 'sumEven = ' . $sumEven . ' => ' . $evenStatus . '<br>';
$output .= 'sumOdd  = ' . $sumOdd  . ' => ' . $oddStatus;

echo $output;
