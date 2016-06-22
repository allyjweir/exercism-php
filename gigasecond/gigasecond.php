<?php

function from($date) {
  if (isValid($date)) {
    $copyOfDate = clone $date;
    return $copyOfDate->add(new DateInterval("PT1000000000S"));
  }
}

function isValid($date) {
  if ($date instanceof DateTime) {
    return True;
  } else {
    throw new InvalidArgumentException("Must be a DateTime object.");
  }
}

 ?>
