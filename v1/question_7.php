<?php

function sumArray(array $sorted): int
{
    $result = 0;

    foreach ($sorted as $number) {
        $result += $number;
    }

    return $result;
}

function findMin(array $sumList): int
{
    $min = $sumList[0];
    
    foreach ($sumList as $index => $number) {
        if ($sumList[$index] < $min) {
            $min = $sumList[$index];
        }
    }

    return $min;
}

function findMax(array $sumList):int
{
    $max = $sumList[0];
    
    foreach ($sumList as $index => $number) {
        if ($sumList[$index] > $max) {
            $min = $sumList[$index];
        }
    }

    return $max;
}

function sortArray(array $numberList): array
{
    for ($i = count($numberList) - 1; $i > 0; $i--) {
        for ($j = 0; $j < $i; $j++) {
            if ($numberList[$j] > $numberList[$j + 1]) { 
                $temp = $numberList[$j];
                $numberList[$j] = $numberList[$j+1];
                $numberList[$j+1] = $temp;
            }
        }
    }

    return $numberList;
}

function minMaxSum(array $numberList): void
{
    $sorted = sortArray($numberList);
    $total = sumArray($sorted);
    $sumList = [];    

    foreach ($sorted as $index => $number) {
        $sumList[] = ($total-$sorted[$index]);
    }
    
    $min = findMin($sumList);
    $max = findMax($sumList);

    echo $min.' '.$max;
}

$numberList = [7, 69 ,2 ,221, 8974];

minMaxSum($numberList);
