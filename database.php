<?php
	$db_server = "localhost";
	$db_user = "root";
	$db_name = "bloodbank";
	$db_pass = "";
	$conn = "";
	try
	{
		$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
		echo "Connected Successfully";
	}
	catch(mysqli_sql_exception)
	{
		echo "Connection failed";
	}
?>