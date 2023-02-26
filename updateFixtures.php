

<?php
include 'config.php';
$id=$_GET['updateid'];

$sql="select * from `games` where id=$id";

$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$date = $row['date'] ;
$game = $row['game'] ;
$stadium = $row['stadium'] ;
$time = $row['time'] ; 


if(isset($_POST['submit'])){
    $date = $_POST['date'] ;
    $game = $_POST['game'] ;
    $stadium = $_POST['stadium'] ;
    $time = $_POST['time'] ; 
  

  $sql="update `games` set id=$id ,date='$date' ,game='$game' ,stadium='$stadium' ,
  time='$time' where id=$id";
  $result=mysqli_query($conn,$sql);

 
if($result){
  // echo "updated successfully";
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
    <title>Crud</title>
  
   
  </head>
  <body>
    <div class="container my-5">
  <form method="post">
    <h2 style="display:flex; justify-content:center;  align-items:center;">Add a Player</h2>
    <div class="inputBox">
        
        <!-- <input type="img" class="form-control" name="img" autocomplete="off" required="required">
        <span>Insert Img</span> -->
      </div>
    <div class="inputBox">
        <input type="date" class="form-control" name="date" required="required" 
        value=<?php echo $date;?>>
        <span>Enter Date</span>
      </div>
    <div class="inputBox">
        <input type="text" class="form-control" name="game" required="required"
        value=<?php echo $game;?>>
        <span>Enter Game</span>
      </div>
    <div class="inputBox">
        <input type="text" class="form-control"  name="stadium" required="required"
        value=<?php echo $stadium;?>>
        <span>Enter Stadium</span>
      </div>
      <div class="inputBox">
        <input type="time" class="form-control"  name="time" required="required"
        value=<?php echo $time;?>>
        <span>Enter Time</span>
      </div>
    <div class="divBtn">
    <button type="submit" class="btn" name="submit"> Submit</button>
    </div>
  </form>
 </div>
  </body>
</html>