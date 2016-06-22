<?php


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
  $string = preg_replace("/[^a-zA-Z]+/", "", $string);  // Strips non ascii chars
  return $string;
}


?>
