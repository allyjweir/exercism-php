<?php

/**
 * First attempt that doesn't solve the extended tests for Unicode use cases.
 */
class Bob
{

  public function respondTo($string)
  {
    $string = $this->cleanString($string);
    $stringWithoutSpecialChars = preg_replace("/[^a-zA-Z]+/", "", $string);

    if (strlen($string) === 0) {
      return "Fine. Be that way!";
    }

    if (ctype_upper($stringWithoutSpecialChars)) {
      return "Whoa, chill out!";
    }

    if (substr($string, -1) === "?") {
      return "Sure.";
    }

    return "Whatever.";
  }

  private static function cleanString($string)
  {
    $string = trim($string);
    return $string;
  }
}

?>
