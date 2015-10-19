<?php
/**
 * Created by PhpStorm.
 * User: biroa
 * Date: 10/5/2015
 * Time: 6:15 PM
 *
 * Searches for specific element in a given array using
 * the binary search recursive algorithm.
 *
 */

/**
 * @param $x
 * @param $list
 * @param $left
 * @param $right
 *
 * @return float|int
 */
function binarySearchRecursive($x, $list, $left, $right)
{
    if ( $left > $right ) {
        return -1;
    }

    $mid = floor(($left + $right) / 2);
    echo $mid . ' ';
    if ( $list[$mid] == $x ) {
        return $mid;
    } elseif ( $list[$mid] > $x ) {
        return binarySearchRecursive($x, $list, $left, $mid - 1);
    } elseif ( $list[$mid] < $x ) {
        return binarySearchRecursive($x, $list, $mid + 1, $right);
    }
}

$left = 0;
$right = 11;
$list = [ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11 ];
$x = 4;
echo binarySearchRecursive($x, $list, $left, $right);