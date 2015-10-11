<?php

/**
 * Created by PhpStorm.
 * User: biroa
 * Date: 10/10/2015
 * Time: 4:34 PM
 *
 */

/**
 * @param array $numbers
 */
function insertionSort(array $numbers)
{
    $count = count($numbers);

    for ( $i = 1; $i < $count; $i++ ) {
        $j = $i - 1;
        $key = $numbers[$i];
        while ( $j >= 0 && $numbers[$j] > $key ) {
            $numbers[$j + 1] = $numbers[$j];
            $numbers[$j] = $key;
            $j = $j - 1;
        }
    }
}

$numbers = [ 2, 3, 4, 5, 1, 8, 11, 0 ];
insertionSort($numbers);