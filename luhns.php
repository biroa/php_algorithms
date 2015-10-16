<?php
/**
 * Created by PhpStorm.
 * User: biroa
 * based on:
 * Date: 10/14/2015
 * Time: 10:09 PM
 * info:
 * http://www.codeproject.com/Tips/515367/Validate-credit-card-number-with-Mod-algorithm
 *
 */



/**
 * @param $item
 * @param $key
 */
function doubleEverySecondDigit(&$item, $key)
{
    $item = (int)$item;
    if ( (int)$key === 0 || (int)$key % 2 === 0 ) {
        $item = (int)$item*2;
        if(strlen($item)>1){
            $digits = str_split($item);
            $item = (int) bcadd((int)$digits[0] , (int)$digits[1]);
        }
    }
}

/**
 * @param $number
 *
 * @return string
 */
function is_valid_luhn($number)
{
    if ( !is_numeric($number) ) {
        return 'it is not a numeric value!';
    } else {
        $array = str_split((int)$number);
    }
    
    /**
     * We have to double every second digit starting from the right side
     * So we reverse the array
     */
    $array = array_reverse($array);
    array_walk($array, 'doubleEverySecondDigit');
    $array = array_reverse($array);
    var_dump($array);
    return true;

}

$number = 984563;
echo 'Original number:' . $number;
echo is_valid_luhn($number);