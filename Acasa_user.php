<!DOCTYPE html>
<html lang="en">
<head>
    <title>Continental Hotels</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="Scripts/App.js"></script>
   <link rel="stylesheet" href="CSS/Reset_Default_Proporties.css">
    <link rel="stylesheet" href="CSS/Acasa.css">
    <link rel="stylesheet" type="text/css" href="CSS/Media_Queries.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="images/icon.png"/>
</head>
<body>
    <header id="homeHeader">
        <div id="navBar">
            <a href="Acasa_user.php" id="logo">Continental Hotels</a>
            <nav class="menu" id="myMenu">
                <ul>
				     <li><a href="Camere_user.php">Camere</a></li>
                    <li><a href="Detalii.php#serv">Echipa</a></li>
                    <li><a href="Detalii.php">Carieră</a></li>
                    <li><a href="Contact.php">Contact</a></li>
                    <li class="icon"><a href="javascript:void(0);" onclick="myResponsiveHamburger()"><i id="hamb-icon" class="fas fa-bars"></i></a></li>
                </ul>
            </nav>
        </div>        
    </header>
	
	<section id="services">
		<img src="./Images/icon.png" alt="Logo"> </section>

	<section id="about">
            <img src="./Images/radu.jpg" alt="Radu Enache">
            <div id="about-text">
                <h2>Povestea noastră</h2>
                <p>Istoria Continental Hotels pe piața turistică din România începe în anul 1991. Încă de la început compania s-a orientat către segmentul turismului de afaceri iar dezvoltarea companiei a avut ca scop oferirea de servicii de cazare de 5, 4, 3 și 2 stele.
				În prezent Continental Hotels este prezent în București, Arad, Constanța, Oradea, Sibiu...</p>
                <button class="sml-text-btn no-focus"><span><a href="Detalii.php">Citește mai mult</a></span></button>
            </div>
        </section>
				


    <section id="hotels">
        <h2 class="sml-h2">CELE MAI REZERVATE HOTELURI</h2>
        <div class="flex-wrapper">
            <div class="flex-item-max3 single-hotel bring-to-front">
                <img src="./Images/Continental Bucuresti/HB4.jpg" alt="Continental Bucuresti">
                <div class="txt-padding">
                    <h3 class="sml-h3">Grand Hotel Continental București</h3>
                    <p class="sml-p">Locație: București</p>
                    <p class="hotel-price"><span>România</span></p>
                    <button class="empty-btn no-focus"><span><a href="Camere_user.php">Detalii camere</a></span></button>
                </div>
            </div>
            <div class="flex-item-max3 single-hotel bring-to-front">
                <img src="./Images/Continental Oradea/HO3.jpg" alt="Continental Forum Oradea">
                <div class="txt-padding">
                    <h3 class="sml-h3">Continental Forum Oradea</h3>
                    <p class="sml-p">Locație: Oradea</p>
                    <p class="hotel-price"><span>România</span></p>
                 <button class="empty-btn no-focus"><span><a href="Camere_user.php">Detalii camere</a></span></button>
                </div>
            </div>
            <div class="flex-item-max3 single-hotel bring-to-front">
                <img src="./Images/Continental Sibiu/HS1.jpg" alt="MyContinental Sibiu">
                <div class="txt-padding">
                    <h3 class="sml-h3">MyContinental Sibiu</h3>
                    <p class="sml-p">Locație: Sibiu</p>
                    <p class="hotel-price"><span>România</span></p>
                    <button class="empty-btn no-focus"><span><a href="Camere_user.php">Detalii camere</a></span></button>
                </div>
            </div>
			 <div class="flex-item-max3 single-hotel bring-to-front">
                <img src="./Images/Continental Drobeta Turnu Severin/HD1.jpg" alt="Continental Drobeta Turnu Severin">
                <div class="txt-padding">
                    <h3 class="sml-h3">Continental Drobeta Turnu Severin</h3>
                    <p class="sml-p">Locație: Drobeta Turnu Severin</p>
                    <p class="hotel-price"><span>România</span></p>
                    <button class="empty-btn no-focus"><span><a href="Camere_user.php">Detalii camere</a></span></button>
                </div>
            </div>
			 <div class="flex-item-max3 single-hotel bring-to-front">
                <img src="./Images/Continental Forum Tîrgu Mureș/HT1.jpg" alt="Continental Forum Tîrgu Mureș">
                <div class="txt-padding">
                    <h3 class="sml-h3">Continental Forum Tîrgu Mureș</h3>
                    <p class="sml-p">Locație: Tîrgu Mureș</p>
                    <p class="hotel-price"><span>România</span></p>
                   <button class="empty-btn no-focus"><span><a href="Camere_user.php">Detalii camere</a></span></button>
                </div>
            </div>
			 <div class="flex-item-max3 single-hotel bring-to-front">
                <img src="./Images/Continental Arad/HA5.jpg" alt="Continental Forum Arad">
                <div class="txt-padding">
                    <h3 class="sml-h3">Hotel Continental Forum Arad</h3>
                    <p class="sml-p">Locație: Arad</p>
                    <p class="hotel-price"><span>România</span></p>
                    <button class="empty-btn no-focus"><span><a href="Camere_user.php">Detalii camere</a></span></button>
                </div>
            </div>
        </div>
    </section>
    <button onclick="topFunction()" id="toTop-btn" title="Go to top" class="no-focus bring-to-front"><i class="fas fa-angle-up white-color"></i></button>
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
                <li><a href="Home_User.php">Acasă</a></li>
                <li><a href="Detalii.php#serv">Echipa</a></li>
                <li><a href="About.php">Cariere</a></li>
                <li><a href="Contact.php">Contact</a></li>
            </ul>
        </nav>
        <p class="copyright">Copyright &copy 2022 Continental Hotels. All Rights Reserved.</p>
    </footer>
</body>
</html>