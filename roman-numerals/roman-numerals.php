<?php

function toRoman(int $num) {
    $result = "";
    while ($num >= 1) {
        $value = largestFit($num);
        $result = $result . lookupNumeral($value);
        $num = $num - $value;
    }
    return $result;
}

/**
 * Find the largest roman numeral value that fits in given value
 */
function largestFit(int $num) {
    $numerals = [ ["I", 1], ["V", 5], ["X", 10], ["L", 50], ["C", 100], ["D", 500], ["M", 1000] ];

    foreach (array_reverse($numerals) as $numeral_pair) {
        if ($numeral_pair[1] <= $num) {
            return $numeral_pair[1];
        }
    }
}

function lookupNumeral(int $num) {
    $numerals = [ ["I", 1], ["V", 5], ["X", 10], ["L", 50], ["C", 100], ["D", 500], ["M", 1000] ];
    
    foreach($numerals as $numeral_pair) {
        if ($numeral_pair[1] === $num) {
            return $numeral_pair[0];
        }
    }
}
 ?>
