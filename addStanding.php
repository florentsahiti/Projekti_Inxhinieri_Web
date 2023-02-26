<?php
include 'config.php';
if(isset($_POST['submit'])){
  $Team = $_POST['Team'] ;
  $GP = $_POST['GP'] ;
  $W = $_POST['W'] ;
  $D = $_POST['D'] ;
  $L = $_POST['L'] ; 
  $GD = $_POST['GD'] ; 
  $PTS = $_POST['PTS'] ; 


  $sql="insert into `points` (Team,GP,W,D,L,GD,PTS)
  values('$Team','$GP','$W','$D','$L','$GD','$PTS')";
  $result=mysqli_query($conn,$sql);

 
if($result){
  // echo "data inserted successfully";
  header('location: pointsDashboard.php');
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
    <title>Standings</title>
   


 
  </head>
  <body>
    <div class="container my-5">
  <form method="post">
    <h2 style="display:flex; justify-content:center;  align-items:center;">Add Standing</h2>
    <div class="inputBox">
        
        <input type="text" class="form-control" name="Team" autocomplete="off" required="required">
        <span>Enter Team Name</span>
      </div>
    <div class="inputBox">
        <input type="text" class="form-control" name="GP" required="required">
        <span>Enter Games played</span>
      </div>
    <div class="inputBox">
        <input type="text" class="form-control" name="W" required="required">
        <span>Enter Wins</span>
      </div>
    <div class="inputBox">
        <input type="text" class="form-control"  name="D" required="required">
        <span>Enter Draws</span>
      </div>
      <div class="inputBox">
        <input type="text" class="form-control"  name="L" required="required">
        <span>Enter Loses</span>
      </div>
      <div class="inputBox">
        <input type="text" class="form-control"  name="GD" required="required">
        <span>Enter Goal Difference</span>
      </div>
      <div class="inputBox">
        <input type="text" class="form-control"  name="PTS" required="required">
        <span>Enter Points</span>
      </div>
    <div class="divBtn">
    <button type="submit" class="btn" name="submit">Submit</button>
    </div>
  </form>
 </div>
  </body>
</html>