<?php
require 'inc/conversions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Unit Converter | WWProject Studio</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <link rel="stylesheet" href="css/style.min.css">
</head>
<body>


  <div class="container">

    <?php if(isset($_GET['id'])) {

      switch ($_GET['id']) {
        case 'temp':
          include 'inc/temperature.php';
          include 'inc/nav.php';
          break;

        case 'length':
          include 'inc/length.php';
          include 'inc/nav.php';
          break;

        case 'weight':
          include 'inc/weight.php';
          include 'inc/nav.php';
          break;

        case 'fuel_consumption':
          include 'inc/fuel_consumption.php';
          include 'inc/nav.php';
          break;

        default:

        ?>
        <div class="error">
          <h1>Woops.. Something went wrong direction.</h1>
          <?php
          include 'inc/nav.php';
          ?>
        </div>
        <?php
          break;
      }
    } else {
      echo "<h1>Unit converters</h1>";
      include 'inc/home.php';
      include 'inc/nav.php';
    } ?>
  </div>

  <script src="js/main.js" charset="utf-8"></script>
</body>
</html>
