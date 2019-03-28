<?php

class Conversions {

  public function __construct() {
    // echo '<script>alert("Converter ready")</script>';
  }

  // TEMPERATURE
  public function temperature($resultUnit, $value) {
    if($resultUnit == 'celsius') {
      $result = ($value - 32) * (5/9);
    } else if ($resultUnit = 'fahrenheit') {
      $result = ((9/5) * $value) + 32;
    }
    return $result;
  }
}




$conv = new Conversions;
