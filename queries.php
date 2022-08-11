<?php
 include("config.php");
 if(isset($_POST['submit']))
 {
   $user = $_POST['user'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $message = $_POST['message'];

   $query = "insert into queries(user,email,phone,message)
   values('$user','$email','$phone','$message')";
    mysqli_query($con,$query);


}
header('location:index.php');
 ?>
