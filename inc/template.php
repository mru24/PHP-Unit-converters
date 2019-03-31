<?php

if(isset($_POST['convert'])) {
  if(!empty($_POST['value']) && !empty($_POST['unit1']) && !empty($_POST['unit2'])) {
    // $value = preg_replace('/[^0-9]/', '', $_POST['value']);
    $value = $_POST['value'];
    $resultUnit1 = $_POST['unit1'];
    $resultUnit2 = $_POST['unit2'];
    if($resultUnit1 != $resultUnit2) {
      $result = $conv->$function($resultUnit1, $resultUnit2, $value);
    } else {
      $error = "Select different units";
    }
  } else {
    $error = "Input some data";
  }
}
?>

<div class="template">
  <h2>
    <?php echo $function; ?>
  </h2>
  <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">

<!-- INPUT FIELD -->
    <input type="number" name="value" step="0.001" value="<?php echo $value; ?>">
<!-- INPUT FIELD END -->

<!-- RESULT DISPLAY -->
  <div class="display">

    <?php

    if(!empty($result)) {
      echo round($result, 8);
    } else {
      if(isset($error)) {
        echo $error;
      }
    }

    if(isset($resultUnit2) && (!isset($error))) : ?>

      <span>&deg; <?php echo $resultUnit2; ?></span>

    <?php endif; ?>

  </div>
<!-- RESULT DISPLAY END -->

<!-- UNIT SELECTOR -->
    <div class="units">
      <div class="unit1">

      <?php for ($a=0; $a < count($unit); $a++) : ?>
        <label>
          <input type="radio" name="unit1" value="<?php echo $unit[$a]; ?>"
          <?php if(isset($resultUnit1) && $resultUnit1 == $unit[$a]) {
            echo 'checked="checked"';
          } ?>>
          <div class="unitButton">
            <?php echo $unit[$a]; ?>
          </div>
        </label>
      <?php endfor; ?>

      </div>

      <div class="unit2">

      <?php for ($b=0; $b < count($unit); $b++) : ?>
        <label>
          <input type="radio" name="unit2" value="<?php echo $unit[$b]; ?>"
          <?php if(isset($resultUnit2) && $resultUnit2 == $unit[$b]) {
            echo 'checked="checked"';
          } ?>>
          <div class="unitButton">
            <?php echo $unit[$b]; ?>
          </div>
        </label>
      <?php endfor; ?>

      </div>
    </div>
<!-- UNIT SELECTOR END -->

<!-- SUBMIT BUTTON -->
    <button id="submit" type="submit" name="convert"><i class="fas fa-arrow-circle-right"></i> Convert</button>
<!-- SUBMIT BUTTON END -->

  </form>



</div>
