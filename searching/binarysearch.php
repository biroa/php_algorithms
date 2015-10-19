<?php
/**
 * Created by PhpStorm.
 * User: biroa
 * Date: 10/1/2015
 * Time: 7:53 PM
 *
 * Searches for specific element in a given array using
 * the binary search algorithm.
 *
 */


/**
 * @param       $x
 * @param array $list
 *
 * @return float|int
 */
function binarySearch($x, array $list)
{
    $left = 0;
    $right = count($list) - 1;

    while ( $left <= $right ) {
        $mid = floor(($left + $right) / 2);
        echo $mid . ',';
        if ( $list[$mid] == $x ) {
            return $mid;
        } elseif ( $list[$mid] > $x ) {
            $right = $mid - 1;
        } elseif ( $list[$mid] < $x ) {
            $left = $mid + 1;
        }
    }

    return -1;
}

$arr = [ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13 ];
$find = 8;
var_dump($arr);
echo 'We look for number:' . $find . '<br>';
echo '<b>Binary Search with iteration: </b><br>';
echo '<br>' . binarySearch($find, $arr);