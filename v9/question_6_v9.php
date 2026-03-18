<?php

/* รับอาเรย์ของจำนวนเต็มแล้วคำนวณสัดส่วน ของตัวเลขที่เป็น บวก ลบ ศูนย์ 
เทียบกับจำนวนของสมาชิกทั้งหมดแล้ว แสดงออกมาเป็นทศนิยม 6 ตำแหน่ง */

// O(1)
function calculateRatio(int $count, int $total): float
{
    if ($count === 0) {
        return 0;
    }

    $result = ($count / $total);

    return $result;
}

// O(n)
function getRatio(array $numberList): array
{
    if (!$numberList) {
        return [];
    }

    $total = count($numberList);
    $positiveCount = 0;
    $negativeCount = 0;
    $zeroCount = 0;

    foreach ($numberList as $number) {
        if ($number > 0) {
            $positiveCount++;
        } elseif ($number < 0) {
            $negativeCount++;
        } else {
            $zeroCount++;
        }
    }

    $positiveNumberRatio = calculateRatio($positiveCount, $total);
    $negativeNumberRatio = calculateRatio($negativeCount, $total);
    $zeroNumberRatio = calculateRatio($zeroCount, $total);

    $result = [$positiveNumberRatio, $negativeNumberRatio, $zeroNumberRatio];

    return $result;
}

$numberList = [-4, 3, -9, 0, 4, 1];

$ratioList = getRatio($numberList);

echo 'Positive Number Ratio : ' . sprintf('%.6f', $ratioList[0]) . '<br>';
echo 'Negative Number Ratio : ' . sprintf('%.6f', $ratioList[1]) . '<br>';
echo 'Zero Number Ratio : ' . sprintf('%.6f', $ratioList[2]) . '<br>';
