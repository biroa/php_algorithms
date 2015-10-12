<?php
/**
 * Created by PhpStorm.
 * User: biroa
 * based on:
 * http://blog.richardknop.com/2012/06/merge-sort-php-implementation/
 * Date: 10/12/2015
 * Time: 7:32 PM
 *
 */


/**
 * @param array $arr
 *
 * @return array
 */
function shellSort(array $arr)
{
    $gap = floor(count($arr) / 2);
    while ( $gap > 0 ) {
        for ( $i = 0; $i < count($arr) - $gap; ++$i ) {
            $arrWithGapsKeys = [ ];
            $arrWithGaps = [ ];
            $loop = true;
            $j = $i;
            while ( $loop ) {
                if ( isset($arr[$j]) ) {
                    $arrWithGapsKeys[] = (int)$j;
                    $arrWithGaps[] = $arr[$j];
                    $j += $gap;
                } else {
                    $loop = false;
                }
            }
            $arrWithGapsOrdered = insertionSort($arrWithGaps);
            foreach ( $arrWithGapsKeys as $key ) {
                $arr[$key] = current($arrWithGapsOrdered);
                next($arrWithGapsOrdered);
            }
        }
        $gap = floor($gap / 2);
    }

    return $arr;
}

/**
 * @param array $table
 *
 * @return array
 *
 */
function insertionSort(array $table)
{
    $leftHand = [ ];
    foreach ( $table as $card ) {
        if ( 0 === count($leftHand) ) {
            $leftHand[] = $card;
        } else {
            $insertedCard = false;
            $reindexedLeftHand = [ ];
            for ( $i = count($leftHand) - 1; $i >= 0; --$i ) {
                if ( $card >= $leftHand[$i] ) {
                    for ( $j = 0; $j <= $i; ++$j ) {
                        $reindexedLeftHand[$j] = $leftHand[$j];
                    }
                    $reindexedLeftHand[] = $card;
                    for ( $j = $i + 1; $j < count($leftHand); ++$j ) {
                        $reindexedLeftHand[$j + 1] = $leftHand[$j];
                    }
                    $insertedCard = true;
                    break;
                }
            }
            if ( false === $insertedCard ) {
                $reindexedLeftHand[] = $card;
                foreach ( $leftHand as $cardInLeftHand ) {
                    $reindexedLeftHand[] = $cardInLeftHand;
                }
            }
            $leftHand = $reindexedLeftHand;
        }
    }

    return $leftHand;
}

$arr = [ ];
for ( $i = 0; $i < 100; ++$i ) {
    $arr[] = $i;
}
shuffle($arr);
$sortedArr = shellSort($arr);
var_dump($sortedArr);