<?php

@include 'config.php';

session_start();

if($_SESSION['role']!='admin'){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="cssL/style.css">

</head>
<body>
   
<!-- <div class="container">
</div> -->
   <!-- Navbar -->
<div class="navbar">
   <div class="logo">
      <a href="index.php">
      Kosova
      </a>
   </div>
   <div class="menu">
   <ul>
			<li><a href="display.php">Users</a></li>
			<li><a href="#package">Points</a></li>
			<li><a href="#fixtures">Fixtures</a></li>
			<li><a href="#contact">Players</a></li>
		</ul>
   </div>
</div>

<!-- Page content -->
<!-- <div style="padding: 16px">
	<h1>Navbar Example</h1>
	<p>A responsive navbar that collapses on small screens</p>
</div> -->
   <!-- <div class="content">
      <h3>hi, <span>admin</span></h3>
      <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>this is an admin page</p>
      <a href="login_form.php" class="btn">login</a>
      <a href="register_form.php" class="btn">register</a>
      <a href="logout.php" class="btn">logout</a>
   </div> -->



</body>
</html>