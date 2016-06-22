<?php

//
// This is only a SKELETON file for the "Hamming" exercise. It's been provided as a
// convenience to get you started writing code faster.
//

function distance($a, $b)
{
    // Clean up the two input strings to ensure that they don't have any
    // unnecessary whitespace
    $a = trim($a);
    $b = trim($b);

    if (isValidPair($a, $b)) {
        $hammingCount = 0;
        $lengthOfSequences = strlen($a);
        for ($i = 0; $i <= $lengthOfSequences; $i++) {
            $aChar = substr($a, $i, 1);
            $bChar = substr($b, $i, 1);
            if ($aChar !== $bChar) {
                $hammingCount = $hammingCount + 1;
            }
        }
        return $hammingCount;
    } else {
        throw new InvalidArgumentException("DNA strands must be of equal length.");
    }
}

// Separate function to deal with validation of the two strings in case there
// are any other conditions that need to be added later
function isValidPair($a, $b) {
    return strlen($a) === strlen($b);
}
