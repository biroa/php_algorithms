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
 *
 * @return array
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

    return $numbers;
}

$arr = [ 7, 3, 9, 6, 5, 1, 2, 0, 8, 4 ];
echo 'Unsorted list:<br/>';
var_dump($arr);
echo '<b>Insertion Sorted List: </b><br>';
var_dump(insertionSort($arr));
echo '<br><b>' . $sorted;