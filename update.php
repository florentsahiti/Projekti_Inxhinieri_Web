<?php
include 'config.php';
$id=$_GET['updateid'];

$sql="select * from `user_form` where id=$id";

$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$user_type=$row['user_type'];
$password=$row['password'];


if(isset($_POST['submit'])){
  $name = $_POST['name'] ;
  $email = $_POST['email'] ;
  $user_type = $_POST['user_type'] ;
  $password = $_POST['password'] ; 

  $sql="update `user_form` set id=$id ,name='$name' ,email='$email' ,user_type='$user_type' ,
  password='$password' where id=$id";
  $result=mysqli_query($conn,$sql);

 
if($result){
  // echo "updated successfully";
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
        <h2 style="display:flex; justify-content:center;  align-items:center;">Update</h2>
  <form method="post">
    <div class="inputBox">
        <label>Name</label>
        <input type="text" class="form-control" placeholder="enter your name" 
        name="name" autocomplete="off" value=<?php echo $name;?>>
    </div>
    <div class="inputBox">
        <label>email</label>
        <input type="email" class="form-control" placeholder="enter your email" 
        name="email" autocomplete="off" value=<?php echo $email;?>>
    </div>
    <div class="inputBox">
        <label>user type</label>
        <input type="text" class="form-control" placeholder="enter your user type" 
        name="user_type" autocomplete="off" value=<?php echo $user_type;?>>
    </div>
    <!-- <div class="inputBox">
        <label>password</label>
        <input type="text" class="form-control" placeholder="enter your password" 
        name="password" value=<?php echo $password;?>>
    </div> -->
    
    <div class="divBtn">
    <button type="submit" class="btn" name="submit">Update</button>
    </div>
    </form>
 </div>
  </body>
</html>