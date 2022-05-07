<?php
  $user_age = $_POST["user-age"];
  $user_day_of_week = $_POST["day"];
?>
<h5>Results:</h5>
<?php
  if ($user_age < 5 || $user_age > 95) {
    echo "Admission is free!";
  }
  else if ($user_age >= 12 && $user_age <= 21 || $user_day_of_week == "tues" || $user_day_of_week == "thurs") {
    echo "You receive the student discount!";
  }
  else {
    echo "You pay the regular price.";
  }
?>