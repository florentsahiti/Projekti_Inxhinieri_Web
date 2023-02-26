<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="cssL/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>hi, <span style="background-color:blue;">user</span></h3>
      <h1>welcome <span style="color:blue;"><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>this is an user page</p>
      <a href="login_form.php" style="background-color:blue;" class="btn">login</a>
      <a href="register_form.php" style="background-color:blue;" class="btn">register</a>
      <a href="logout.php" style="background-color:blue;" class="btn">logout</a>
   </div>

</div>

</body>
</html>