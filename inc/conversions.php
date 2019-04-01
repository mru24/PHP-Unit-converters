<?php

class Conversions {

  public function __construct() {
    // echo '<script>alert("Converter ready")</script>';
  }

  // TEMPERATURE
  public function temperature($resultUnit1, $resultUnit2, $value) {
    switch ($resultUnit1) {

      case 'celsius':
        switch ($resultUnit2) {
          case 'fahrenheit':
            $result = ((9/5) * $value) + 32;
            break;
          case 'kelvin':
            $result = $value + 273.15;
            break;

          default:
            // code...
            break;
        }
        break;

      case 'fahrenheit':
        switch ($resultUnit2) {
          case 'celsius':
            $result = ($value - 32) * (5/9);
            break;
          case 'kelvin':
            $result = ($value + 459.67) * (5/9);
            break;

          default:
            // code...
            break;
        }
        break;

      case 'kelvin':
        switch ($resultUnit2) {
          case 'celsius':
            if($value >= 0) {
              $result = $value - 273.15;
            }
            break;
          case 'fahrenheit':
            if($value >= 0) {
              $result =  $value * 9/5 - 459.67;
            }
            break;

          default:
            // code...
            break;
        }
        break;

      default:
        // code...
        break;
    }
    return $result;
  }

  // LENGTH
  public function length($resultUnit1, $resultUnit2, $value) {

    switch ($resultUnit1) {
      case 'millimetres':
        switch ($resultUnit2) {
          case 'centimetres':
            $result = $value / 10;
            break;
          case 'metres':
            $result = $value / 1000;
            break;
          case 'kilometres':
            $result = $value / 1000000;
            break;
          case 'inches':
            $result = $value / 25.4;
            break;
          case 'feet':
            $result = $value / 304.8;
            break;
          case 'yards':
            $result = $value / 914.4;
            break;
          case 'miles':
            $result = $value / 16093444;
            break;

          default:
            // code...
            break;
        }
        break;
      case 'centimetres':
        switch ($resultUnit2) {
          case 'millimetres':
            $result = $value * 10;
            break;
          case 'metres':
            $result = $value / 100;
            break;
          case 'kilometres':
            $result = $value / 100000;
            break;
          case 'inches':
            $result = $value / 2.54;
            break;
          case 'feet':
            $result = $value / 30.48;
            break;
          case 'yards':
            $result = $value / 91.44;
            break;
          case 'miles':
            $result = $value / 160934.4;
            break;

          default:
            // code...
            break;
        }
        break;
      case 'metres':
        switch ($resultUnit2) {
          case 'millimetres':
            $result = $value * 1000;
            break;
          case 'centimetres':
            $result = $value * 100;
            break;
          case 'kilometres':
            $result = $value / 1000;
            break;
          case 'inches':
            $result = $value * 39.37;
            break;
          case 'feet':
            $result = $value * 3.281;
            break;
          case 'yards':
            $result = $value * 1.094;
            break;
          case 'miles':
            $result = $value / 1609.344;
            break;

          default:
            // code...
            break;
        }
        break;
      case 'kilometres':
        switch ($resultUnit2) {
          case 'millimetres':
            $result = $value * 1000000;
            break;
          case 'centimetres':
            $result = $value * 100000;
            break;
          case 'metres':
            $result = $value * 1000;
            break;
          case 'inches':
            $result = $value * 39370.079;
            break;
          case 'feet':
            $result = $value * 3280.84;
            break;
          case 'yards':
            $result = $value * 1093.613;
            break;
          case 'miles':
            $result = $value / 1.609344;
            break;

          default:
            // code...
            break;
        }
        break;
      case 'inches':
        switch ($resultUnit2) {
          case 'millimetres':
            $result = $value * 25.4;
            break;
          case 'centimetres':
            $result = $value * 2.54;
            break;
          case 'metres':
            $result = $value / 39.37;
            break;
          case 'kilometres':
            $result = $value / 39370.079;
            break;
          case 'feet':
            $result = $value / 12;
            break;
          case 'yards':
            $result = $value / 36;
            break;
          case 'miles':
            $result = $value / 63360;
            break;

          default:
            // code...
            break;
        }
        break;
      case 'feet':
        switch ($resultUnit2) {
          case 'millimetres':
            $result = $value * 304.8;
            break;
          case 'centimetres':
            $result = $value * 30.48;
            break;
          case 'metres':
            $result = $value / 3.281;
            break;
          case 'kilometres':
            $result = $value / 3280.84;
            break;
          case 'inches':
            $result = $value * 12;
            break;
          case 'yards':
            $result = $value / 3;
            break;
          case 'miles':
            $result = $value / 5280;
            break;

          default:
            // code...
            break;
        }
        break;
      case 'yards':
        switch ($resultUnit2) {
          case 'millimetres':
            $result = $value * 914.4;
            break;
          case 'centimetres':
            $result = $value * 91.44;
            break;
          case 'metres':
            $result = $value / 1.094;
            break;
          case 'kilometres':
            $result = $value / 1093.613;
            break;
          case 'inches':
            $result = $value * 36;
            break;
          case 'feet':
            $result = $value * 3;
            break;
          case 'miles':
            $result = $value / 1760;
            break;

          default:
            // code...
            break;
        }
        break;
      case 'miles':
        switch ($resultUnit2) {
          case 'millimetres':
            $result = $value * 1609344;
            break;
          case 'centimetres':
            $result = $value * 160934.4;
            break;
          case 'metres':
            $result = $value * 1609.344;
            break;
          case 'kilometres':
            $result = $value * 1.609;
            break;
          case 'inches':
            $result = $value * 63360;
            break;
          case 'feet':
            $result = $value * 5280;
            break;
          case 'yards':
            $result = $value * 1760;
            break;

          default:
            // code...
            break;
        }
        break;

      default:
        // code...
        break;
    }
    return $result;
  }

