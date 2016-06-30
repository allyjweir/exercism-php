<?php
/**
 * An interesting problem. Didn't present an issue until trying to deal with
 * Unicode (as usual) and then an odd failing testIgnoresSpaces2 for some
 * reason. Solved with str_replace in prepareString() but confused why the
 * preg_split doesn't handle the case.
 */
function isIsogram(string $initialString) {
    $encounteredCharacters = [];
    foreach(prepareString($initialString) as $char) {
        if (in_array($char, $encounteredCharacters)) {
            return false;
        }
        $encounteredCharacters[] = $char;
    }
    return true;
}

function prepareString(string $string) {
    $string = preg_replace("/(\p{P})/", "", $string);  // Remove punctuation such as hyphens
    $string = str_replace(" ", "", $string);  // Oddly needed to pass the testIgnoresSpaces2
    $string = mb_strtolower($string);  // Convert to lowercase
    $string = preg_split("//u", $string, null, PREG_SPLIT_NO_EMPTY); // Split on UTF-8 characters
    return $string;
}
 ?>
