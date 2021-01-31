<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Guessing Game in PHP</title>
  </head>
  <body>


<?php
  $userGuess = isset($_POST['inputGuess']) ? $_POST['inputGuess'] : '';
?>


<h1>Guessing game in PHP</h1>

<form method="post">
  <label for="inputGuess">Guess the number:</label> <br>
  <input type="text" name="inputGuess" value="<?= htmlentities($userGuess) ?>">
  <input type="submit" value="Try Your Luck"> <br>
</form>


<?php
if (strlen($userGuess) === 0) {
  echo '<br> You need to input something!';
} else if (strlen($userGuess) > 4 && is_numeric($userGuess)) {
  echo '<br> You for real? <br> Way smaller dude!';
} else if (! is_numeric($userGuess)) {
  echo '<br> You need to input a NUMBER!';
} else if ($userGuess > 420) {
  echo '<br> The number you have chosen is too big';
} else if ($userGuess < 420) {
  echo '<br> The number you have chosen is too small';
} else {
  echo '<br> You got it! the number is "'.$userGuess.'" lol.' ;
}
?>


  </body>
</html>
