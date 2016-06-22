<?php

// First attempt does not solve the unicode test. Starting to see
// a pattern with my solutions to these string manipulation
// questions

function isPangram($string)
{
  $string      = processString($string);
  $engAlphabet = range('a', 'z');

  foreach ($engAlphabet as $symbol) {
    if (strpos($string, $symbol) === false) {
      return false;
    }
  }
  return true;
}

function processString($string)
{
  $string = trim($string);
  $string = mb_strtolower($string);
  return $string;
}


?>
