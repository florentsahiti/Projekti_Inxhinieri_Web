<?php
include 'config.php';
if(isset($_POST['submit'])){
  $date = $_POST['date'] ;
  $game = $_POST['game'] ;
  $stadium = $_POST['stadium'] ;
  $time = $_POST['time'] ; 

  $sql="insert into `games` (date,game,stadium,time)
  values('$date','$game','$stadium','$time')";
  $result=mysqli_query($conn,$sql);

 
if($result){
  // echo "data inserted successfully";
  header('location: fixtures.php');
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
    <title>fixtures</title>
   
  </head>
  <body>
    <div class="container my-5">
  <form method="post">
    <h2 style="display:flex; justify-content:center;  align-items:center;">Add a Game</h2>
    <div class="inputBox">
        
        <input type="date" class="form-control" name="date" autocomplete="off" required="required">
        <span>Enter Date</span>
      </div>
    <div class="inputBox">
        <input type="text" class="form-control" name="game" required="required">
        <span>Enter Game</span>
      </div>
    <div class="inputBox">
        <input type="text" class="form-control" name="stadium" required="required">
        <span>Enter Stadium</span>
      </div>
    <div class="inputBox">
        <input type="time" class="form-control"  name="time" required="required">
        <span>Enter Time</span>
      </div>
    <div class="divBtn">
    <button type="submit" class="btn" name="submit">Submit</button>
    </div>
  </form>
 </div>
  </body>
</html>