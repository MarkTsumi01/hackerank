<?php

// O(n)
function separateParityNumberList(array $numberList): array 
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
        'evenNumberList' => $evenNumberList, 
        'oddNumberList' => $oddNumberList
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

$seperateNumberList = separateParityNumberList($numberList);

$evenNumberList = $seperateNumberList['evenNumberList'];
$oddNumberList = $seperateNumberList['oddNumberList'];

$sumEven = calculateSum($evenNumberList);
$sumOdd = calculateSum($oddNumberList);

$evenStatus = (isEven($sumEven) ? 'true' : 'false');
$oddStatus = (!isEven($sumOdd) ? 'true' : 'false');

$formatEvenList = implode(', ', $evenNumberList);
$formatOddList = implode(', ', $oddNumberList);

echo 'even => ' . $formatEvenList . '<br>';
echo 'odd  => ' . $formatOddList  . '<br>';
echo 'sumEven = ' . $sumEven . ' => ' . $evenStatus . '<br>';
echo 'sumOdd  = ' . $sumOdd  . ' => ' . $oddStatus;
