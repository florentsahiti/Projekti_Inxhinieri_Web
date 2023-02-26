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
	<link rel="stylesheet" href="cssL/style.css">
	<link rel="stylesheet" href="css/fixtures.css">
    <title>Document</title>
</head>
<body>
<div class="navbar">
   <div class="logo">
      <a style="text-decoration:none; color:black; margin-left:30px;"  href="index.php">
      Kosova
      </a>
   </div>
   <div class="menu">
   <ul>
			<li><a style="text-decoration:none;" href="display.php">Users</a></li>
			<li><a style="text-decoration:none;" href="pointsDashboard.php">Points</a></li>
			<li><a style="text-decoration:none;" href="fixtures.php">Fixtures</a></li>
			<li><a style="text-decoration:none;" href="playerDashboard.php">Players</a></li>
		</ul>
   </div>
</div>

    <h1>Fixtures</h1>



	

	<div class="container">
        <button class="btnA my-5"><a href="addGame.php" class="text-light">Add a game</a>
    </button>

    <table class="table">
  <thead class="tableUser">
    <tr>
      <th scope="col">Serial number</th>
      <th scope="col">Date</th>
      <th scope="col">Game</th>
      <th scope="col">Stadium</th>
      <th scope="col">Time</th>
      <th scope="col">operations</th>

    </tr>
  </thead>
  <tbody class="user-tab">
<?php

$sql = "select * from `games`";
$result = mysqli_query($conn,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $date=$row['date'];
        $game=$row['game'];
        $stadium=$row['stadium'];
        $time=$row['time'];
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$date.'</td>
        <td>'.$game.'</td>
        <td>'.$stadium.'</td>
        <td>'.$time.'</td>
        <td>
        <div class="divBtn">
        <button class="btnU"><a href="updateFixtures.php?updateid='.$id.'">Update</a></button>
        <button class="btnD"><a href="deleteFixtures.php?deleteid='.$id.'">Delete</a></button>
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