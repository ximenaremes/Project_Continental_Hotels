<?php
include ('Database_connection.php');	
$con = mysqli_connect("localhost","root","","hotel") or die(mysql_error());	
			$id =$_GET['eid'];		
			$newsql ="DELETE FROM `login` WHERE id ='$id' ";
			if(mysqli_query($con,$newsql))
				echo' <script language="javascript" type="text/javascript"> alert("User name and password deleted!") </script>';
			header("Location: Settings_Admin.php");
?>