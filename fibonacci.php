<?php
/**
 * Created by PhpStorm.
 * User: biroa
 * Date: 10/1/2015
 * Time: 7:53 PM
 */

/**
 * @param $n
 */
function fibonacci($n)
{
    $first = 0;
    $second = 1;

    echo "Fibonacci series ";
    echo $first . ' ' . $second . ' ';

    for ( $i = 2; $i < $n; $i++ ) {

        $third = $first + $second;

        echo $third . ' ';

        $first = $second;
        $second = $third;
    }
}

fibonacci(10);
