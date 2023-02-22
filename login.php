<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        body{
            background-color:rgb(43, 92, 226);
        }
    </style>
</head>
<body>

    <header>
		<a href="#" class="logo">Kosova</a>
		<div class="bx bx-menu" id="menu-icon"></div>

		<ul class="navbar">
			<li><a href="index.php">Home</a></li>
			<li><a href="players.php">Players</a></li>
			<li><a href="fixtures.php">Fixtures</a></li>
			<li><a href="index.php">Contact Us</a></li>
			<li><a href="login.php">Log In</a></li>
			
		</ul>
	</header>


    <div class="tab-form">
        <div class="tab-header">
            <div class="active">Sign up</div>
            <div>Log in</div>
        </div>
        <div class="tab-body">
            <div class="signup active">
                <h2>Create an account</h2>
                <div class="form-input">
                    <label>Username</label>
                    <input type="text" placeholder="Enter your username" class="useri">
                </div>
                <div class="form-input">
                    <label>Email</label>
                    <input type="email" placeholder="Enter your email" id="emaili">
                </div>
                <div class="form-input">
                    <label>Password</label>
                    <input type="Password" placeholder="Enter your Password" id="pw">
                </div>
                <div class="form-input">
                    <input style="cursor: pointer;" type="submit" onclick="validoMeRegex2()">
                </div>
                
            </div>
            <div class="login">
                <h2>Login here</h2>
                    <div class="form-input">
                    <label>Username</label>
                    <input type="text" placeholder="Enter your Username" id="useri">
                </div>
                    <div class="form-input">
                    <label>Password</label>
                    <input type="password" placeholder="Enter your Password" id="pw">
                </div>
                <div class="form-input">
                    <input type="submit" style="cursor: pointer;" onclick="validoMeRegex()">
                </div>
            </div>
        </div>
    </div>  



    


    

    <script src="js/login.js"></script>
</body>
</html>