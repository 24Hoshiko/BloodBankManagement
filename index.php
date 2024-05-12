<?php
	include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BloodBank</title>
</head>
<body style="background-color: #F5B7B1">	
</body>
</html>
<?php
	
	$sql = "insert into stock values
	(10,'A+',101),
	(12,'B+',101),
	(8,'AB+',101),
	(16,'O+',101),
	(2,'O-',101),
	(3,'A-',101),
	(6,'B-',101),
	(1,'AB-',101),
	
	(11,'A+',102),
	(9,'B+',102),
	(8,'AB+',102),
	(10,'O+',102),
	(3,'O-',102),
	(4,'A-',102),
	(5,'B-',102),
	(6,'AB-',102),
	
	(12,'A+',103),
	(13,'B+',103),
	(14,'AB+',103),
	(15,'O+',103),
	(16,'O-',103),
	(7,'A-',103),
	(8,'B-',103),
	(9,'AB-',103),
	
	(12,'A+',104),
	(12,'B+',104),
	(20,'AB+',104),
	(5,'O+',104),
	(6,'O-',104),
	(7,'A-',104),
	(8,'B-',104),
(9,'AB-',104),

(14,'A+',105),
(9,'B+',105),
(2,'AB+',105),
(19,'O+',105),
(4,'O-',105),
(2,'A-',105),
(2,'B-',105),
(2,'AB-',105)";
	mysqli_query($conn,$sql);
	mysqli_close($conn);

?>