  // WEIGHT
  public function weight($resultUnit1, $resultUnit2, $value) {

    switch ($resultUnit1) {
      case 'milligram':
        switch ($resultUnit2) {
          case('gram'):
            $result = $value / 1000;
            break;

          case('dekagram'):
            $result = $value / 10000;
            break;

          case('kilogram'):
            $result = $value / 1000000;
            break;

          case('ton'):
            $result = $value / 1000000000;
            break;

          case('ounce'):
            $result = $value / 28349.523;
            break;

          case('pound'):
            $result = $value / 453592.37;
            break;

          case('stoneUK'):
            $result = $value * 0.000000157473;
            break;

          case('stoneUS'):
            $result = $value * 0.0000001763698;
            break;

          default:
            // code...
            break;
          }

        break;

      case 'gram':
        // code...
        break;

      case 'dekagram':
        // code...
        break;

      case 'kilogram':
        // code...
        break;

      case 'ton':
        // code...
        break;

      case 'ounce':
        // code...
        break;

      case 'pound':
        // code...
        break;

      case 'stoneUK':
        // code...
        break;

      case 'stoneUS':
        // code...
        break;

      default:
        // code...
        break;
    }

    return $result;
  }

  // FUEL CONSUMPTION
  public function fuelConsumption($resultUnit1, $resultUnit2, $value) {

    switch ($resultUnit1) {
      case 'l/100km':
        switch ($resultUnit2) {
          case 'mpgUK':
            $result = 282.48 / $value;
            break;

          case 'mpgUS':
            $result = 235.21 / $value;
            break;

          default:
            // code...
            break;
        }
        break;

      case 'mpgUK':
        switch ($resultUnit2) {
          case 'l/100km':
            $result = 282.48 / $value;
            break;

          case 'mpgUS':
            $result = 0.83 * $value;
            break;

          default:
            // code...
            break;
        }
        break;

      case 'mpgUS':
        switch ($resultUnit2) {
          case 'l/100km':
            $result = 235.21 / $value;
            break;

          case 'mpgUK':
            $result = 1.2 * $value;
            break;

          default:
            // code...
            break;
        }
        break;

      default:
        // code...
        break;
    }
    return $result;
  }
}

$conv = new Conversions;
