<!DOCTYPE html>
<!-- ICS2O-Unit4-04-PHP-Museum -->
<html lang="en-ca">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="This program will tell the user the discounts and prices they will have to pay in order to attend a museum depending on their age and date of the visit.">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Katie G">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css"> 
    <title>Museum of Chaos Theory!!!!!</title>
 
    <!-- The favicon on this page is summoned (displayed) with these lines of code -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav/favicon-16x16.png">
  </head>
<body>
  <!-- Header, more specifically the largest header possible, primarily for visual structural aesthetic. -->
  <?php 
    echo "<h1>Welcome to the Museum of Chaos Theory!!</h1>";
  ?>

  <!-- Description text about the website that will let the user know what is happening on this website, just in case the title did not sufficiently tell them. -->
  <?php
    echo "<p>Welcome to the museum of Chaos Theory! We are delighted that you have chosen us for your scientific destination in your itinerary, and we are eager to impart our knowledge of this key theory onto you. Allow us to provide peace to you in this world full of chaos and communicate to you how much you will have to pay.</p>"
  ?>

  <!-- This form collects the user's age & date of visit for their museum visit. -->
  <form action="./results.php" method="post" target="museum-price">
    <label id="age-of-user" for="user-age">Input your age.</label>
    <input type="number" id="user-age" step="1" min="0" max="122" placeholder="Age" name="user-age">
    <br>
    <br>

    <!-- dropdown menu selector -->
    <label id="day-color" for="day">What day of the week will you be attending?</label>
    <br>
    <select name="day" id="day">
      <option value="mon">Monday</option>
      <option value="tues">Tuesday</option>
      <option value="wed">Wednesday</option>
      <option value="thurs">Thursday</option>
      <option value="fri">Friday</option>
      <option value="sat">Saturday</option>
      <option value="sun">Sunday</option>
    </select>
    <br>
    <br>
    <br>

    <!-- button -->
    <input type="submit" value="Admission Price">
    <br>
    <br>
  </form>
  <!-- this section of the code will tell the user what  -->
  <iframe id="museum-price" name="museum-price">
  </iframe>
</body>
</html>