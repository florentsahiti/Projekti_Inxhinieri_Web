<?php

@include 'config.php';

session_start();

if (isset($_SESSION['role'])) {
	$username = '';
	$role = '';
	// If the user is logged in, retrieve the user's information from the session
	if($_SESSION['role']== 'admin'){
		$username = $_SESSION['user_name'];
		$role = $_SESSION['role'];
		// echo "Welcome Admin, $username!";
	}
	else if($_SESSION['role']== 'user') {
		$username = $_SESSION['user_name'];
		$role = $_SESSION['role'];
		// echo "Welcome User, $username!";
	}

  } else {
	$role = '';
	// If the user is not logged in, display a message or redirect to the login page
	// echo "Please log in.";
  }
//    }else{
//       $error[] = 'incorrect email or password!';
//    }

// };
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kosovo National football team</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/slider.css">

	

	<link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <style>
	table {
  border-collapse: collapse;
  margin: 0;
  padding: 0;
  width: 100%;
  table-layout: fixed;
  background: #fefefe;
}

table caption {
  font-size: 1.5em;
  margin: .5em 0 .75em;
  color: #f6f6f6;
}

table thead{
  background:#1976d2;
  border-bottom: none;
  color: #fff;
}

table tr {
  padding: .35em;
}

table tr:nth-child(even) {
  background: #f0f0f0;
}

table tbody tr:hover {
  background: #d9e3e8;
}

table th,
table td {
  padding: 0.625em;
  text-align: center;
}

table th {
  font-size: .85em;
  letter-spacing: .1em;
  text-transform: uppercase;
}

@media screen and (max-width: 600px) {
  table {
    border: 0;
  }

  table caption {
    font-size: 1.3em;
  }

  table thead th {
    display: none;
  }

  table tr {
    display: block;
  }

  table td {
    /* border-bottom: 1px solid #ddd; */
    display: block;
    text-align: left;
  }

  table td::before {
    content: attr(data-label);
    display: block;
    font-weight: light;
    text-transform: uppercase;
    font-size: 0.7em;
    margin-bottom: 0.6em;
    color: #1976d2;
  }

  table td:last-child {
    border-bottom: 0;
  }
}


  </style>
</head>

<body>
	<!--header--->
	<header>
		<a href="#" class="logo">Kosova</a>
		<div class="bx bx-menu" id="menu-icon"></div>

		<ul class="navbar">
			<li><a href="#home">Home</a></li>
			<li><a href="#package">Players</a></li>
			<li><a href="#fixtures">Fixtures</a></li>
			<li><a href="#contact">Contact Us</a></li>
			<?php 
			if($role == 'admin'){
				echo "<li><a href='admin_page.php'>Admin Dashboard</a></li>
				<li><a href='logout.php'>Log out</a></li>";
			}
			else if($role == 'user'){
				echo "<li><a href='user_page.php'>User Dashboard</a></li>
				<li><a href='logout.php'>Log out</a></li>";
			}
			else if($role == ''){
				echo "<li><a href='register_form.php'>Kycu</a></li>";
			}
			?>
		</ul>
	</header>

	<!--Home section--->
	<section class="home" id="home">
		<div class="home-text">
			<h1 style="font-size: 70px;">Dardanët</h1>
			<p>Raised by war <br> stronger than fear.</p>
			 
		</div>
	</section>

	<!--container--->
	<section class="container">
		<div class="text" style="text-align:center;">
			<h2>Statistikat e  <br> 3 lojeve te fundit!</h2>
		</div>

		<div class="row-items">
			<a href="https://www.youtube.com/watch?v=jDK8xuGMIrw">
			<div class="container-box">
				<div class="container-img">
					<img src="img/win.png">
				</div>
				<h4 style="color:black;" >Win</h4>
				<p>Kosova 4-0 Azerbaijan</p>
			</div>
			</a>

			<a href="https://www.youtube.com/watch?v=c6kTEoZVhNM">
			<div class="container-box">
				<div class="container-img">
					<img src="img/d.png">
				</div>
				<h4 style="color:black;">Win </h4>
				<p>Kosova 3-0 Albania </p>
			</div>
			</a>

			<a href="https://www.youtube.com/watch?v=ezCLA0CUA4A">
			<div class="container-box">
				<div class="container-img">
					<img src="img/win.png">
				</div>
				<h4 style="color:black;">Win </h4>
				<p>England 5-3 Kosova</p>
			</div>
			</a>


			

		</div>
		<a href="Results.php"><h4 style="text-align: center; padding-top: 60px; color: black;"> < View Standing World Cup 2026 ></h4></a>
	</section>

	<!--Players Package section--->
	<section class="package" id="package">
		<div class="title">
			<h2>Top goalscorers</h2>
		</div>

		<div class="package-content">
			<div class="box">
			<div class="slideshow-container">
			<div class="mySlides fade">
				<div class="numbertext">1 / 3</div>
				<img src="img/muriqi	.jpg" style="width: 100%;" />
				<div class="texts" style="color:black"><b><i>Vedat Muriqi</i></b></div>
			</div>
			<div class="mySlides fade">
				<div class="numbertext">2 / 3</div>
				<img src="img/milot.jpg" style="width: 100%" />
				<div class="texts" style="color:black"><b><i>Milot Rashica</b></i></div>
			</div>
			<div class="mySlides fade">
				<div class="numbertext">3 / 3</div>
				<img src="img/arber.jpg" style="width: 100%" />
				<div class="texts" style="color: black;"><i><b>Arber Zeneli</b></i></div>
			</div>
			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>
			</div>
			<br />
			<div style="text-align: center">
			<span class="dot" onclick="currentSlide(1)"></span>
			<span class="dot" onclick="currentSlide(2)"></span>
			<span class="dot" onclick="currentSlide(3)"></span>
			</div>
			</div>

			

		</div>

		<a href="players.php"><h4 style="text-align: center; padding-top: 60px; color: black;"> < View All Players ></h4></a>
	</section>

	 <!-- destination section -->
	 <section class="fixtures" id="fixtures">
		<h1 style="text-align: center;">Fixtures</h1>
		<table>
			<tbody>
			<table class="table">
  <thead class="tableUser">
    <tr>
      <th scope="col">Serial number</th>
      <th scope="col">Date</th>
      <th scope="col">Game</th>
      <th scope="col">Stadium</th>
      <th scope="col">Time</th>

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
      </tr>';
    }
}

