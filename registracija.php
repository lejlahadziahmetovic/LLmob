<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>LLmob</title>
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500&display=swap&subset=latin-ext" rel="stylesheet">   
</head>
	<header>
		<div>
			<div class="logo">
				<a href="index.php"><img class="w-20" src="slike/logo.png"></a>
			</div>
			<nav>
				<ul class="linkovi">
					<li><a  href="index.php"><i class="fas fa-home"></i> Pocetna</a></li>
					<li class="has-children">
						<a href="proizvodi.php"><i class="fas fa-tools"></i> Proizvodi</a>
						<ul class="dropdown">
							<li><a href="mobiteli.php"><i class="fas fa-toolbox"></i> Mobiteli</a></li>
							<li><a href="oprema.php"><i class="fas fa-hammer"></i> Oprema</a></li>
						</ul>
					</li>
					
					<li><a href="projekat.php"><i class="far fa-envelope"></i> Izrada projekta</a></li>
					<li><a href="login.php"><button class="cart-btn">Prijava</button></a></li>
				</ul>
			</nav>
		</div>
        <br><br><br><br><br><br>
    </header>
<body class="body">
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
		
		$fname    = stripslashes($_REQUEST['fname']);
		$fname = mysqli_real_escape_string($con, $fname);

		$lname    = stripslashes($_REQUEST['lname']);
		$lname = mysqli_real_escape_string($con, $lname);

		$phone    = stripslashes($_REQUEST['phone']);
		$phone = mysqli_real_escape_string($con, $phone);

		$city    = stripslashes($_REQUEST['city']);
		$city = mysqli_real_escape_string($con, $city);

		$street    = stripslashes($_REQUEST['street']);
		$street = mysqli_real_escape_string($con, $street);

        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime, name, lastname, city, phone, street )
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime', '$fname', '$lname', '$city', '$phone', '$street')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>Uspješno ste registrovani.</h3><br/>
                  <p class='link'>Kliknite ovdje na login <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registracija.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>

<div class="pozad1">
		<br><br><br>
		<form action="" method="post">
			<div class="container">
			  <h1>Registracija</h1>
			  <p>Molimo popunite formu</p>
			  <hr>

			  <label for="fname"><b>Ime</b></label>
			  <input type="text" placeholder="Unesite vase ime" name="fname" id="fname" required>

			  <label for="lname"><b>Prezime</b></label>
			  <input type="text" placeholder="Unesite vase prezime" name="lname" id="lname" required>

			  <label for="username"><b>Username</b></label>
			  <input type="text" placeholder="Unesite vas novi username" name="username" id="username" required>

			  <label for="email"><b>Email</b></label>
			  <input type="text" placeholder="Unesite vas email" name="email" id="email" required>

			  <label for="street"><b>Adresa stanovanja</b></label>
			  <input type="text" placeholder="Unesite vasu adresu stanovanja" name="street" id="street" required>

			  <label for="city"><b>Grad</b></label>
			  <input type="text" placeholder="Unesite grad u kojem zivite" name="city" id="city" required>

			  <label for="phone"><b>Broj telefona</b></label>
			  <input type="text" placeholder="Unesite vas broj telefona" name="phone" id="phone" required>
		  
			  <label for="psw"><b>Lozinka</b></label>
			  <input type="password" placeholder="Odaberite lozinku" name="password" id="psw" required>
		  
			  
			  <hr>

			  <button type="submit" class="cart-btn">Registruj se</button>
			</div>
		  
			<div class="container signin">
			  <p>Već imate profil?<b onclick="document.getElementById('id01').style.display='block'">Prijavite se</b></p>
			</div>
		  </form>

		<div id="id01" class="modal">
			<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
			<form class="modal-content animate" action="/action_page.php">           
				<div style="margin-top: 20px; margin-left: 20px; margin-right: 20px;">
					<label for="username"><b>Username</b></label>
				</div>
				<div style=" margin-left: 20px; margin-right: 20px;">
					<input type="text" placeholder="Upisite vas username" name="uname" required>
				</div>
				<div style=" margin-left: 20px; margin-right: 20px;">
					<label for="psw"><b>Lozinka</b></label>
				</div>  
				<div style=" margin-left: 20px; margin-right: 20px;">
					<input type="password" placeholder="Upisite vasu lozinku" name="psw" required>
				</div>    
				<div style=" margin: 20px;">
					<button type="submit">Prijava</button>
					<label>
					<input type="checkbox" checked="checked" name="remember"> Zapamti me
					</label>
					<label class="new"><a href="">Izradite novi racun</a></label>
				</div>
			
			
				</div>
			</form>
		</div>
    </div>

	<?php
    }
?>

    
</body>
    