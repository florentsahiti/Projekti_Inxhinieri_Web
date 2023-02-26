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
   <style>
    .navbar{
   width: 100%;
   height: 100px;
   display: flex;
   justify-content: space-between;
   align-items: center;
   border-bottom:solid 1px;
}
.navbar .menu {
   width: 20%;
}
.navbar .menu ul{
   width: 100%;
display: flex;
justify-content: space-around;
}
.menu ul li{
   list-style-type: none;
   text-decoration: none;
}
.menu ul li a{
   color: black!important;
}


.nav-title{
   color: black;
}

h1{
    display: flex;
    justify-content: center;
    align-items: center;
}
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'poppins',sans-serif;
}
/* body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    flex-direction: column;
    margin-top: 10px;
} */
.inputBox{
    position: relative;
    width: 250px;
    margin: 20px;
    
    
}
.inputBox input{
    width: 100%;
    padding: 10px;
    border: 1px solid black;
    border-radius: 5px;
    outline: none;
    color: black;
    font-size: 1em;
    transition: 0.5s;
    margin-top: 10px;
}
.inputBox span{
    position: absolute;
    left: 0;
    padding: 10px;
    pointer-events: none;
    font-size: 12px;
    color: black;
    transition: 0.5s;

}
.inputBox input:valid ~ span,
.inputBox input:focus ~ span{
    color: black;
    transform: translateX(10px) translateY(-7px);
    font-size: 10px;
    padding: 0 10px;
    background: white;
    border-left: 1px solid black;
    border-right: 1px solid black;
    letter-spacing: 0.2em;
}


.inputBox input:valid ,
.inputBox input:focus {
    border: 1px solid black;
}
.btn{
    display: flex;
    justify-content: center;
    align-items: center;
	font-family: "Roboto", sans-serif;
	font-size: 16px;
	font-weight: bold;
	background: #1E90FF;
	width: 100px;
    height: 20px;
	padding: 20px;
	text-align: center;
	text-decoration: none;
	text-transform: uppercase;
	color: #fff;
	border-radius: 5px;
	cursor: pointer;
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
	-webkit-transition-duration: 0.3s;
	transition-duration: 0.3s;
	-webkit-transition-property: box-shadow, transform;
	transition-property: box-shadow, transform;
}
.btn:hover, .btn:focus, .btn:active{
	box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
	-webkit-transform: scale(1.1);
	transform: scale(1.1);
}
.divBtn{
    width: 100%;
    display: flex!important;
    justify-content: center;
}
a{
    text-decoration: none;
    color: white;
}
.btnA{
    margin-bottom: 30px;
    display: flex;
    justify-content: center;
    align-items: center;
	font-family: "Roboto", sans-serif;
	font-size: 16px;
	font-weight: bold;
	background: #1E90FF;
	width: 100px;
    height: 20px;
	padding: 20px;
	text-align: center;
	text-decoration: none;
	text-transform: uppercase;
	color: #fff;
	border-radius: 5px;
	cursor: pointer;
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
	-webkit-transition-duration: 0.3s;
	transition-duration: 0.3s;
	-webkit-transition-property: box-shadow, transform;
	transition-property: box-shadow, transform;
}

.btnU{
    margin-top: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
	font-family: "Roboto", sans-serif;
    margin-right: 5px;
	font-size: 18px;
    height: 5px;
	font-weight: bold;
	background: green;
	width: 70px;
	padding: 20px;
	text-align: center;
	text-decoration: none;
    color: #fff;
	border-radius: 5px;
	cursor: pointer;
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
	-webkit-transition-duration: 0.3s;
	transition-duration: 0.3s;
	-webkit-transition-property: box-shadow, transform;
	transition-property: box-shadow, transform;
}
.btnD{
    margin-top: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
	font-family: "Roboto", sans-serif;
    margin-right: 5px;
	font-size: 18px;
    height: 5px;
	font-weight: bold;
	background: red;
	width: 70px;
	padding: 20px;
	text-align: center;
	text-decoration: none;
    color: #fff;
	border-radius: 5px;
	cursor: pointer;
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
	-webkit-transition-duration: 0.3s;
	transition-duration: 0.3s;
	-webkit-transition-property: box-shadow, transform;
	transition-property: box-shadow, transform;
}
.tableUser th{
    padding: 20px; 
}
.user-tab td{
padding: 20px;
}   
   </style>
   
    <title>Crud operation</title>
    <style>
    
    </style>
</head>
<body>  
<div class="navbar">
   <div class="logo">
      <a style="margin-left:30px;"  class="nav-title" href="index.php">
      Kosova
      </a>
   </div>
   <div class="menu">
   <ul>
			<li><a href="display.php">Users</a></li>
			<li><a href="pointsDashboard.php">Points</a></li>
			<li><a href="fixtures.php">Fixtures</a></li>
			<li><a href="playerDashboard.php">Players</a></li>
		</ul>
   </div>
</div>

<div class="container">
        <button class="btnA my-10"><a href="addPlayer.php" class="text-light">Add a Player</a>
    </button>

    <table class="table">
  <thead class="tableUser">
    <tr>
      <th scope="col">Serial number</th>
      <th scope="col">img</th>
      <th scope="col">position</th>
      <th scope="col">name</th>
      <th scope="col">bio</th>
      <th scope="col">operations</th>

    </tr>
  </thead>
  <tbody class="user-tab">
<?php

$sql = "select * from `players`";
$result = mysqli_query($conn,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $img=$row['img'];
        $position=$row['position'];
        $name=$row['name'];
        $bio=$row['bio'];
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$img.'</td>
        <td>'.$position.'</td>
        <td>'.$name.'</td>
        <td>'.$bio.'</td>
        <td>
        <div class="divBtn">
        <button class="btnU"><a href="updatePlayers.php?updateid='.$id.'">Update</a></button>
        <button class="btnD"><a href="deletePlayers.php?deleteid='.$id.'">Delete</a></button>
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