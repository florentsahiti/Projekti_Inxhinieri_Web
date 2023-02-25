<?php
include 'config.php';
if(isset($_POST['submit'])){
  $name = $_POST['name'] ;
  $email = $_POST['email'] ;
  $user_type = $_POST['user_type'] ;
  $password = $_POST['password'] ; 

  $sql="insert into `user_form` (name,email,user_type,password)
  values('$name','$email','$user_type','$password')";
  $result=mysqli_query($conn,$sql);

 
if($result){
  // echo "data inserted successfully";
  header('location: display.php');
}
 else{
  die(mysqli_error($conn));
  }
}
?>





<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="cssL/display.css">
    <title>Crud</title>
   
  </head>
  <body>
    <div class="container my-5">
  <form method="post">
    <h2 style="display:flex; justify-content:center;  align-items:center;">Add a user</h2>
    <div class="inputBox">
        
        <input type="text" class="form-control" name="name" autocomplete="off" required="required">
        <span>enter your name</span>
      </div>
    <div class="inputBox">
        <input type="email" class="form-control" name="email" required="required">
        <span>enter your email</span>
      </div>
    <div class="inputBox">
        <input type="text" class="form-control" name="user_type" required="required">
        <span>enter your phone number</span>
      </div>
    <div class="inputBox">
        <input type="password" class="form-control"  name="password" required="required">
        <span>enter your password</span>
      </div>
    <div class="divBtn">
    <button type="submit" class="btn" name="submit">Submit</button>
    </div>
  </form>
 </div>
  </body>
</html>