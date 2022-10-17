<!DOCTYPE html>
<html lang="en">
<head>
    <title>Continental Hotels - Contact</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="Scripts/App.js"></script>
	<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.0.0/mapbox-gl.js'></script>
    <link rel="stylesheet" href="CSS/Reset_Default_Proporties.css">
    <link rel="stylesheet" href="CSS/Acasa.css">
    <link rel="stylesheet" type="text/css" href="CSS/Media_Queries.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.0.0/mapbox-gl.css' rel='stylesheet' />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="Images/icon.png" />
</head>
<body>
    <header id="headerSmall">
        <div id="navBar">
            <a href="Acasa_user.php" id="logo">Continental Hotels</a>
            <nav class="menu" id="myMenu">
                <ul>
                    <li><a href="Acasa_user.php">Acasă</a></li>
					<li><a href="Camere_user.php">Camere</a></li>
                    <li><a href="Detalii.php#serv">Echipa</a></li>
                    <li><a href="Detalii.php">Carieră</a></li>
                    <li class="active"><a href="Contact.php">Contact</a></li>
                    <li class="icon"><a href="javascript:void(0);" onclick="myResponsiveHamburger()"><i id="hamb-icon" class="fas fa-bars"></i></a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="contact-intro">
        <h2 class="sml-h2">Contactează-ne</h2>
        <p>Nu poți decide unde să stai? Contactează-ne și te vom ajuta!</p>
    </section>
	
    <section class="contact-section">
        <div id='map'>
		<a href="https://www.google.com/maps?ll=44.445809,26.078468&amp;z=16&amp;t=m&amp;hl=ro-RO&amp;gl=US&amp;mapclient=embed&amp;daddr=Continental+Hotels+Romania+Calea+Grivi%C8%9Bei+143+Bucure%C8%99ti+010708+Rom%C3%A2nia@44.4458093,26.0784681" target="_blank" rel="noopener"><img width="750" height="500" src="https://continentalhotels.ro/wp-content/uploads/2021/02/locatie-harta-hq-600x400.jpg.webp" class="attachment-medium size-medium" alt="" loading="lazy" title="locatie-harta-hq" description="" caption="" srcset="https://continentalhotels.ro/wp-content/uploads/2021/02/locatie-harta-hq-600x400.jpg.webp 600w, https://continentalhotels.ro/wp-content/uploads/2021/02/locatie-harta-hq-300x200.jpg.webp 300w, https://continentalhotels.ro/wp-content/uploads/2021/02/locatie-harta-hq-768x511.jpg.webp 768w, https://continentalhotels.ro/wp-content/uploads/2021/02/locatie-harta-hq.jpg.webp 1200w" sizes="(max-width: 600px) 100vw, 600px"></a>
        </div>
		<div class="contact-form">
            <form>
                <label for="fname">Nume </label>
                <input type="text" id="fname" name="firstname" placeholder="Numele tău este ...">
                <label for="lname">Prenume</label>
                <input type="text" id="lname" name="lastname" placeholder="Prenumele tău este..">
                <label for="country">Oraș</label>
                <select id="country" name="country">
                    <option value="australia">Oradea</option>
                    <option value="canada">Arad</option>
                    <option value="usa">Cluj</option>
                    <option value="usa">București</option>
                    <option value="usa">Constanța</option>
					<option value="usa">Sibiu</option>
					<option value="usa">Suceava</option>
					<option value="usa">Tîrgu Mureș</option>
					<option value="usa">Drobeta Turnu Severin</option>
					
                </select>
                <label for="subject">Subiect</label>
                <textarea id="subject" name="subject" placeholder="Scrie ceva..." style="height:170px"></textarea>
                <input id="bta" type="submit" value="Trimite" class="square-to-round-btn" style="cursor:pointer">
            </form>
        </div>
    </section>
    <section class="contact-buttons">
        <h2 class="sml-h2">ALTE  INFORMAȚII  CONTINENTAL  HOTELS -- SEDIUL CENTRAL</h2>
        <div class="button">
            <i class="fas fa-map-marker-alt"></i>
            <h3 class="sml-h3">Adresa </h3>
            <p class="sml-p">Calea Griviţei 143, 010708<br>Sector 1, Bucureşti</p>
        </div>
        <div class="button">
            <i class="fas fa-envelope"></i>
            <h3 class="sml-h3">E-mail</h3>
            <p class="sml-p">reservation@continentalhotels.ro<br>sales@continentalhotels.ro
            </p>
        </div>
        <div class="button">
            <i class="fas fa-phone"></i>
            <h3 class="sml-h3">Telefon</h3>
            <p class="sml-p"> +40 372 121 721<br>  +40 754 121 446</p>
        </div>
    </section>
    <section id="subscribe" class="bent-shadow corner-shadow">
        <p>Înscrieți-vă pentru  nostru informativ gratuit.</p>
        <form>
            <input type="emal" name="email" required="required" autocomplete="off" placeholder="intoduceți adresa mail...">
            <button class="white-rounded-btn no-focus" style="cursor:pointer">Conectare</button>
        </form>
    </section>
    <button onclick="topFunction()" id="toTop-btn" title="Go to top" class="no-focus bring-to-front"><i class="fas fa-angle-up white-color"></i></button>
    <footer>
        <nav class="social">
            <h2>Conectează-te cu</h2>
            <ul class="social-list">
                <li><a href="#" class="social-btn fab fa-facebook"></a></li>
                <li><a href="#" class="social-btn fab fa-twitter"></a></li>
                <li><a href="#" class="social-btn fab fa-google"></a></li>
                <li><a href="#" class="social-btn fab fa-instagram"></a></li>
              
            </ul>
        </nav>
        <nav class="footer-nav">
            <h2> </h2>
			<h3> </h3>
            <ul class="primary">
                <li><a href="Acasa_user.php">Acasă</a></li>
                <li><a href="Detalii.php#serv">Echipa</a></li>
                <li><a href="Detalii.php">Carieră</a></li>
                <li><a href="Contact.php">Contact</a></li>
            </ul>
        </nav>
        <p class="copyright">Copyright &copy 2022 Continental Hotels. All Rights Reserved.</p>
    </footer>
</body>
</html>