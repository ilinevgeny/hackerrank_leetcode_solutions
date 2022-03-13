<?php
/**
 * @param $arr
 * @return void
 *
 * Solution step by step:
 * 1. define which is numbers positive, negative and zero to containers
 * 2. calculate ration of count of  containers
 */
function plusMinus($arr) {
    $positive = $negative = $zero = [];
    array_walk($arr, function ($el) use (&$positive, &$negative, &$zero) {
        if($el > 0)
            $positive[] = $el;
        else if($el < 0)
            $negative[] = $el;
        else $zero[] = $el;
    });
    echo number_format(count($positive) / count($arr), 5) . PHP_EOL;
    echo number_format(count($negative) / count($arr), 5) . PHP_EOL;
    echo number_format(count($zero) / count($arr), 5) . PHP_EOL;
}

$arr = [-4, 3, -9, 0, 0, 0, 4, 1, -3];

plusMinus($arr);

