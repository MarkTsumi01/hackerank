<?php

function timeConversion($time)
{
    $hour = (int) substr($time, 0, 2);
    $meridiem = substr($time, 8);
    $minute = substr($time, 3, 2);
    $second = substr($time, 6, 2);

    if (($meridiem === 'AM') && ($hour === 12)) {
        $hour = 0;
    } elseif (($meridiem === 'PM') && ($hour !== 12)) {
        $hour += 12;
    }

    if ($hour < 10) {
        $hour = '0' . $hour;
    }

    $result = $hour . ':' . $minute . ':' . $second;

    return $result;
}

$time = '08:01:00AM';

$result = timeConversion($time);

echo $result;
