<?php
	include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Decrement Stock</title>
</head>
<body style="background-color: #F5B7B1">  
<form action = 'update_stock.php' method = 'post'>
		<label>Camp Id : </label>
		<input type = 'text' name = 'camp_id'>
		<br>
		<br>
		<label>Blood Group : </label>
		<input type = 'text' name = 'blood_group'>
		<br>
		<br>
		<label>Quantity : </label>
		<input type = 'text' name = 'quantity'>
		<br>
		<br>
        <input type = 'submit' name = 'submit' value = 'submit'>
	
</body>
</html>

<?php
	$camp_id = $_POST['camp_id'];
	$blood_group = $_POST['blood_group'];
	$quantity = $_POST['quantity'];

	try
	{
	$sql = "UPDATE stock 
			SET blood_stock = blood_stock - $quantity
			WHERE camp_id = $camp_id AND blood_group = '$blood_group'";
	mysqli_query($conn, $sql);
	}
	catch(mysqli_sql_exception)
	{
		echo"Decrement Successful.";
	}
?>