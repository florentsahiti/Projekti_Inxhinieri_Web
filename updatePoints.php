<?php
include 'config.php';
$id=$_GET['updateid'];

$sql="select * from `points` where id=$id";

$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$Team=$row['Team'];
$GP=$row['GP'];
$W=$row['W'];
$D=$row['D'];
$L = $row['L']; 
$GD = $row['GD']; 
$PTS = $row['PTS']; 


if(isset($_POST['submit'])){
  $Team = $_POST['Team'] ;
  $GP = $_POST['GP'] ;
  $W = $_POST['W'] ;
  $D = $_POST['D'] ; 
  $L = $_POST['L'] ; 
  $GD = $_POST['GD'] ; 
  $PTS = $_POST['PTS'] ; 


  $sql="update `user_form` set id=$id ,Team='$Team' ,GP='$GP' ,W='$W',
  D='$D', L='$L', GD='$GD', PTS='$PTS' where id=$id";
  $result=mysqli_query($conn,$sql);

 
if($result){
  // echo "updated successfully";
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
    <title>Crud</title>
   
  </head>
  <body>
    <div class="container my-5">
        <h2 style="display:flex; justify-content:center;  align-items:center;">Update</h2>
  <form method="post">
    <div class="inputBox">
        <label>Team</label>
        <input type="text" class="form-control" placeholder="enter Team" 
        name="Team" autocomplete="off" value=<?php echo $Team;?>>
    </div>
    <div class="inputBox">
        <label>Games played</label>
        <input type="text" class="form-control" placeholder="enter GP" 
        name="GP" autocomplete="off" value=<?php echo $GP;?>>
    </div>
    <div class="inputBox">
        <label>Wins</label>
        <input type="text" class="form-control" placeholder="enter Wins" 
        name="W" autocomplete="off" value=<?php echo $W;?>>
    </div>
    <div class="inputBox">
        <label>Draws</label>
        <input type="text" class="form-control" placeholder="enter Draws" 
        name="D" value=<?php echo $D;?>>
    </div>
    <div class="inputBox">
        <label>Loses</label>
        <input type="text" class="form-control" placeholder="enter Loses" 
        name="L" value=<?php echo $L;?>>
    </div>
    <div class="inputBox">
        <label>goals difference</label>
        <input type="text" class="form-control" placeholder="enter Goal difference" 
        name="GD" value=<?php echo $GD;?>>
    </div>
    <div class="inputBox">
        <label>points</label>
        <input type="text" class="form-control" placeholder="enter Points" 
        name="PTS" value=<?php echo $PTS;?>>
    </div>

    <div class="divBtn">
    <button type="submit" class="btn" name="submit">Update</button>
    </div>
    </form>
 </div>
  </body>
</html>