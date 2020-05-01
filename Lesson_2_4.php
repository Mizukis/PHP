<?php

// 6. *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень

function power($val, $pow) {
    if ($pow == 0) {
        return 1;
    } else if ($pow < 0) {
        return 1 / $val * power($val, ++$pow);
    }
    return $val * power($val, --$pow);
}
echo "<h4>" . power(5,2) . "</h4>";

//7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
//22 часа 15 минут
//21 час 43 минуты

function showtime() {
    $hour = date("H");
    $minute = intval(date("i"));

    if ($hour == 1 || $hour == 21) {
        $hr = "час";
    } elseif ($hour > 1 && $hour < 5 && $hour > 21 && $hour <= 24) {
        $hr = "часа";
    } else {
        $hr = "часов";
    }

    if (array_search($minute, array(1,21,31,41,51))) {
        $m = "минута";
    }
    else if (array_search($minute, array(2,3,4,22,23,24,32,33,34,42,43,44,52,53,54))) {
        $m = "минуты";
    } else {
        $m = "минут";
    }
    echo "<h4>" . $hour ." ". $hr ." ". $minute ." ". $m  . "</h4>";
}
echo showtime();


?>