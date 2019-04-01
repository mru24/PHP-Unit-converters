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
    $unit = array(
      'millimetres',
      'centimetres',
      'metres',
      'kilometres',
      'inches',
      'feet',
      'yards',
      'miles'
    );

    switch (true) {
      // MILIMETRES TO CENTIMETRES
      case($resultUnit1 == $unit[0] && $resultUnit2 == $unit[1]):
        $result = $value * 0.1;
        return $result;
        break;
      // MILIMETRES TO METRES
      case($resultUnit1 == $unit[0] && $resultUnit2 == $unit[2]):
        $result = $value * 0.001;
        return $result;
        break;
      // MILIMETRES TO KILOMETRES
      case($resultUnit1 == $unit[0] && $resultUnit2 == $unit[3]):
        $result = $result = $value * 0.000001;
        return $result;
        break;
      // MILIMETRES TO INCHES
      case($resultUnit1 == $unit[0] && $resultUnit2 == $unit[4]):
        $result = $value * 0.03937007874;
        return $result;
        break;
      // MILIMETRES TO FEET
      case($resultUnit1 == $unit[0] && $resultUnit2 == $unit[5]):
        $result = $value * 0.0032808399;
        return $result;
        break;
      // MILIMETRES TO YARDS
      case($resultUnit1 == $unit[0] && $resultUnit2 == $unit[6]):
        $result = $value * 0.0010936133;
        return $result;
        break;
      // MILIMETRES TO MILES
      case($resultUnit1 == $unit[0] && $resultUnit2 == $unit[7]):
        $result = $value * 0.00000062137;
        return $result;
        break;

        // CENTIMETRES TO MILIMETRES
        case($resultUnit1 == $unit[1] && $resultUnit2 == $unit[0]):
          $result = $value * 10;
          return $result;
          break;
        // CENTIMETRES TO METRES
        case($resultUnit1 == $unit[1] && $resultUnit2 == $unit[2]):
          $result = $value * 0.01;
          return $result;
          break;
        // CENTIMETRES TO KILOMETRES
        case($resultUnit1 == $unit[1] && $resultUnit2 == $unit[3]):
          $result = $value * 0.00001;
          return $result;
          break;
        // CENTIMETRES TO INCHES
        case($resultUnit1 == $unit[1] && $resultUnit2 == $unit[4]):
          $result = $value * 0.3937007874;
          return $result;
          break;
        // CENTIMETRES TO FEET
        case($resultUnit1 == $unit[1] && $resultUnit2 == $unit[5]):
          $result = $value * 0.032808399;
          return $result;
          break;
        // CENTIMETRES TO YARDS
        case($resultUnit1 == $unit[1] && $resultUnit2 == $unit[6]):
          $result = $value * 0.010936133;
          return $result;
          break;
        // CENTIMETRES TO MILES
        case($resultUnit1 == $unit[1] && $resultUnit2 == $unit[7]):
          $result = 0.00000621371192;
          return $result;
          break;

      // METRES TO MILIMETRES
      case($resultUnit1 == $unit[2] && $resultUnit2 == $unit[0]):
        $result = $value * 1000;
        return $result;
        break;
      // METRES TO CENTIMETRES
      case($resultUnit1 == $unit[2] && $resultUnit2 == $unit[1]):
        $result = $value * 100;
        return $result;
        break;
      // METRES TO KILOMETRES
      case($resultUnit1 == $unit[2] && $resultUnit2 == $unit[3]):
        $result = $value * 0.001;
        return $result;
        break;
      // METRES TO INCHES
      case($resultUnit1 == $unit[2] && $resultUnit2 == $unit[4]):
        $result = $value * 39.37007874;
        return $result;
        break;
      // METRES TO FEET
      case($resultUnit1 == $unit[2] && $resultUnit2 == $unit[5]):
        $result = $value * 3.2808399;
        return $result;
        break;
      // METRES TO YARDS
      case($resultUnit1 == $unit[2] && $resultUnit2 == $unit[6]):
        $result = $value * 1.0936133;
        return $result;
        break;
      // METRES TO MILES
      case($resultUnit1 == $unit[2] && $resultUnit2 == $unit[7]):
        $result = 0.000621371192;
        return $result;
        break;

        // KILOMETRES TO MILIMETRES
        case($resultUnit1 == $unit[3] && $resultUnit2 == $unit[0]):
          $result = $value * 1000000;
          return $result;
          break;
        // KILOMETRES TO CENTIMETRES
        case($resultUnit1 == $unit[3] && $resultUnit2 == $unit[1]):
          $result = $value * 100000;
          return $result;
          break;
        // KILOMETRES TO METRES
        case($resultUnit1 == $unit[3] && $resultUnit2 == $unit[2]):
          $result = $value * 1000;
          return $result;
          break;
        // KILOMETRES TO INCHES
        case($resultUnit1 == $unit[3] && $resultUnit2 == $unit[4]):
          $result = $value * 39370.07874;
          return $result;
          break;
        // KILOMETRES TO FEET
        case($resultUnit1 == $unit[3] && $resultUnit2 == $unit[5]):
          $result = $value * 3280.8399;
          return $result;
          break;
        // KILOMETRES TO YARDS
        case($resultUnit1 == $unit[3] && $resultUnit2 == $unit[6]):
          $result = $value * 1093.6133;
          return $result;
          break;
        // KILOMETRES TO MILES
        case($resultUnit1 == $unit[3] && $resultUnit2 == $unit[7]):
          $result = 0.621371192;
          return $result;
          break;

          // INCHES TO MILIMETRES
          case($resultUnit1 == $unit[4] && $resultUnit2 == $unit[0]):
            $result = $value * 25.4;
            return $result;
            break;
          // INCHES TO CENTIMETRES
          case($resultUnit1 == $unit[4] && $resultUnit2 == $unit[1]):
            $result = $value * 2.54;
            return $result;
            break;
          // INCHES TO METRES
          case($resultUnit1 == $unit[4] && $resultUnit2 == $unit[2]):
            $result = $value * 0.254;
            return $result;
            break;
          // INCHES TO KILOMETRES
          case($resultUnit1 == $unit[4] && $resultUnit2 == $unit[3]):
            $result = $value * 0.0000254;
            return $result;
            break;
          // INCHES TO FEET
          case($resultUnit1 == $unit[4] && $resultUnit2 == $unit[5]):
            $result = $value * 0.083333333;
            return $result;
            break;
          // INCHES TO YARDS
          case($resultUnit1 == $unit[4] && $resultUnit2 == $unit[6]):
            $result = $value * 0.0277777778;
            return $result;
            break;
          // INCHES TO MILES
          case($resultUnit1 == $unit[4] && $resultUnit2 == $unit[7]):
            $result = 0.0000157828;
            return $result;
            break;

        // FEET TO MILIMETRES
        case($resultUnit1 == $unit[5] && $resultUnit2 == $unit[0]):
          $result = $value * 304.8;
          return $result;
          break;
        // FEET TO CENTIMETRES
        case($resultUnit1 == $unit[5] && $resultUnit2 == $unit[1]):
          $result = $value * 30.48;
          return $result;
          break;
        // FEET TO METRES
        case($resultUnit1 == $unit[5] && $resultUnit2 == $unit[2]):
          $result = $value * 0.3048;
          return $result;
          break;
        // FEET TO KILOMETRES
        case($resultUnit1 == $unit[5] && $resultUnit2 == $unit[3]):
          $result = $value * 0.0003048;
          return $result;
          break;
        // FEET TO INCHES
        case($resultUnit1 == $unit[5] && $resultUnit2 == $unit[4]):
          $result = $value * 12;
          return $result;
          break;
        // FEET TO YARDS
        case($resultUnit1 == $unit[5] && $resultUnit2 == $unit[6]):
          $result = $value * 0.3333333333;
          return $result;
          break;
        // FEET TO MILES
        case($resultUnit1 == $unit[5] && $resultUnit2 == $unit[7]):
          $result = 0.0001893932;
          return $result;
          break;

          // YARDS TO MILIMETRES
          case($resultUnit1 == $unit[6] && $resultUnit2 == $unit[0]):
            $result = $value * 914.4;
            return $result;
            break;
          // YARDS TO CENTIMETRES
          case($resultUnit1 == $unit[6] && $resultUnit2 == $unit[1]):
            $result = $value * 91.44;
            return $result;
            break;
          // YARDS TO METRES
          case($resultUnit1 == $unit[6] && $resultUnit2 == $unit[2]):
            $result = $value * 0.9144;
            return $result;
            break;
          // YARDS TO KILOMETRES
          case($resultUnit1 == $unit[6] && $resultUnit2 == $unit[3]):
            $result = $value * 0.0009144;
            return $result;
            break;
          // YARDS TO INCHES
          case($resultUnit1 == $unit[6] && $resultUnit2 == $unit[4]):
            $result = $value * 36;
            return $result;
            break;
          // YARDS TO FEET
          case($resultUnit1 == $unit[6] && $resultUnit2 == $unit[5]):
            $result = $value * 3;
            return $result;
            break;
          // YARDS TO MILES
          case($resultUnit1 == $unit[6] && $resultUnit2 == $unit[7]):
            $result = 0.0005681797;
            return $result;
            break;

        // MILES TO MILIMETRES
        case($resultUnit1 == $unit[7] && $resultUnit2 == $unit[0]):
          $result = $value * 1609350;
          return $result;
          break;
        // MILES TO CENTIMETRES
        case($resultUnit1 == $unit[7] && $resultUnit2 == $unit[1]):
          $result = $value * 160935;
          return $result;
          break;
        // MILES TO METRES
        case($resultUnit1 == $unit[7] && $resultUnit2 == $unit[2]):
          $result = $value * 1609.35;
          return $result;
          break;
        // MILES TO KILOMETRES
        case($resultUnit1 == $unit[7] && $resultUnit2 == $unit[3]):
          $result = $value * 1.60935;
          return $result;
          break;
        // MILES TO INCHES
        case($resultUnit1 == $unit[7] && $resultUnit2 == $unit[4]):
          $result = $value * 63360.23622;
          return $result;
          break;
        // MILES TO FEET
        case($resultUnit1 == $unit[7] && $resultUnit2 == $unit[5]):
          $result = $value * 5280.019685;
          return $result;
          break;
        // MILES TO YARDS
        case($resultUnit1 == $unit[7] && $resultUnit2 == $unit[6]):
          $result = 1760.0065617;
          return $result;
          break;

      default:
        // code...
        break;
    }
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
            $result = $value * 0.000035274;
            break;

          case('pound'):
            $result = $value * 0.0000022046;
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
