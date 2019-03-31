<?php

class Conversions {

  public function __construct() {
    // echo '<script>alert("Converter ready")</script>';
  }

  // TEMPERATURE
  public function temperature($resultUnit1, $resultUnit2, $value) {
    switch (true) {
      // CELSIUS TO FAHRENHEIT
      case($resultUnit1 == 'celsius' && $resultUnit2 == 'fahrenheit'):
        $result = ((9/5) * $value) + 32;
        return $result;
        break;
      // FAHRENHEIT TO CELSIUS
      case($resultUnit1 == 'fahrenheit' && $resultUnit2 == 'celsius'):
        $result = ($value - 32) * (5/9);
        return $result;
        break;
      // CELSIUS TO KELVIN
      case($resultUnit1 == 'celsius' && $resultUnit2 == 'kelvin'):
        $result = $value + 273.15;
        return $result;
        break;
      // KELVIN TO CELSIUS
      case($resultUnit1 == 'kelvin' && $resultUnit2 == 'celsius'):
        if($value >= 0) {
          $result = $value - 273.15;
          return $result;
        }
        break;

      default:
        // code...
        break;
    }
  }

  // TEMPERATURE
  public function length($resultUnit1, $resultUnit2, $value) {
    switch (true) {
      // CENTIMETERS TO INCHES
      case($resultUnit1 == 'centimeters' && $resultUnit2 == 'inches'):
        $result = $value * 0.3937007874;
        return $result;
        break;
      // FAHRENHEIT TO CELSIUS
      case($resultUnit1 == 'inches' && $resultUnit2 == 'centimeters'):
        $result = $value / 0.3937007874;
        return $result;
        break;
      // CELSIUS TO KELVIN
      case($resultUnit1 == 'centimeters' && $resultUnit2 == 'feet'):
        $result = $value * 0.03280839895;
        return $result;
        break;
      // KELVIN TO CELSIUS
      case($resultUnit1 == 'feet' && $resultUnit2 == 'centimeters'):
        if($value >= 0) {
          $result = $value / 0.03280839895;
          return $result;
        }
        break;

      default:
        // code...
        break;
    }
  }
}




$conv = new Conversions;
