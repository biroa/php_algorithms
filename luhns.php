<?php
/**
 * Created by PhpStorm.
 * User: biroa
 * based on:
 * Date: 10/14/2015
 * Time: 10:09 PM
 * info: http://www.codeproject.com/Tips/515367/Validate-credit-card-number-with-Mod-algorithm
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
        $array = str_split((int)$number);
    }

    $i=0;
    while($i<count($array)){
        if($i%2!=0 || $i == 0){
            $array[$i] = ($array[$i] *2);
        }
    }


    var_dump($array);

    return implode(',',$array);

}

$number = 98456;
echo 'Original number:' . $number;
echo is_valid_luhn($number);