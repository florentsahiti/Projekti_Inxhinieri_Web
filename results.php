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
    <title>Standings</title>
    <link rel="stylesheet" href="css/style.css">
    
    <style>
        body{
            background-color: rgb(49, 49, 134);
        }
    </style>


</head>
<body>
    <header>
		<a href="/index.html" class="logo">Kosova</a>
		<div class="bx bx-menu" id="menu-icon"></div>

		<ul class="navbar">
			<li><a href="/index.html">Home</a></li>
			<li><a href="/players.html">Players</a></li>
			<li><a href="/fixtures.html">Fixtures</a></li>
			<li><a href="#contact">Contact Us</a></li>
			<li><a href="#">Sign Up</a></li>
			<li><a href="#">Log In</a></li>
			
		</ul>
	</header>


	<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet"> 

	<div class="ptable">
	  <h1 class="headin" style="margin-top: 100px;">Standings</h1>

	  <table>
			<tbody>
			<table class="table">
  <thead class="tableUser">
    <tr>
      <th scope="col">Serial number</th>
      <th scope="col">Team</th>
      <th scope="col">GP</th>
      <th scope="col">W</th>
      <th scope="col">D</th>
      <th scope="col">L</th>
      <th scope="col">GD</th>
      <th scope="col">PTS</th>
      



    </tr>
  </thead>
  <tbody class="user-tab">
<?php

$sql = "select * from `points`";
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

      </tr>';
    }
}
?>
  </tbody>
<!-- </table> -->
						<!-- <table>
							<tr class="col">
								<th>#</th>
								<th>Team</th>
								<th>GP</th>
								<th>W</th>
								<th>D</th>
								<th>L</th>
								<th>GD</th>
								<th>PTS</th>
							</tr>
							<tr class="wpos">
								<td>1</td>
								<td>Kosova</td>
								<td>2</td>
								<td>2</td>
								<td>0</td>
								<td>0</td>
								<td>5</td>
								<td>6</td>
							</tr>
							<tr class="wpos">
								<td>2</td>
								<td>Albania</td>
								<td>2</td>
								<td>2</td>
								<td>0</td>
								<td>0</td>
								<td>4</td>
								<td>6</td>
							</tr>
							<tr class="wpos">
								<td>3</td>
								<td>Morocco</td>
								<td>2</td>
								<td>1</td>
								<td>1</td>
								<td>0</td>
								<td>4</td>
								<td>4</td>
							</tr>
							<tr class="wpos">
								<td>4</td>
								<td>France</td>
								<td>2</td>
								<td>1</td>
								<td>1</td>
								<td>0</td>
								<td>1</td>
								<td>4</td>
							</tr>
							<tr class="pos">
								<td>5</td>
								<td>USA</td>
								<td>2</td>
								<td>1</td>
								<td>0</td>
								<td>1</td>
								<td>0</td>
								<td>3</td>
							</tr>
							<tr class="pos">
								<td>6</td>
								<td>Croatia</td>
								<td>3</td>
								<td>1</td>
								<td>0</td>
								<td>2</td>
								<td>-1</td>
								<td>3</td>
							</tr>
							<tr class="pos">
								<td>7</td>
								<td>Slovenia</td>
								<td>2</td>
								<td>1</td>
								<td>0</td>
								<td>1</td>
								<td>-2</td>
								<td>3</td>
							</tr>
							<tr class="pos">
								<td>8</td>
								<td>Indonesia</td>
								<td>1</td>
								<td>0</td>
								<td>1</td>
								<td>0</td>
								<td>0</td>
								<td>1</td>
							</tr>
							<tr class="pos">
								<td>9</td>
								<td>England</td>
								<td>2</td>
								<td>0</td>
								<td>1</td>
								<td>1</td>
								<td>-1</td>
								<td>1</td>
							</tr>
							<tr class="pos">
								<td>10</td>
								<td>Japan</td>
								<td>2</td>
								<td>0</td>
								<td>0</td>
								<td>2</td>
								<td>-4</td>
								<td>0</td>
							</tr>
							<tr class="pos">
								<td>11</td>
								<td>Chile</td>
								<td>2</td>
								<td>0</td>
								<td>0</td>
								<td>2</td>
								<td>-5</td>
								<td>0</td>
							</tr>
						</table>
	</div>
     -->

    
</body>
</html>