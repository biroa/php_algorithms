<?php

/**
 * Created by PhpStorm.
 * User: biroa
 * Date: 10/6/2015
 * Time: 7:32 PM
 *
 */

/**
 * @param $array
 * @param $targetValue
 *
 * @return int
 */
function linearSearch($array, $targetValue)
{
    echo 'Number of guesses:';
    for ( $guess = 0; $guess < count($array); $guess++ ) {
        if ( $array[$guess] === $targetValue ) {
            return $targetValue;
        }
        echo $guess . ', ';
    }

    return -1;
}

$arr = [ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17 ];
$find = 13;
var_dump($arr);
echo 'We look for number:' . $find . '<br>';
echo '<b>Linear Search: </b><br>';
echo '<br><b>' . linearSearch($arr, $find);
echo '</b>';