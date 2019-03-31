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

    <input type="number" name="value" step="0.001" value="<?php echo $value; ?>">

    <div class="units">
      <div class="unit1">
        <label>
          <input type="radio" name="unit1" value="<?php echo $unit1 ?>"
            <?php if(isset($resultUnit1) && $resultUnit1 == $unit1) {
              echo 'checked="checked"';
            } ?>>
          <div class="unitButton">
            <?php echo $unit1; ?>
          </div>
        </label>

      <?php if(isset($unit2)) : ?>
        <label>
          <input type="radio" name="unit1" value="<?php echo $unit2; ?>"
          <?php if(isset($resultUnit1) && $resultUnit1 == $unit2) {
            echo 'checked="checked"';
          } ?>>
          <div class="unitButton">
            <?php echo $unit2; ?>
          </div>
        </label>
      <?php endif; ?>

      <?php if(isset($unit3)) : ?>
        <label>
          <input type="radio" name="unit1" value="<?php echo $unit3; ?>"
          <?php if(isset($resultUnit1) && $resultUnit1 == $unit3) {
            echo 'checked="checked"';
          } ?>>
          <div class="unitButton">
            <?php echo $unit3; ?>
          </div>
        </label>
      <?php endif; ?>

      <?php if(isset($unit4)) : ?>
        <label>
          <input type="radio" name="unit1" value="<?php echo $unit4; ?>"
          <?php if(isset($resultUnit1) && $resultUnit1 == $unit4) {
            echo 'checked="checked"';
          } ?>>
          <div class="unitButton">
            <?php echo $unit4; ?>
          </div>
        </label>
      <?php endif; ?>

      </div>

      <div class="unit2">
        <label>
          <input type="radio" name="unit2" value="<?php echo $unit1; ?>"
            <?php if(isset($resultUnit2) && $resultUnit2 == $unit1) {
              echo 'checked="checked"';
            } ?>>
          <div class="unitButton">
            <?php echo $unit1; ?>
          </div>
        </label>

        <label>
          <input type="radio" name="unit2" value="<?php echo $unit2 ?>"
          <?php if(isset($resultUnit2) && $resultUnit2 == $unit2) {
            echo 'checked="checked"';
          } ?>>
          <div class="unitButton">
            <?php echo $unit2; ?>
          </div>
        </label>

        <label>
          <input type="radio" name="unit2" value="<?php echo $unit3 ?>"
          <?php if(isset($resultUnit2) && $resultUnit2 == $unit3) {
            echo 'checked="checked"';
          } ?>>
          <div class="unitButton">
            <?php echo $unit3; ?>
          </div>
        </label>
      </div>
    </div>

    <button type="submit" name="convert"><i class="fas fa-arrow-circle-right"></i> Convert</button>

  </form>

  <div class="display">

    <?php

    if(!empty($result)) {
      echo round($result, 3);
    } else {
      if(isset($error)) {
        echo $error;
      }
    }

    if(isset($resultUnit2) && (!isset($error))) : ?>

      <span>&deg; <?php echo $resultUnit2; ?></span>

    <?php endif; ?>

  </div>
</div>
