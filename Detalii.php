<!DOCTYPE html>
<html lang="en">
<head>
    <title>Continental Hotels-Detalii</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="Scripts/App.js"></script>
    <link rel="stylesheet" href="CSS/Reset_Default_Proporties.css">
    <link rel="stylesheet" href="CSS/Acasa.css">
    <link rel="stylesheet" type="text/css" href="CSS/Media_Queries.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="Images/icon.png"/>
</head>
<body>
    <header class="fullPageHeader">
        <div id="navBar">
            <a href="Acasa_user.php" id="logo">Continental Hotels</a>
            <nav class="menu" id="myMenu">
                <ul>
                    <li><a href="Acasa_user.php">Acasă</a></li>
					<li><a href="Camere_user.php">Camere</a></li>
                    <li><a href="Detalii.php#serv">Echipa</a></li>
                    <li class="active"><a href="Detalii.php">Carieră</a></li>
                    <li><a href="Contact.php">Contact</a></li>
                    <li class="icon"><a href="javascript:void(0);" onclick="myResponsiveHamburger()"><i id="hamb-icon" class="fas fa-bars"></i></a></li>
                </ul>
            </nav>
        </div>
	
	
		
        <div class="centeredTitle"><h1>Povestea noastră</h1></div>
        <a href="#story" class="scroll-down"><i class="fas fa-angle-down bounce"></i></a>
    </header>
	<button onclick="topFunction()" id="toTop-btn" title="Go to top" class="no-focus bring-to-front"><i class="fas fa-angle-up white-color"></i></button>
    <section class="who-are" id="story">
        <h2 class="sml-h2">Cine suntem noi?</h2>
		<p>Continental Hotels SA  are o tradiție de 30 de ani pe piața turistică din România. Încă de la început obiectivele companiei au avut în vedere furnizarea de servicii hoteliere pentru segmentul turismului de afaceri. Astfel, în prezent, Continental Hotels este cel mai mare lanț hotelier românesc ce acoperă piața de lux, business și economy, oferind, în același timp, o gamă completă de servicii și pentru segmentul MICE.</p>
        
   </section>
   <section id="serv">
        <h2 class="sml-h2"></h2>
        <div id="bia">
            <a href="#bianca"><img class="bring-to-front" src="./Images/Echipa/Bia.jpeg" alt="Bianca Trif" /></a>
            <h3 class="sml-h3">Bianca Trif</h3>
            <p class="sml-p">Contabil Continental</p>
        </div>
		 <div id="miruna">
            <a href="#bianca"><img class="bring-to-front" src="./Images/radu.jpg" alt="Radu Enache" /></a>
            <h3 class="sml-h3">Radu Enache</h3>
            <p class="sml-p">Președinte Continentan</p>
        </div>
        <div id="cris">
            <a href="#bianca"><img class="bring-to-front" src="./Images/Echipa/onic.jpeg" alt="Cristina Onica" /></a>
            <h3 class="sml-h3">Cristina Onica</h3>
            <p class="sml-p">Vice Președinte Continental</p>
        </div>
    </section>
    <section class="text-image">
        <img src="./Images/Continental Arad/HA5.jpg" alt="office">
        <div>
            <h2 class="sml-h2">Istoria hotelurilor</h2>
			<p>Istoria Continental Hotels pe piața turistică din România începe în anul 1991, când Radu Enache înființează primul hotel. Încă de la început compania s-a orientat către segmentul turismului de afaceri. Dezvoltarea companiei a avut ca scop oferirea de servicii de cazare de 5, 4, 3 și 2 stele.</p>
            <p>Inițial, lanțul hotelier Continental includea complexele hoteliere omonime din București, Sibiu, Cluj-Napoca, Tîrgu-Mureș și Constanța, însumând 403 camere, plus hotelul Continental din Timișoara, care, deși a fost atribuit prin Hotărâre de Guvern societății Continental, nu a intrat niciodată efectiv în lanț.</p>
        </div>
        <div>
            <h2 class="sml-h2">Continental de poveste</h2>
            <p>Portofoliul Continental Hotels cuprinde următoarele branduri hoteliere proprii: Grand Hotel Continental (5 stele), Continental Forum (4 stele), Continental (3 stele), Hello Hotels (2 stele), MyContinental (3 stele) precum și cele de food & beverage: Concerto Restaurant, Balkan Bistro, Bistro Continental, MyBistro, Mondo Restaurant, Victoria Club, Tekaffe, Cofetăria Continental.</p>
   <p>Orașele în care Continental Hotels este prezent sunt: București, Arad, Constanța, Oradea, Sibiu,  Tîrgu Mureș, Drobeta Turnu Severin și  Suceava, totalizând peste 1860 de camere în 12 unități hoteliere.</p>    
	  <p>Oaspeții care aleg să efectueze rezervările direct pe website-ul nostru, beneficiază de 20% reducere față de orice alt website de rezervări.</p> 
	   </div>
        <img src="./Images/Continental Bucuresti/HB5.jpg" alt="office">
    </section>
	 <section id="subscribe" class="bent-shadow corner-shadow">
        <p>Înscrieți-vă pentru  nostru informativ gratuit.</p>
        <form>
            <input type="email" name="email" required="required" autocomplete="off" placeholder=" intoduceți adresa mail...">
            <button class="white-rounded-btn no-focus" style="cursor:pointer">Conectare</button>
        </form>
    </section>
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
           <h2>  </h2>
		   <h3>  </h3>
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