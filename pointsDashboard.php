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

    <h1>Standings</h1>

	<div class="container">
        <button class="btnA my-5"><a href="addStanding.php" class="text-light">Add Standing</a>
    </button>

    <table class="table">
  <thead class="tableUser">
  <tr class="col">
	<th>#</th>
	<th>Team</th>
	<th>GP</th>
	<th>W</th>
	<th>D</th>
	<th>L</th>
	<th>GD</th>
	<th>PTS</th>	
	<th>opertaions</th>	

	</tr>
  </thead>
  <tbody class="user-tab">
<?php

$sql = "select * from `points` ORDER BY PTS DESC";
$result = mysqli_query($conn,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $Team=$row['Team'];
        $GP=$row['GP'];
        $W=$row['W'];
        $D=$row['D'];
        $L=$row['L'];
        $GD=$row['GD'];
        $PTS=$row['PTS'];

        

        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$Team.'</td>
        <td>'.$GP.'</td>
        <td>'.$W.'</td>
        <td>'.$D.'</td>
        <td>'.$L.'</td>
        <td>'.$GD.'</td>
        <td>'.$PTS.'</td>

        <td>
        <div class="divBtn">
        <button class="btnU"><a href="updatePoints.php?updateid='.$id.'">Update</a></button>
        <button class="btnD"><a href="deletePoints.php?deleteid='.$id.'">Delete</a></button>
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