<?php
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST['password'];
  $confirm_password = $_POST["confirm_password"];
  $all_cool = true;
  if(isset($username) && isset($email) && isset($password) && isset($confirm_password)){
    if(strlen(trim($username)) < 1 || strlen(trim($email)) < 1 || strlen(trim($password)) < 1  || strlen(trim($confirm_password)) < 1){
      echo "<h3 style='color: red'>Please Enter Valid Data</h3>";
      $all_cool = false;
    }
    if(!strpos($email, '@')){
      echo "<h3 style='color: red'>Please Enter A Valid Email Address</h3>";
      $all_cool = false;
    }
    if($password !== $confirm_password){
      echo "<h3 style='color: red'>Password Mismatch!</h3>";
      $all_cool = false;
    }

    if(strlen(trim($password)) < 6){
      echo "<h3 style='color: red'>Password length should be more than 6 characters</h3>";
      $all_cool = false;
    }

    if(!$all_cool){
      echo "<a href='./registration.php'>Go Back</a>";
    }

    if($all_cool){
      // file stuffs Here
      $my_file = 'record.txt';
      $handle = fopen($my_file, 'a') or die('Cannot open file:  '.$my_file); ;
      $data = "\n\r".$username." ".$password;
      fwrite($handle, $data);
      echo "<h3 style='color: blue'> Registration Successful!!</h3>";
      echo "<a href='.'>Home</a>";
    }
  } else {
    echo "<a href='./registration.php'>Go Back</a>";
  }



 ?>
