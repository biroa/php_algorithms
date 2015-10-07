<?php

/**
 * Created by PhpStorm.
 * User: biroa
 * Date: 10/7/2015
 * Time: 7:32 PM
 *
 */

/**
 * @param array $arr
 *
 * @return array
 */
function selectionSort(array $arr)
{
    for ( $i = 0; $i < count($arr); ++$i ) {
        $min = null;
        $minKey = null;
        for ( $j = $i; $j < count($arr); ++$j ) {
            if ( null === $min || $arr[$j] < $min ) {
                $minKey = $j;
                $min = $arr[$j];
            }
        }
        $arr[$minKey] = $arr[$i];
        $arr[$i] = $min;
    }

    return $arr;
}

$arr = [ 7, 3, 9, 6, 5, 1, 2, 0, 8, 4 ];
echo 'Unsorted list:<br/>';
var_dump($arr);
$sortedArr = selectionSort($arr);
echo 'Sorted list:<br/>';
var_dump($sortedArr);