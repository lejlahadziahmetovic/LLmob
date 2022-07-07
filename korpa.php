<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>LLmob</title>
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500&display=swap&subset=latin-ext" rel="stylesheet">   
</head>
<body>
	<header>
		<div>
			<div class="logo">
				<a href="index.php"><img class="w-20" src="slike/logo.png"></a>
			</div>
			<nav>
				<ul class="linkovi">
					<li><a  href="indexlogin.php"><i class="fas fa-home"></i> Pocetna</a></li>
					<li class="has-children">
						<a  href="proizvodilogin.php"><i class="fas fa-tools"></i> Proizvodi</a>
						<ul class="dropdown">
							<li><a class="active" href="mobitelilogin.php"><i class="fas fa-toolbox"></i> Mobiteli</a></li>
							<li><a href="opremalogin.php"><i class="fas fa-hammer"></i> Oprema</a></li>
						</ul>
					</li>
					<li><a class="active" href="korpa.php"><i class="far fa-envelope"></i> Korpa</a></li>
					<li><a href="projekatlogin.php"><i class="far fa-envelope"></i> Izrada projekta</a></li>
					<li><a href="logout.php"><button class="cart-btn">Odjava</button></a></li>
					
					<?php 
					
					if($_SESSION['username']=='Admin') echo " <li><a href='dashboard.php'><button class='cart-btn'>Dashboard</button></a></li> ";
					
					?>
				</ul>
			</nav>
		</div>
        <br><br><br><br><br><br>
    </header>
    <body class="body">
        <div class="pozad1">
			<br><br><br>
            <div class="korpa">
					<div class="shop">
						<div class="box">
							<img src="slike/apple 13 pro max.jpg">
							<div class="content">
								<h3>Apple Iphone 13 Pro Max</h3>
								<h4>Cijena: 3300 KM</h4>
								<p class="unit">Količina: <input name="" value="1"></p>
								<p class="btn-area"><i aria-hidden="true" class="fa fa-trash"></i><span>Ukloni</span></p>
							</div>
						</div>
					</div>
					<div class="right-bar">
						<p><span>Cijena</span> <span>3300 KM</span></p>
						<hr>
						<p><span>Dostava</span> <span>8 KM</span></p>
						<hr>
						<p><span>Ukupno</span> <span>3308 KM</span></p><a href="#"><i class="fa fa-shopping-cart"></i>Poruči</a>
					</div>
			</div>
        </div>
    </body>
	<footer class="footer">
		<div class="inner-wrapper">
			<h1>KONTAKTIRAJTE NAS</h1>
			<p><b>Telefon:</b> 000 000 000</p>
			<p><b>Email:</b> <a href="mailto:llmob@gmail.com">llmob@gmail.com</a></p>
			<p class="mb-0"><b>Adresa:</b> Zmaja od Bosne bb</p>
		</div>
	</footer>