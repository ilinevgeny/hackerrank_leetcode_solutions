<?php

/*
 * Complete the 'lonelyinteger' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY a as parameter.
 */

function lonelyinteger($a) {
    $found = [];
    for($i = 0, $iMax = count($a); $i < $iMax; $i++) {
        $key = array_search($a[$i], $found);
        if($key === false) {
            $found[] = $a[$i];
        } else {
            unset($found[$key]);
        }
    }
    return array_shift($found);
}

