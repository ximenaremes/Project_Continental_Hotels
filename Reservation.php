<?php
    include('Database_connection.php')
?>

<!DOCTYPE html>
<head>
    <title>Continental Hotels</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="CSS/Bootstrap.css" rel="stylesheet"/>
    <link href="CSS/CStyle.css" rel="stylesheet"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/png" href="Images/icon.png"/>
</head>
<body>
<div id="wrapper">
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li>
                    <a href="Acasa_user.php"><i class="fa fa-home"></i>Acasă</a>
					<a href="Camere_user.php"><i class="fa fa-bed"></i>Camere</a>
					<a href="Detalii.php#serv"><i class="fa fa-users"></i>Echipa</a>
					<a href="Detalii.php"><i class="fa fa-info-circle"></i>Detalii</a>
					<a href="Contact.php"><i class="fa fa-envelope"></i>Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header">Rezervări Continental Hotels</h1>
                </div>
            </div>
            <div>
                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                         <div class="panel-heading">INFORMAȚII PERSONALE</div>
                        <div class="panel-body">
                            <form name="form" method="post">
                                <div class="form-group">
                                    <label>Adresare</label>
                                    <select name="title" class="form-control" required>
                                        <option value="Dl.">Dl.</option>
                                        <option value="Dna.">Dna.</option>
                                        <option value="Dra.">Dra.</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Nume</label>
                                    <input name="first_name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Prenume</label>
                                    <input name="last_name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input name="email" type="email" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Telefon</label>
                                    <input name="phone_number" type="text" class="form-control" required>
                                </div>
								 <div class="form-group">
                                    <label>Alte menționări</label>
                                    <input name="phone_number" type="text" class="form-control" required>
                                </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="col-md-6 col-sm-6">
                        <div class="panel panel-primary">
                             <div class="panel-heading">INFORMAȚII REZERVARE</div>
                            <div class="panel-body">
							<div class="form-group">
                                    <label>Hotel</label>
                                    <select name="hotel" class="form-control" required>
                                        <option value="Continental Oradea">Continental Oradea </option>
                                        <option value="Continental Arad">Continental Arad </option>
                                        <option value="Continental Sibiu">Continental Sibiu</option>
										<option value="Continental Bucuresti">Continental Bucuresti</option>
										<option value="Continental Drobeta Turnu Severin">Continental Drobeta Turnu Severin</option>
										<option value="Continental Forum Tîrgu Mureș">Continental Forum Tîrgu Mureș</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Tip Cameră</label>
                                    <select name="type_room" class="form-control" required>
                                        <option value="Single Room"> Single Room </option>
                                        <option value="DELUXE Room"> DELUXE Room </option>
                                        <option value="LUXURY Room">LUXURY Room </option>
                                    </select>
                                </div>
								<div class="form-group">
                                    <label>Tip Pat</label>
                                    <select name="type_bed" class="form-control" required>
                                        <option value="Single">Single</option>
                                        <option value="Double">Double</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Plan Masă</label>
                                    <select name="meal_plan" class="form-control" required>
                                        <option value="Room only">Room only</option>
                                        <option value="Breakfast">Breakfast</option>
                                        <option value="Half Board">Half Board<option>
                                        <option value="Full Board">Full Board</option>
                                    </select>
							    </div>
                                <div class="form-group">
                                    <label>Check-In</label>
                                    <input name="check_in" type="date" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Check-Out</label>
                                    <input name="check_out" type="date" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div>
                            <h4>VERIFICARE</h4> 
                            <p>Introduceți codul random generat :    <?php $random_code = rand();
                                                          echo $random_code;
                                                    ?> </p> 
							<input type="text" name="key_code" title="random code"/>
                            <input type="hidden" name="generated_code" value="<?php echo $random_code; ?>"/>
                            <input type="submit" name="submit" class="btn btn-primary">
							 
                           

                            <?php
                                if (isset($_POST['submit'])) {
                                    $key_code = $_POST['key_code'];
                                    $generated_code = $_POST['generated_code'];
                                    if ($key_code != "$generated_code")
                                        echo "<script type='text/javascript'> alert('Cod invalid! Vă rugăm să încercați din nou!')</script>";
                                    else{
                                        $connection = mysqli_connect("localhost", "root", "", "hotel");
                                        $new = "Not Confirm Yet";
                                        $newUser = "INSERT INTO `roombook`(`Title`, `FName`, `LName`, `Email`, `Phone`, `TRoom`, `Bed`, `Meal`, `cin`, `cout`,`stat`,`nodays`) VALUES ('$_POST[title]','$_POST[first_name]','$_POST[last_name]','$_POST[email]','$_POST[phone_number]','$_POST[type_room]','$_POST[type_bed]','$_POST[meal_plan]','$_POST[check_in]','$_POST[check_out]','$new',datediff('$_POST[check_out]','$_POST[check_in]'))";
                                      
										if (mysqli_query($connection, $newUser))
                                            echo "<script type='text/javascript'> alert('Mulțumim! Cererea dvs. de rezervare a fost trimisă!')</script>";
                                        else
                                            echo "<script type='text/javascript'> alert('Ne cerem scuze! Eroare la adăugarea utilizatorului în baza de date! Vă rugăm să încercați din nou!')</script>";
                                        }
                                    }
                            ?>
                            
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>