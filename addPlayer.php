<?php
include 'config.php';
if(isset($_POST['submit'])){
  $img = $_POST['img'] ;
  $position = $_POST['position'] ;
  $name = $_POST['name'] ;
  $bio = $_POST['bio'] ; 

  $sql="insert into `players` (img,position,name,bio)
  values('$img','$position','$name','$bio')";
  $result=mysqli_query($conn,$sql);

 
if($result){
  // echo "data inserted successfully";
  header('location: playerDashboard.php');
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
    <h2 style="display:flex; justify-content:center;  align-items:center;">Add a Player</h2>
    <div class="inputBox">
        
        <input type="text" class="form-control" name="img" autocomplete="off" required="required">
        <span>Insert Img</span>
      </div>
    <div class="inputBox">
        <input type="text" class="form-control" name="position" required="required">
        <span>Enter Position</span>
      </div>
    <div class="inputBox">
        <input type="text" class="form-control" name="name" required="required">
        <span>Enter Name</span>
      </div>
    <div class="inputBox">
        <input type="text" class="form-control"  name="bio" required="required">
        <span>Enter biography</span>
      </div>
    <div class="divBtn">
    <button type="submit" class="btn" name="submit"> Submit</button>
    </div>
  </form>
 </div>
  </body>
</html>