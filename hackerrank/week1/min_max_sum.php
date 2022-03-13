<?php
function miniMaxSum($arr) {
//    usort($arr, fn($arr, $b) => $arr <=> $b);
    usort($arr, function ($a, $b) {
        return $a <=> $b;
    });
    $arr_n = array();
    array_walk($arr, function ($el, $index) use (&$arr_n) {
        $arr_n[$index] = (int)$el;
    });
    echo  array_sum(array_slice($arr_n, 0,count($arr) - 1)) . ' ';
    echo array_sum(array_slice($arr_n, 1,count($arr) - 1));
}

$arr = [2, 15, 5, 6, 0];
miniMaxSum($arr);