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

function binarySearchRecursive($x, $list, $left, $right) {
    if ($left > $right) {
        return -1;
    }

    $mid = ($left + $right)/2;

    if ($list[$mid] == $x) {
        return $mid;
    } elseif ($list[$mid] > $x) {
        return binary_search($x, $list, $left, $mid - 1);
    } elseif ($list[$mid] < $x) {
        return binary_search($x, $list, $mid + 1, $right);
    }
}

$left = 10;
$right = 20;
$list = [10,11,12,13,14,15,16,17,18,19,20];
$x = 17;
echo binarySearchRecursive($x,$list,$left,$right);