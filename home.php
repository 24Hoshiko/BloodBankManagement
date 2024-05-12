<?php
    include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Blood Bank Management System</title>
</head>
<body id="home">
    <h1 id="id1">Blood Bank Management</h1>
    <br>
    <br>
    <button id="button" type="button" onclick="location.href='insert_into_admin.php'">Admin</button>
    <br>
    <br>
    <br>
    <button id="button" type="button" onclick="location.href='insert_into_donor.php'">Donor</button>
    <br>
    <br>
    <br>
    <button id="button" type="button" onclick="location.href='insert_into_patient.php'">Patient</button>
    
    
</body>
</html>
<?php
?>

