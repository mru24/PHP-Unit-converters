<?php

require 'inc/conversions.php';

if(isset($_POST['convert'])) {
  if(!empty($_POST['unit']) && !empty($_POST['value'])) {
    $value = preg_replace('/[^0-9]/', '', $_POST['value']);
    $resultUnit = $_POST['unit'];
    $result = $conv->temperature($resultUnit, $value);
  } else {
    $error = "Input some data";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <link rel="stylesheet" href="css/style.min.css">
</head>
<body>
  <div class="container">
    <div class="temperature">
      <h2>Temperature conversion</h2>
      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="number" name="value" value="<?php echo $value; ?>">


        <div class="radioButtons">
          <label>
            <input type="radio" name="unit" value="fahrenheit"
              <?php if(isset($resultUnit) && $resultUnit == "fahrenheit") {
                echo 'checked="checked"';
              } ?>>
            <div class="unitButton">Celsius</div>
          </label>

          <label>
            <input type="radio" name="unit" value="celsius"
            <?php if(isset($resultUnit) && $resultUnit == "celsius") {
              echo 'checked="checked"';
            } ?>>
            <div class="unitButton">Fahrenheit</div>
          </label>

        </div>

        <button type="submit" name="convert"><i class="fas fa-arrow-circle-right"></i> Convert</button>

      </form>
      <div class="display">

        <?php

        if(!empty($result)) {
          echo $result;
        } else {
          if(isset($error)) {
            echo $error;
          }
        }

        ?>

        <?php if(isset($resultUnit)) { ?>
          <span>&deg; <?php echo $resultUnit; ?></span>
        <?php } ?>

      </div>
    </div>
  </div>

</body>
</html>
