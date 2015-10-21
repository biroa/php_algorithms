<?php
/**
 * Created by PhpStorm.
 * User: biroa
 * Date: 10/2/2015
 * Time: 7:46 AM
 */

/**
 * @param $n
 *
 * @return int
 */
function fibonacciRecursive($n)
{

    if ( $n == 0 ) {
        return 0;
    } elseif ( $n == 1 ) {
        return 1;
    } else {
        return (fibonacciRecursive($n - 1) + fibonacciRecursive($n - 2));
    }

}

/**
 * @param $n
 *
 * @return int
 */
function caller($number)
{
    echo "Fibonacci series recursive: ";

    for ( $i = 0; $i < $number; $i++ ) {
        echo fibonacciRecursive($i) . ' ';
    }

    echo "<br><br>";
}

caller(10);