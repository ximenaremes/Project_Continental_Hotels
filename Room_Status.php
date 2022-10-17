<?php  
	session_start();  
	if(!isset($_SESSION["user"]))
		header("location:Login_Admin.php");
?> 

<!DOCTYPE html>
<head>
    <title>Continental Hotels</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<script src="Scripts/Jquery_1.10.2.js"></script>
    <script src="Scripts/Bootstrap_Min.js"></script>
    <script src="Scripts/Jquery_MetisMenu.js"></script>
    <script src="Scripts/Custom_Scripts.js"></script>
    <link href="CSS/Bootstrap.css" rel="stylesheet"/>
    <link href="CSS/CStyle.css" rel="stylesheet"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/png" href="Images/icon.png"/>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Navigare</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
              
            </div>
        </nav>
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li><a class="active-menu" href="Room_Status.php"><i class="fa fa-dashboard"></i>Camere disponibile</a></li>
					<li><a href="Add_Rooms.php"><i class="fa fa-plus-circle"></i>Adaugă camere</a></li>
                    <li><a href="Delete_Rooms.php"><i class="fa fa-pencil-square-o"></i>Șterge camere</a></li>
                    <li><a href="Status_Room_Booking.php"><i class="fa fa-bar-chart-o"></i>Rezervări camere</a></li>
                    <li><a href="Payment.php"><i class="fa fa-qrcode"></i>Plată</a></li>
                    <li><a href="Settings_Admin.php"><i class="fa fa-user fa-fw"></i>Profil administrator</a></li>
                    <li><a href="Logout_Admin.php"><i class="fa fa-sign-out fa-fw"></i>Deconectare</a></li>    
            </div>
        </nav>
        <div id="page-wrapper" >
            <div id="page-inner">
				<div class="row">
                    <div class="col-md-12"><h1 class="page-header">Camere disponibile&nbsp&nbsp</h1></div>
                </div> 
                                  
            <?php
				include ('Database_connection.php');
				$con = mysqli_connect("localhost","root","","hotel") or die(mysql_error());
				$sql = "select * from room";
				$re = mysqli_query($con,$sql)
            ?>
            
            <div class="row">

				<?php
					while($row=mysqli_fetch_array($re))
						{
							$id = $row['type'];
							if($id == "Single Room") {
								echo"<div class='col-md-3 col-sm-12 col-xs-12'>
									    <div class='panel panel-primary text-center no-boder bg-color-blue'>
                                            <div class='panel-body'><img src='Images/Camere/cc1.jpg' alt='Single Room'><h3>" . "ID Room: " . $row['id'] ." ". "<br>" . "Type room: " . $row['type']."</h3></div>
											<div class='panel-footer back-footer-blue'>" . "Type bed: ". $row['bedding']."</div>
										</div>
									  </div>"; }
							else if ($id == "Deluxe Room"){
								echo"<div class='col-md-3 col-sm-12 col-xs-12'>
										<div class='panel panel-primary text-center no-boder bg-color-green'>
											<div class='panel-body'><img src='Images/Camere/cc5.jpg' alt='Deluxe Room'><h3>" . "ID Room: " . $row['id'] ." ". "<br>" . "Type room: ". $row['type']."</h3></div>
											<div class='panel-footer back-footer-green'>" . "Type bed: ". $row['bedding']."</div>
										</div>
									  </div>"; }
							else if($id =="Luxury Room") {
								echo"<div class='col-md-3 col-sm-12 col-xs-12'>
										<div class='panel panel-primary text-center no-boder bg-color-brown'>
										    <div class='panel-body'><img src='Images/Camere/cc3.jpg' alt='Luxury Room'><h3>" . "ID Room: " . $row['id'] ." ". "<br>" . "Type room: ". $row['type']."</h3></div>
											<div class='panel-footer back-footer-brown'>". "Type bed: " . $row['bedding']."</div>
										</div>
									  </div>"; }
						}
					?>
            </div>
            </div>
        </div>
</body>
</html>