<?php

// Big O Notation = O(1)

function getTimeConversion(string $time): string
{
    $hour = (int) substr($time, 0, 2);
    $meridiem = substr($time, 8);
    $minute = substr($time, 3, 2);
    $second = substr($time, 6, 2);
    $isMidnight = ($meridiem === 'AM' && $hour === 12);
    $isAfternoon = ($meridiem === 'PM' && $hour !== 12);

    if ($isMidnight) {
        $hour = 0;
    } elseif ($isAfternoon) {
        $hour += 12;
    }

    if ($hour < 10) {
        $hour = '0' . $hour;
    }

    $result = $hour . ':' . $minute . ':' . $second;

    return $result;
}

$time = '08:01:00AM';
$result = getTimeConversion($time);

echo $result;
