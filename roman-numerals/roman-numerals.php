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
    $numerals = [ ["I", 1], ["IV", 4], ["V", 5], ["IX", 9], ["X", 10], ["XL", 40], ["L", 50],
                    ["XC", 90], ["C", 100], ["CD", 400], ["D", 500], ["CM", 900], ["M", 1000] ];

    foreach (array_reverse($numerals) as $numeral_pair) {
        if ($numeral_pair[1] <= $num) {
            return $numeral_pair[1];
        }
    }
}

function lookupNumeral(int $num) {
    $numerals = [ ["I", 1], ["IV", 4], ["V", 5], ["IX", 9], ["X", 10], ["XL", 40], ["L", 50],
                    ["XC", 90], ["C", 100], ["CD", 400], ["D", 500], ["CM", 900], ["M", 1000] ];

    foreach($numerals as $numeral_pair) {
        if ($numeral_pair[1] === $num) {
            return $numeral_pair[0];
        }
    }
}
 ?>
