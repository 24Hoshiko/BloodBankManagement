<?php
  include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DeleteDonor</title>
</head>
<body style="background-color: #F5B7B1">  
<form action = 'delete_from_donor.php' method = 'post'>
<label>Donation Id : </label>
		<input type = 'text' name = 'donation_id'>
		<br>
        <input type = 'submit' name = 'submit' value = 'submit'>

</form>
</body>
</html>
<?php
$donationid = $_POST['donation_id'];
$sql = "DELETE FROM blood_quality where donation_id = $donationid ";
$sql2 = "DELETE FROM donor where donation_id = $donationid ";

  try
  {
    mysqli_query($conn,$sql);
    mysqli_query($conn,$sql2);
    echo "Record deleted successfully";
  }
  catch(mysqli_sql_exception)
  {
    echo "Record deletion unsuccessful";
  }
?>