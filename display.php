<?php
include 'config.php'; 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssL/display.css">
    <link rel="stylesheet" href="cssL/style.css">
    <title>Crud operation</title>
</head>
<body>  
<div class="navbar">
   <div class="logo">
      <a class="nav-title" href="index.php">
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
    <div class="container">
        <button class="btnA my-5"><a href="user.php" class="text-light">Add User</a>
    </button>

    <table class="table">
  <thead class="tableUser">
    <tr>
      <th scope="col">Serial number</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">user type</th>
      <th scope="col">password</th>
      <th scope="col">operations</th>

    </tr>
  </thead>
  <tbody class="user-tab">
<?php

$sql = "select * from `user_form`";
$result = mysqli_query($conn,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $user_type=$row['user_type'];
        $password=$row['password'];
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$user_type.'</td>
        <td>'.$password.'</td>
        <td>
        <div class="divBtn">
        <button class="btnU"><a href="update.php?updateid='.$id.'">Update</a></button>
        <button class="btnD"><a href="delete.php?deleteid='.$id.'">Delete</a></button>
        </div>
        </td>
      </tr>';
    }

}

?>

    

  </tbody>
</table>
    </div>
    
</body>
</html>