<?php  
	session_start();  
	if(!isset($_SESSION["user"]))
		header("location:Login_Admin.php");
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
	<title>Continental Hotels</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<script src="Scripts/Jquery_1.10.2.js"></script>
    <script src="Scripts/Bootstrap_Min.js"></script>
    <script src="Scripts/Jquery_MetisMenu.js"></script>
    <script src="Scripts/Jquery_Data_Tables.js"></script>
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
                    <li><a href="Status_Room_Booking.php"><i class="fa fa-bar-chart-o"></i>Rezervări camere</a></li>
                    <li><a class="active-menu" href="Payment.php"><i class="fa fa-qrcode"></i>Plată</a></li>
					<li><a href="Settings_Admin.php"><i class="fa fa-user fa-fw"></i>Profil administrator</a></li>
                    <li><a href="Room_Status.php"><i class="fa fa-gear fa-fw"></i>Setări</a></li>
                    <li><a href="Logout_Admin.php"><i class="fa fa-sign-out fa-fw"></i>Deconectare</a></li>
                </ul>
            </div>
        </nav>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">Detalii Plăți&nbsp&nbsp</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Nume</th>
                                                <th>Tipul camerei</th>
                                                <th>Tipul patului</th>
                                                <th>Check in</th>
                                                <th>Check out</th>
                                                <th>Tipul mesei</th>
                                                <th>Închiriere cameră</th>
                                                <th>Preț masă</th>
                                                <th>Preț total</th>
                                                <th>Printează</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										
                                        <?php
											include ('Database_connection.php');
											$con = mysqli_connect("localhost","root","","hotel") or die(mysql_error());
											$sql="select * from payment";
											$re = mysqli_query($con,$sql);
											while($row = mysqli_fetch_array($re)) {
												$id = $row['id'];
												if($id % 2 ==1 ) {
													echo"<tr class='gradeC'>
															<td>".$row['title']." ".$row['fname']." ".$row['lname']."</td>
															<td>".$row['troom']."</td>
															<td>".$row['tbed']."</td>
															<td>".$row['cin']."</td>
															<td>".$row['cout']."</td>
															<td>".$row['meal']."</td>
															<td>".$row['ttot']."</td>
															<td>".$row['mepr']."</td>
															<td>".$row['fintot']."</td>
															<td><a href=Print_Invoice.php?pid=".$id ." <button class='btn btn-primary'> <i class='fa fa-print' ></i>Print</button></td>
															</tr>";
												}
												else {
													echo"<tr class='gradeU'>
															<td>".$row['title']." ".$row['fname']." ".$row['lname']."</td>
															<td>".$row['troom']."</td>
															<td>".$row['tbed']."</td>
															<td>".$row['cin']."</td>
															<td>".$row['cout']."</td>
															<td>".$row['meal']."</td>
															<td>".$row['ttot']."</td>
															<td>".$row['mepr']."</td>
															<td>".$row['fintot']."</td>
															<td><a href=Print_Invoice.php?pid=".$id ." <button class='btn btn-primary'> <i class='fa fa-print' ></i>Print</button></td>
															</tr>";
												}
											}
										?>
									
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>