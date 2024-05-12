<?php
	include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Donor</title>
</head>
<body style="background-color: rgb(246, 211, 217);">
	<form action = 'insert_into_donor.php' method = 'post'>
		<br>
        <br>
        <br>
		<label>Username : </label>
		<input type = 'text' name = 'username'>
		<br>
		<br>
        <br>
		<label>Password : </label>
		<input type = 'password' name = 'password'>
		<br>
		<br>
        <br>
		<label>Name : </label>
		<input type = 'text' name = 'name'>
		<br>
		<br>
        <br>
		<label>DOB : </label>
		<input type = 'text' name = 'dob'>
		<br>
		<br>
        <br>
		<label>Donation ID : </label>
		<input type = 'text' name = 'donation_id'>
		<br>
		<br>
        <br>
		<label>Camp ID : </label>
		<input type = 'text' name = 'camp_id'>
		<br>
		<br>
        <br>
		<label>Mobile Number : </label>
		<input type = 'text' name = 'mob_no'>
		<br>
		<br>
        <br>
		<label>Zip Code : </label>
		<input type = 'text' name = 'zip_code'>
		<br>
		<br>
        <br>
		<label>Sex : </label>
		<input type = 'text' name = 'sex'>
		<br>
		<br>
        <br>
		<input type = 'Submit' name = 'Submit' value = 'Submit'>

	</form>
</body>
</html>

<?php
	$username = $_POST['username'];
	$password = $_POST['password'];
	$name = $_POST['name'];
	$dob = $_POST['dob'];
	$donation_id = $_POST['donation_id'];
	$camp_id = $_POST['camp_id'];
	$mob_no = $_POST['mob_no'];
	$zip_code = $_POST['zip_code'];
	$sex = $_POST['sex'];

	try
	{
		$sql = "INSERT INTO donor values ('$username', '$password', '$name', '$dob', $donation_id,
	 $camp_id, $mob_no, $zip_code, '$sex')";
		mysqli_query($conn,$sql);
		echo "Donor registered successfully !";
	}

	catch(mysqli_sql_exception)
	{
		echo "Failed to register the donor.";
	}


?>