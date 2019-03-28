<?php

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

    if(isset($resultUnit)) : ?>

      <span>&deg; <?php echo $resultUnit; ?></span>

    <?php endif; ?>

  </div>
</div>
