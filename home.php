<?php
include("config.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styles.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body style="background-color:#ECF0F1;">
    <div class="container">
    <br><h1 class="text-center text-primary">Welcome Aboard!</h1></br>
  <center>
    <img src="images/logo.png" height="150px" alt="logo" >
</center>
    <div class="col-lg-8 col-xl-8 col-md-8 col-md-8 m-auto d-block">
    <div class="card">

      <?php

             $exp=60*60*24*60+time();
             setcookie('last_visit', date("d/m/y"),$exp);
             if(isset($_COOKIE [ 'last_visit' ] ) )
               {
                     $visit=$_COOKIE['last_visit'];
                     echo '<span style="color:red;">  👋<br>Your last visit was: </span>'. $visit;
               }
             else
               {
                  echo"SORRY COULD NOT FIND YOUR LAST VISIT!";

               }
    ?>

  <section>
    <center>
  <div>
  <h1>MCS: First Semester Resources</h1>
  <h6><a href="https://drive.google.com/drive/folders/1U1HXZ0kOS5Z6TwNun8FZgirEwfQvvNW8">Design and Analysis of Algorithms</a></h6>
  <h6><a href="https://drive.google.com/drive/folders/1UxWsJ8zpI0Yj9GilO7rIM26l1mESI82u">Mathematical Foundation</a></h6>
  <h6><a href="https://drive.google.com/drive/folders/16PX-NSjZhWyKXtz65vL4G7G8S9BPcZNr">Information Security</a></h6>
  <h6><a href="https://drive.google.com/drive/folders/1KdFW-fMWwL5-_NDwf8a2ixS271-QsRnl">Data Mining</a></h6>
  <h6><a href="https://drive.google.com/drive/folders/1gxvaB7lRjK8y_GcuvmMzu1HE83hzF9pZ">Artificial Intelligence</a></h6>
  </div>
  <div>
  <h1>MCS: Second Semester Resources</h1>
  <h6><a href="https://drive.google.com/drive/folders/1_z7oyn6d7CF5phJ0AHgBypeeIByC3jEn">Advanced Operating System</a></h6>
  <h6><a href="https://drive.google.com/drive/folders/1zZ8S042znASPqMjAp7lQng-g5FFwRE9h">Machine Learning</a></h6>
  <h6><a href="https://drive.google.com/drive/folders/1KA9dGd5u4yG132-IzQBUTTIioZnQokDy">Communication Networks</a></h6>
  <h6><a href="https://drive.google.com/drive/folders/1pHk1bim5BD6uybIPPJzoZ-0ze7S4o_mF">Java Programming</a></h6>
  <h6><a href="https://drive.google.com/drive/folders/1GlF5YkLvLApcc7qJLsZcjRrtuZrsy1Iz">Database Applications</a></h6>
  </div>
</center>
  </section>

<br>
<br>


    </div>
    <div>
    <a href="logout.php" class="btn">LOGOUT</a>
    </div><br>
    <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p><a href="#">Privacy</a> · <a href="#">Terms</a></p>
      </footer>
</body>
</html>