?>

    

  </tbody>
</table>

			  <!-- <tr>
				<td data-label="NIM">16.04.2023</td>
				<td data-label="Nama">Kosova vs Albania</td>
				<td data-label="Jurusan">Fadil Vokrri</td>
				<td data-label="Angkatan">20:45</td>
			  </tr>
			  <tr>
				<td data-label="NIM">17.05.2023</td>
				<td data-label="Nama">Kosova vs Cyprus</td>
				<td data-label="Jurusan">Fadil Vokrri</td>
				<td data-label="Angkatan">20:45</td>
			  </tr>
			  <tr>
				<td data-label="NIM">11.06.2023</td>
				<td data-label="Nama">Enlgand vs Kosova</td>
				<td data-label="Jurusan">Wembley</td>
				<td data-label="Angkatan">18:00</td>
			  </tr>
			  <tr>
				<td data-label="NIM">01.09.2023</td>
				<td data-label="Nama">Spain vs Kosova</td>
				<td data-label="Jurusan"> Camp Nou </td>
				<td data-label="Angkatan">21:00</td>
			  </tr> -->

			  
			</tbody>
		  </table>
	</section>

	<!--Newsletter--->
	<section class="newsletter">
		<div class="news-text">
			<h2>Newsletter</h2>
			<p>Subscribe to get 20%  sale on tickets </p>
		</div>

		<div class="send">
			<form>
				<input type="email" placeholder="Write Your Email" required>
				<input type="submit" value="Submit">
			</form>
		</div>
	</section>

	<!--footer--->
	<section id="contact">
		<div class="footer">
			<div class="main">
				<div class="list">
					<h4>Quick Links</h4>
					<ul>
						<li><a href="#">About us</a></li>
						<li><a href="#">Terms & Conditions</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Help</a></li>
						<li><a href="#">Players</a></li>
					</ul>
				</div>

				<div class="list">
					<h4>Support</h4>
					<ul>
						<li><a href="#">About us</a></li>
						<li><a href="#">Terms & Conditions</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Help</a></li>
						<li><a href="#">Players</a></li>
					</ul>
				</div>

				<div class="list">
					<h4>Contact Info</h4>
					<ul>
						<li><a href="#">Street Adem Jashari</a></li>
						<li><a href="#">Prishtina, Kosova</a></li>
						<li><a href="#">+38345123124</a></li>
						<li><a href="#">info@ffk.com</a></li>
						<li><a href="#">+38344431233</a></li>
					</ul>
				</div>

				<div class="list">
					<h4>Connect</h4>
					<div class="social">
						<a href="#"><i class='bx bxl-facebook' ></i></a>
						<a href="#"><i class='bx bxl-instagram-alt' ></i></a>
						<a href="#"><i class='bx bxl-twitter' ></i></a>
						<a href="#"><i class='bx bxl-linkedin' ></i></a>
					</div>
				</div>
			</div>
		</div>

		
	</section>

	<!--link to js--->
	<script type="text/javascript" src="js/app.js"></script>
	<script type="text/javascript" src="js/slider.js"></script>


</body>
</html>