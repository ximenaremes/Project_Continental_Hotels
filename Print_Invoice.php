<html>
<head>
	<meta charset="utf-8">
	<title>Factură fiscală</title>
	<link href="CSS/Invoice.css" rel="stylesheet"/>
	<link rel="shortcut icon" type="image/png" href="Images/icon.png"/>
</head>
<body>

	<?php
		ob_start();	
		include ('Database_connection.php');
		$con = mysqli_connect("localhost","root","","hotel") or die(mysql_error());
		$pid = $_GET['pid'];
		$sql ="select * from payment where id = '$pid' ";
		$re = mysqli_query($con,$sql);
		while($row=mysqli_fetch_array($re)) {
			$id = $row['id'];
			$title = $row['title'];
			$fname = $row['fname'];
			$lname = $row['lname'];
			$troom = $row['troom'];
			$bed = $row['tbed'];
			$cin = $row['cin'];
			$cout = $row['cout'];
			$meal = $row['meal'];
			$ttot = $row['ttot'];
			$mepr = $row['mepr'];
			$fintot = $row['fintot'];
			$days = $row['noofdays'];
	}
	$type_of_room = 0;
	if ($troom == "Single Room") {
		$type_of_room = 30; } 
	else if ($troom == "Deluxe Room") {
		$type_of_room = 80; } 
	else if ($troom == "Luxury Room") {
		$type_of_room = 100; }
	if ($meal == "Room only") {
		$meal_plan = 0; } 
	else if ($meal == "Breakfast") {
		$meal_plan = 15; } 
	else if ($meal == "Half Board") {
		$meal_plan = 20; } 
	else if ($meal == "Full Board") {
		$meal_plan = 40; }
	$ttot = $type_of_room * $days;
	$mepr = $meal_plan * $days;
	$fintot = $ttot + $mepr;
	?>

	<header>
		<h1>Factură fiscală</h1>
			<address >
				<p>Continental Hotels</p>
				<p>Strada: Calea Griviţei 143, 010708, Sector 1, Bucureşti</p>
				<p>Telefon: +40 372 121 721 </p>
			</address>
	</header>
		<div class="image"><img alt="" src="Images/icon.png"></div>
		<article>
			<address ><p><?php echo $title . " " . $fname. " " .$lname ?><br></p></address>
			<table class="meta">
				<tr>
					<th><span >Factura fiscală</span></th>
					<td><span ><?php echo $id; ?></span></td>
				</tr>
				<tr>
					<th><span >Data check-in</span></th>
					<td><span ><?php echo $cin; ?></span></td>
				</tr>
				<tr>
					<th><span >Data check-out</span></th>
					<td><span ><?php echo $cout; ?></span></td>
				</tr>
			</table>
			<table class="inventory">
				<thead>
					<tr>
						<th><span >Articole</span></th>
						<th><span >Numărul de zile</span></th>
						<th><span >Preț</span></th>
						<th><span >Preț Total</span></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><span >Tip Cameră:<br><?php echo $troom; ?></span></td>
						<td><span ><?php echo $days; ?></span></td>
						<td><span ><?php  echo $type_of_room;?></span><span data-prefix> </span><span data-prefix>Ron</span></td>
						<td><span><?php echo $ttot; ?></span><span data-prefix></span> <span data-prefix>Ron</span></td>
					</tr>
					<tr>
						<td><span >Tip Pat:<br><?php echo $bed; ?> </span></td>
						<td><span ><?php echo $days; ?></span></td>
						<td><span ><?php  echo "0";?></span><span data-prefix> </span><span data-prefix>Ron</span></td>
						<td><span><?php echo "0"; ?></span><span data-prefix> </span><span data-prefix>Ron</span></td>
					</tr>
					<tr>
						<td><span >Tip Masă:<br><?php echo $meal; ?></span></td>
						<td><span ><?php echo $days; ?></span></td>
						<td><span ><?php  echo $meal_plan; ?></span><span data-prefix> </span><span data-prefix>Ron</span></td>
						<td><span><?php echo $mepr; ?></span><span data-prefix> </span><span data-prefix>Ron</span></td>
					</tr>
				</tbody>
			</table>
			<table class="balance">
				<tr>
					<th><span >Preț Total</span></th>
					<td><span><?php echo $fintot; ?></span><span data-prefix> </span><span data-prefix>Ron</span></td>
				</tr>
			</table>
		</article>
		<aside>
			<h1><span >Contactează-ne</span></h1>
			<div ><p id="paragraph">reservation@continentalhotels.ro, sales@continentalhotels.ro <br><br>www.ContinentalHotels.com <br></p></div>
		</aside>
	</body>
</html>