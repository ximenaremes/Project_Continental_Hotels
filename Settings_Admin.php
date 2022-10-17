<?php
	session_start();
	if (!isset($_SESSION["user"]))
		header("location:Login_Admin.php");
	ob_start();
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
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/png" href="Images/icon.png" />
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
                    <li><a href="Payment.php"><i class="fa fa-qrcode"></i>Plată</a></li>
                    <li><a class="active-menu" href="Settings_Admin.php"><i class="fa fa-user fa-fw"></i>Profil administrator</a></li>
                    <li><a href="Room_Status.php"><i class="fa fa-gear fa-fw"></i>Setări</a></li>
                    <li><a href="Logout_Admin.php"><i class="fa fa-sign-out fa-fw"></i>Deconectare</a></li>
            </div>
        </nav>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">ADMINISTRATOR&nbsp&nbsp</h1>
                    </div>
                </div>

                <?php
					include('Database_connection.php');
					$con = mysqli_connect("localhost","root","","hotel") or die(mysql_error());
					$sql = "SELECT * FROM `login`";
					$re = mysqli_query($con, $sql)
                ?>

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nume</th>
                                                <th>Parola</th>
                                                <th>Actualizare</th>
                                                <th>Ștergere</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
												while ($row = mysqli_fetch_array($re)) {
													$id = $row['id'];
													$us = $row['usname'];
													$ps = $row['pass'];
													if ($id % 2 == 0) {
														echo "<tr class='gradeC'>
																<td>" . $id . "</td>
																<td>" . $us . "</td>
																<td>" . $ps . "</td>
																<td><button class='btn btn-primary btn' data-toggle='modal' data-target='#myModal'>Update</button></td>
																<td><a href=Code_For_Delete_Admin.php?eid=" . $id . "<button class='btn btn-danger'><i class='fa fa-edit'></i>Delete</button></td>
															   </tr>";
													} else {
														echo "<tr class='gradeU'>
																<td>" . $id . "</td>
																<td>" . $us . "</td>
																<td>" . $ps . "</td>
																<td><button class='btn btn-primary btn' data-toggle='modal' data-target='#myModal'>Update</button></td>
																<td><a href=Code_For_Delete_Admin.php?eid=" . $id . "<button class='btn btn-danger'> <i class='fa fa-edit'></i>Delete</button></td>
															   </tr>";
													}
												}
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <button class="btn btn-primary btn" data-toggle="modal" data-target="#myModal1">Adăugare admin</button>
                            <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Adăugați numele de utilizator și parola</h4>
                                        </div>
                                        <form method="post">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label>Adăugare un nou nume</label>
                                                    <input name="newus" class="form-control" placeholder="Enter User name">
                                                </div>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label>Parolă nouă</label>
                                                    <input name="newps" class="form-control" placeholder="Enter Password">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Închide</button>
                                                <input type="submit" name="in" value="Add" class="btn btn-primary">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
						if (isset($_POST['in'])) {
							$newus = $_POST['newus'];
							$newps = $_POST['newps'];
							$newsql = "Insert into login (usname, pass) values ('$newus','$newps')";
							if (mysqli_query($con, $newsql))
								echo ' <script language="javascript" type="text/javascript"> alert("Username și parola adaugate!")</script>';
							header("Location:Settings_Admin.php");
						}
                    ?>

                    <div class="panel-body">
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel">Actualizați numele de utilizator și parola</h4>
                                    </div>
                                    <form method="post">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label>Actualizare nume</label>
                                                <input name="usname" value="<?php echo $us; ?>" class="form-control" placeholder="Enter User name">
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label>Actualizare parolă</label>
                                                <input name="pasd" value="<?php echo $ps; ?>" class="form-control" placeholder="Enter Password">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <input type="submit" name="up" value="Update" class="btn btn-primary">
                                    </form>
                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

        <?php
			if (isset($_POST['up'])) {
				$usname = $_POST['usname'];
				$passwr = $_POST['pasd'];
				$upsql = "UPDATE `login` SET `usname`='$usname',`pass`='$passwr' WHERE id = '$id'";
				if (mysqli_query($con, $upsql))
					echo ' <script language="javascript" type="text/javascript"> alert("Username și parola actualizate") </script>';
				header("Location: Settings_Admin.php");
			}
			ob_end_flush();
        ?>
		
    </div>
</body>
</html>