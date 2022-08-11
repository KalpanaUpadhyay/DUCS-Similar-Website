<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/840b1ebd19.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
    <title>Register Yourself</title>

</head>
<body>
<img src="images/bg-exam.jpg" width="200" style="vertical-align-middle" alt="">
<img src="images/un.jpg" width="220" style="vertical-align-middle" alt="">
<img src="images/1.jpg" width="220" style="vertical-align-middle" alt="">
<img src="images/r.jpg" width="220" style="vertical-align-middle" alt="">
<img src="images/c.jpg" width="220" style="vertical-align-middle" alt="">
<img src="images/4.jpg" width="220" style="vertical-align-middle" alt="">
<img src="images/bg-exam.jpg" width="220" style="vertical-align-middle" alt="">

    <form method="POST" action="register.php">
    <div class="container">
        <h1>WELCOME TO REGISTRATION PAGE</h1>
        <div class="box">
            <i class="fa fa-user"></i>
            <input type="text" name="user" id="user" placeholder="Enter your name">
        </div>

        <div class="box">
            <i class="fa fa-key"></i>
            <input type="password" name="password" id="password" placeholder="Choose a password">
        </div>

        <div class="box">
            <i class="fa fa-key"></i>
            <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password">
        </div>

        <input class="btn" type="submit" name="submit" value="Register"/>
        <a href="login1.php" class="btn">Login</a>
    </div>
</form>
</body>
</html>


<?php

include("config.php");

if(isset($_POST['submit']))
{

	  $user = $_POST['user'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];


    $query = "insert into logindetails(user,password,confirm_password)
    values ('$user','$password','$confirm_password')";
     mysqli_query($con,$query);
if($query)
{
	echo "<script>alert('😍Successfully Registered. Now you can Login');</script>";

}

}

?>
