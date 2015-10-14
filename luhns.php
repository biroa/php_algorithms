<?php
/**
 * Created by PhpStorm.
 * User: biroa
 * based on:
 * Date: 10/14/2015
 * Time: 10:09 PM
 *
 *
 */

/**
 * @param $number
 *
 * @return string
 */
function is_valid_luhn($number) {
    if(!is_numeric($number)){
        return 'it is not a numeric value!';
    }else{
        $number = (int)$number;
    }
    //Todo:: I have to continue here...
    return $number;

}

echo is_valid_luhn(98456);