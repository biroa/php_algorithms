<?php
/**
 * Created by PhpStorm.
 * User: biroa
 * Date: 10/1/2015
 * Time: 7:53 PM
 */

/**
 * @param $number
 * @return int
 */
function factorial($number)
{

    if ( $number < 2 ) {
        return 1;
    } else {
        echo $number . '*' . $number - 1;

        return ($number * factorial($number - 1));
    }
}

echo '<br/>' . factorial(10);