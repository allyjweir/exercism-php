<?php

function toRna($string) {
  $string = mb_strtoupper($string);

  if (strlen($string) > 0) {
    $converted = "";
    for ($i = 0; $i <= strlen($string); $i++) {
      $converted = $converted . convertDnaToRna(substr($string, $i, 1));
    }
    return $converted;
  }
}

function convertDnaToRna($char) {
  switch ($char) {
    case "G":
      return "C";
    case "C":
      return "G";
    case "T":
      return "A";
    case "A":
      return "U";
    default:
      return "";
  }
}

?>
