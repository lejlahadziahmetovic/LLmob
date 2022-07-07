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
					<li><a  href="indexlogin.php"><i class="fas fa-home"></i> Početna</a></li>
					<li class="has-children">
						<a href="proizvodilogin.php"><i class="fas fa-tools"></i> Proizvodi</a>
						<ul class="dropdown">
							<li><a href="mobitelilogin.php"><i class="fas fa-toolbox"></i> Mobiteli</a></li>
							<li><a href="opremalogin.php"><i class="fas fa-hammer"></i> Oprema</a></li>
						</ul>
					</li>
					<li><a href="korpa.php"><i class="far fa-envelope"></i> Korpa</a></li>
					<li><a class="active" href="projekatlogin.php"><i class="far fa-envelope"></i> Izrada projekta</a></li>
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
            <h1 style="padding-top: 10%;"><a href="https://drive.google.com/file/d/15nvRieBm5rWku8x8OaKlbPOuioOrmjqW/view?usp=sharing">Vizija projekta</a></h1>        
            <div class="inner-wrapper">
                <h1>O NAMA</h1>
                <div class="col-2">
                    <div class="wrapper">
                        <img class="w-100" src="slike/lejlat.jpg">
                        <a href="https://drive.google.com/file/d/1X_dVkBs19uG8cFT5K5O84rUiCRo-ja8f/view?usp=sharing"> 
                            <p class="w-100opis">Lejla Trncic</p>
                        </a>
                    </div>               	
                </div>               
                <div class="col-2">
                    <div class="wrapper">
                        <img class="w-100" src="slike/lejlah.jpg">
                        <a href="">
                            <p class="w-100opis">Lejla Hadziahmetovic</p>
                        </a>
                    </div>
                </div>                                
            </div>
            <div class="inner-wrapper">
                <h1>O PROJEKTU</h1>
                <p class="mt-1">Ovaj softverski sistem će biti sistem koji omogućava pregled proizvoda, konkretno mobilnih telefona
                    I opreme, te imaće mogućnost izvršenja narudžbe. Sistem je osmišljen kao olakšica prilikom
                    kupovine, jer je danas skoro čitav sistem kupovine zasnovan na online šopingu. Sistem ćemo razviti u
                    obliku responzivne web stranice, preko koje će korisnik imati mogućnost pregleda proizvoda te
                    naručivanje istih. Web-Shop namijenjen je svim svim korisnicima koji danas sve više odabiru online
                    kupovinu. Korištenjem aplikacije olakšava se i ubrzava komunikacija između prodavača i korisnika.</p>                                               
                <h1>TEHNOLOGIJE</h1>
                <p class="mt-1">Tehnologije koje će biti korištene za izradu projekta su: HTML, CSS, JavaScript, C#, Sql. Napomena: Moguće su izmjene (dodavanje) tehnologija kroz proces izrade projekta.</p>                                               
                <h1>MOTIVACIJA ZA ODABIR PROJEKTA</h1>
                <p class="mt-1">Naš motiv za odabir baš ove teme za projekat je činjenica da se stanovništvo danas sve više umjesto "in-store" opredjeljuje za online kupovinu čija je glavna prednost ušteda vremena te mogućnost kupovine u bilo kojem trenutku.</p>                                               
                <h1>VRSTE I OVLASTI KORISNIKA</h1>
                <img class="w-100" src="slike/vrstekorisnika.jpg"> 
                <p class="mt-1"><b>Administrator moze</b><br>•ažurirati bilo koji podatak u sistemu (pretpostavlja se da osoba zadužena za
                    administraciju obavlja taj zadatak bez zloupotrebe položaja)<br>• održavati bazu podataka, spremati njenu kopiju i obnavljati podatke u slučaju kvara sistema<br>• izbaciti korisnika koji se ne pridržava pravila stranice<br><b>Registrovani korisnik moze</b> <br>•pretrazivati te obavljati kupovinu proizvoda, te unijeti svoje licne
                    podatke podatke. <br>•Ovakav korisnik je evidentiran u bazi podataka.<br><b>Neregistrovani korisnik moze </b><br>•pregledati sve ponuđene artikle
                    <br>• za svaki ponuđeni artikal može preko upita (mail ili telefon) zatražiti dodatne informacije
                    <br>• može se registrirati i dobiti ovlasti registrovanog korisnika</p>
                <h1>USE CASE DIJAGRAM</h1>
                <img class="w-100" src="slike/usecase.jpg">                                             
            </div>
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
                        <label class="new"><a href="registracija.php">Izradite novi racun</a></label>
                    </div>
                
                
                    </div>
                </form>
            </div>




        </div>
    </body>

