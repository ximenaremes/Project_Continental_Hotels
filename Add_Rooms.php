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
                    <li><a href="Room_Status.php"><i class="fa fa-dashboard"></i>Camere disponibile</a></li>
                    <li><a class="active-menu" href="Add_Rooms.php"><i class="fa fa-plus-circle"></i>Adăugare camere</a></li>
                    <li><a href="Delete_Rooms.php"><i class="fa fa-pencil-square-o"></i>Ștergere camere</a></li>
                    <li><a href="Status_Room_Booking.php"><i class="fa fa-bar-chart-o"></i>Rezervări camere</a></li>
                    <li><a href="Payment.php"><i class="fa fa-qrcode"></i>Plată</a></li>
                    <li><a href="Settings_Admin.php"><i class="fa fa-user fa-fw"></i>Profil administrator</a></li>
                    <li><a href="Logout_Admin.php"><i class="fa fa-sign-out fa-fw"></i>Deconectare</a></li> 
				</ul>	
            </div>
        </nav>
        <div id="page-wrapper" >
            <div id="page-inner">
			    <div class="row">
                    <div class="col-md-12"><h1 class="page-header">Adaugă o nouă cameră</h1></div>
                </div>                    
            <div class="row">
                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Cameră nouă</div>
                            <div class="panel-body">
						        <form name="form" method="post">
                                    <div class="form-group">
                                        <label>Tip cameră</label>
                                            <select name="troom"  class="form-control" required>
                                                <option value="Single Room">Camera SINGLE</option>
                                                <option value="Deluxe Room"> Camera DELUXE</option>
												<option value="Luxury Room">Camera  LUXURY </option>
                                            </select>
                                    </div>
								    <div class="form-group">
                                        <label>Tip pat</label>
                                            <select name="bed" class="form-control" required>
                                                <option value="Simplu">Simplu</option>
                                                <option value="Dublu">Dublu</option>                                           
                                            </select>     
                                    </div>
							        <input type="submit" name="add" value="Adăugă" class="btn btn-primary"> 
                                </form>
                                
							<?php
								include('Database_connection.php');
								$con = mysqli_connect("localhost","root","","hotel") or die(mysql_error());
								if(isset($_POST['add'])) {
									$room = $_POST['troom'];
									$bed = $_POST['bed'];
									$place = 'Free';
									$check="SELECT * FROM room WHERE type = '$room' AND bedding = '$bed'";
									$sql="INSERT INTO `room`( `type`, `bedding`,`place`) VALUES ('$room','$bed','$place')" ;
									if(mysqli_query($con,$sql))
										echo '<script>alert("Camera nouă este adăugată!") </script>' ;
									else
										echo '<script>alert("Scuze! Verificați sistemul!") </script>' ;
								}
                            ?>
                            
							</div> 
                    </div>
                </div>   
            </div>
			</div>
		</div>
</body>
</html>