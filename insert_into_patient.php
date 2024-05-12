<?php
    include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Patient</title>
</head>
<body style="background-color: #F5B7B1">
    <form action='insert_into_patient.php' method = 'post'>
        <label>Name : </label>
        <input type="text" name='name'>
        <br>
		<br>
        <label>Username : </label>
        <input type="text" name='username'>
        <br>
		<br>
        <label>Password : </label>
        <input type="text" name='password'>
        <br>
		<br>
        <label>DOB : </label>
        <input type="text" name='dob'>
        
        <br>
		<br>
        <label>Sex : </label>
        <input type="text" name='sex'>
	   
       <br>
		<br>
        <label>Camp ID : </label>
        <input type="text" name='camp_id'>
        
        <br>
		<br>
        <label>Zip Code : </label>
        <input type="text" name='zip_code'>
        <br>
        
		<br>
        <label>Quantity : </label>
        <input type="text" name='quantity'>
        <br>
        
		<br>
        <input type='submit' name='submit' value='submit'>
        
    </form>
</body>
</html>
<?php
    $name = $_POST['name'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $dob=$_POST['dob'];
    $sex=$_POST['sex'];
    $camp_id=$_POST['camp_id'];
    $zip_code=$_POST['zip_code'];
    $quantity=$_POST['quantity'];
    $sql = "INSERT INTO patient VALUES ('$name', '$username', '$password', '$dob', '$sex', $camp_id,
    zip_code, quantity)";
     mysqli_query($conn,$sql);
    
?>
