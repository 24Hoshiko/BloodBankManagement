<?php
	include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: #F5B7B1">
    <form action = "insert_into_blood_quality.php" method = 'post'>
        <label>Blood Group:</label>
        <input type = "text" name = 'blood_group'>
        <br>
        <br>
        <label>Donation_date:</label>
        <input type = "text" name = 'donation_date'>
        <br>
        <br>
        <label>Donation_id:</label>
        <input type = "text" name = 'donation_id'>
        <br>
        <br>
        <label>Camp_id:</label>
        <input type = "text" name = 'camp_id'>
        <br>
        <br>
        <label>Quantity</label>
        <input type = "text" name = 'quantity'>
        <br>
        <br>
        <label>Platelets:</label>
        <input type = "text" name = 'platelets'>
        <br>
        <br>
        <label>WBC:</label>
        <input type = "text" name = 'wbc'>
        <br>
        <br>
        <label>RBC:</label>
        <input type = "text" name = 'rbc'>
        <br><br>
        <input type = 'submit' name = 'submit' value='submit'>
    </form>
</body>
</html>
<?php
    
    $blood_group = $_POST['blood_group'];
    $donation_date = $_POST['donation_date'];
    $donation_id = $_POST['donation_id'];
    $camp_id= $_POST['camp_id'];
    $quantity = $_POST['quantity'];
    $platelets = $_POST['platelets'];
    $wbc = $_POST['wbc'];
    $rbc = $_POST['rbc'];
    try
    {
        $sql = "INSERT INTO blood_quality VALUES ('$blood_group','$donation_date',$donation_id, $camp_id, $quantity, $platelets, $wbc, $rbc)";
        mysqli_query($conn,$sql);
        echo "Blood Details inserted successfully.";
    }
    catch(mysqli_sql_exception)
    {
        echo "Failed to insert the Blood details";
    }
    
?>