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
    <title>Document</title>
	
	
	<style>
		body{
			background-color: rgb(54, 54, 247);
		}
		*{
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

:root{
  --color-gray-90: hsl(0,0%,90%);
  --color-gray-80: rgb(0, 0, 0);
  --color-gray-50: rgb(0, 0, 0);
  --color-light: hsl(0,0%,100%);
  --font-size-initial: 15px;
  --size-initial: 1px;
}

body{
  background: var(--color-gray-90);
  color: var(--color-gray-50);
  font-family: BlinkMacSystemFont, -apple-system, system-ui, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
  font-size: var(--font-size-initial);
}

/* CONTAINERS */
main{
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(calc(var(--font-size-initial) * 18), 1fr));
  gap: calc(var(--font-size-initial) * 2);
  margin: auto;
  max-width: calc(var(--font-size-initial) * 80);
  padding: calc(var(--font-size-initial) * 2);
}

section{
  background: var(--color-light);
  border-radius: calc(var(--font-size-initial) * .5);
  box-shadow: 0 calc(var(--size-initial) * 3) calc(var(--size-initial) * 6) hsla(0,0%,0%,.1);
  overflow: hidden;
}

article{
  padding: calc(var(--font-size-initial) * 3);
}

figure{
  height: calc(var(--font-size-initial) * 15);
}

/* IMAGE */
img{
  height: 115% ;
  object-fit: cover;
  width: 100%;
}

/* TYPOGRAPHY */
h3{
  font-size: calc(var(--font-size-initial) * 2);
  letter-spacing: calc(var(--size-initial) * -1.25);
  line-height: calc(var(--font-size-initial) * 2.25);
  margin: calc(var(--font-size-initial) * .5) 0;
}

p{
  font-size: calc(var(--font-size-initial) * .875);
  line-height: calc(var(--font-size-initial) * 1.25);
}

span{
  color: var(--color-gray-80);
  font-size: calc(var(--font-size-initial) * .75);
  letter-spacing: calc(var(--size-initial) * .75);
  text-transform: uppercase;
  word-spacing: var(--size-initial);
}
	</style>
</head>
<body>
    

	<main>
		<section>
		  <figure>
			<img src="https://img.uefa.com/imgml/TP/players/2014/2023/324x324/106567.jpg" alt="Free Stock Photo from pexels.com">
		  </figure>
		  <article>
			<span>GoalKeeper</span>
			<h3>Samir Ujkani</h3>
			<p>Samir Ujkani (born 5 July 1988) is a Kosovar Albanian professional footballer who plays as a goalkeeper for Italian club Empoli and the Kosovo national team.</p>
		  </article>
		</section>
		
		<section>
		  <figure>
			<img src="https://img.uefa.com/imgml/TP/players/2014/2023/324x324/250059233.jpg" alt="Free Stock Photo from pexels.com">
		  </figure>
		  <article>
			<span>Defender</span>
			<h3>Amir Rrahmni</h3>
			<p>Amir Kadri Rrahmani (born 24 February 1994) is a Kosovar Albanian professional footballer who plays as a centre-back for Serie A club Napoli and captains the Kosovo national team.</p>
		  </article>
		</section>
		
		<section>
			<figure>
			  <img src="https://img.uefa.com/imgml/TP/players/2014/2023/324x324/250073999.jpg" alt="Free Stock Photo from pexels.com">
			</figure>
			<article>
			  <span>Defender</span>
			  <h3>Mergim Vojvoda</h3>
			  <p>Mërgim Vojvoda (born 1 February 1995) is a Kosovan professional footballer who plays as a right-back for Italian club Torino and the Kosovo national team..</p>
			</article>
		  </section>

		  <section>
			<figure>
			  <img src="https://img.uefa.com/imgml/TP/players/2014/2023/324x324/250134393.jpg" alt="Free Stock Photo from pexels.com">
			</figure>
			<article>
			  <span>Midfielder</span>
			  <h3>Florent Muslija</h3>
			  <p>Florent Muslija (born 6 July 1998) is a Kosovan professional footballer who plays as a midfielder for 2. Bundesliga club Paderborn and the Kosovo national team.</p>
			</article>
		  </section>
		
		
		
		<section>
		  <figure>
			<img src="https://img.uefa.com/imgml/TP/players/2014/2023/324x324/250118504.jpg" alt="Free Stock Photo from pexels.com">
		  </figure>
		  <article>
			<span>Midfielder</span>
			<h3>Edon Zhegrova</h3>
			<p>Edon Lulzim Zhegrova (born 31 March 1999) is a professional footballer who plays as a right winger for Ligue 1 club Lille. Born in Germany, he plays for the Kosovo national team..</p>
		  </article>
		</section>
		
		<section>
		  <figure>
			<img src="img/muriqi.jpg" alt="Free Stock Photo from pexels.com">
		  </figure>
		  <article>
			<span>Striker</span>
			<h3>Vedat Muriqi</h3>
			<p>Vedat Muriqi (born 24 April 1994) is a Kosovan professional footballer who plays as a striker for La Liga club Mallorca and the Kosovo national team.</p>
		  </article>
		</section>
		<?php

		$sql = "select * from `players`";
		$result = mysqli_query($conn,$sql);
		if($result){
			while($row=mysqli_fetch_assoc($result)){
				$id=$row['id'];
				$position=$row['position'];
				$name=$row['name'];
				$bio=$row['bio'];
				echo'
				<section>
				<article>
				<th scope="row">'.$id.'</th>
				<span>'.$position.'</span>
				<h3>'.$name.'</h3>
				<p>'.$bio.'</p>
				</article>
				</section>
				';
			}
		}



		?>
	  </main>
	


		
    
</body>
</html>