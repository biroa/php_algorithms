<?php
/**
 * Created by PhpStorm.
 * User: biroa
 * based on:
 * http://blog.richardknop.com/2012/06/merge-sort-php-implementation/
 * Date: 10/13/2015
 * Time: 7:32 PM
 *
 */

/**
 * @param array $arr
 *
 * @return array
 */
function divide(array $arr) {
    if (1 === count($arr)) {
        return $arr;
    }
    $left = $right = [];
    $middle = round(count($arr)/2);
    for ($i = 0; $i < $middle; ++$i) {
        $left[] = $arr[$i];
    }
    for ($i = $middle; $i < count($arr); ++$i) {
        $right[] = $arr[$i];
    }
    $left = divide($left);
    $right = divide($right);
    return conquer($left, $right);
}

/**
 * @param array $left
 * @param array $right
 *
 * @return array
 */
function conquer(array $left, array $right) {
    $result = [];
    while (count($left) > 0 || count($right) > 0) {
        if (count($left) > 0 && count($right) > 0) {
            $firstLeft = current($left);
            $firstRight = current($right);
            if ($firstLeft <= $firstRight) {
                $result[] = array_shift($left);
            } else {
                $result[] = array_shift($right);
            }
        } else if (count($left) > 0) {
            $result[] = array_shift($left);
        } else if (count($right) > 0) {
            $result[] = array_shift($right);
        }
    }
    return $result;
}

$arr = [];
for ($i = 0; $i < 100; ++$i) {
    $arr[] = $i;
}
shuffle($arr);
$sortedArr = divide($arr);
var_dump($sortedArr);
