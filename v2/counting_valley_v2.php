<?php

/* มีนักเดินทางเดินทางบนเส้นทางที่บ้านประกอบด้วย U(ขึ้น) และ D(ลง) 
ให้นับว่าผ่านหุบเขา (valley) กี่ครั้ง  โดยจะมีระดับน้ำทะเลเป็น base */

// O(n)
function countingValley(int $step, string $path): int
{
    $seaLevel = 0;
    $valleyCount = 0;

    for ($index = 0; $index < $step; $index++) {
        $isGoingDown = ($path[$index] === 'D');

        if ($isGoingDown) {
            $seaLevel--;

            continue;
        }

        $seaLevel++;

        if ($seaLevel === 0) {
            $valleyCount++; 
        }
    }

    return $valleyCount;
}

$path = 'DDUUDDUDUUUD';
$step = 12;

$result = countingValley($step, $path);

echo $result;
