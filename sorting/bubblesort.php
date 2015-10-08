<?php

/**
 * Created by PhpStorm.
 * User: biroa
 * Date: 10/8/2015
 * Time: 7:32 PM
 *
 */

/**
 * @param $items
 *
 * @return mixed
 */
function bubbleSort($items)
{
    $size = count($items);
    for ( $i = 0; $i < $size; $i++ ) {
        for ( $j = 0; $j < $size - 1 - $i; $j++ ) {
            if ( $items[$j + 1] < $items[$j] ) {
                arraySwap($items, $j, $j + 1);
            }
        }
    }

    return $items;
}

function arraySwap(&$arr, $index1, $index2)
{
    list($arr[$index1], $arr[$index2]) = [ $arr[$index2], $arr[$index1] ];
}


$arr = [ 7, 3, 9, 6, 5, 1, 2, 0, 8, 4 ];
echo 'Unsorted list:<br/>';
var_dump($arr);
echo '<b>Bubble Sorted List: </b><br>';
var_dump(bubbleSort($arr));
echo '<br><b>' . $sorted;