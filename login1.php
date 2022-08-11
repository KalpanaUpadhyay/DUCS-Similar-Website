<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/840b1ebd19.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
    <title>Welcome Student!</title>
</head>
<body>
  <img src="images/bg-exam.jpg" width="200" style="vertical-align-middle" >
  <img src="images/un.jpg" width="220" style="vertical-align-middle" >
  <img src="images/1.jpg" width="220" style="vertical-align-middle" >
  <img src="images/r.jpg" width="220" style="vertical-align-middle" >
  <img src="images/c.jpg" width="220" style="vertical-align-middle" >
  <img src="images/4.jpg" width="220" style="vertical-align-middle" >
  <img src="images/bg-exam.jpg" width="220" style="vertical-align-middle" >

    <form method="post" action="login1.php">
    <div class="container">
        <h1>Login Portal</h1>
        <div class="box">
            <i class="fa fa-user"></i>
            <input type="text" name="user" placeholder="Enter your Username">

        </div>
        <div class="box">
            <i class="fa fa-key"></i>
            <input type="password" name="password" placeholder="Enter your password">
        </div>
        <input class="btn" type="submit" name="submit" value="Login"/>
        <a style="text-decoration:none" href="register.php" class="btn">Register</a>
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
    $query = "select * from logindetails where user='$user' && password='$password'";
    $data = mysqli_query($con, $query);
    $total = mysqli_num_rows($data);
    if($total == 1)
    {
        $_SESSION['user'] = $user;
        header('location:home.php');
    }else{
        echo '<span style="color:red ;">  😕<br>Account not exists! <br> Please sign up </span>';
    }
}

?>
