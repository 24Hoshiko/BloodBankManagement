<?php
	include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloodbank</title>
</head>
<body style="background-color: #F5B7B1">
    <form action = 'insert_into_bloodbank.php' method = 'post'>
        <label>Camp ID : </label>
        <input type = "text" name = 'camp_id'>
        <br>
        <br>
        <label>Camp Name : </label>
        <input type = "text" name = 'camp_name'>
        <br>
        <br>
        <label>Venue : </label>
        <input type = "text" name = 'venue'>
        <br>
        <br>
        <label>Zip Code : </label>
        <input type = "text" name = 'zip_code'>
        <br>
        <br>
        <label>Contact NO : </label>
        <input type = "text" name = 'contact_no'>
        <br>
        <br>
	   <input type = 'submit' name = 'submit' value = 'submit'>
    </form>
</body>
</html>
<?php
    
    $camp_id = $_POST['camp_id'];
    $camp_name = $_POST['camp_name'];
    $venue = $_POST['venue'];
    $zip_code= $_POST['zip_code'];
    $contact_no = $_POST['contact_no'];

    $sql = "INSERT INTO bloodbank VALUES ($camp_id, '$camp_name', '$venue', $zip_code, $contact_no)";
        mysqli_query($conn,$sql);
        echo "Inserted successfully.";
    /*try
    {
        
    }
    catch(mysqli_sql_exception)
    {
        echo "Failed to add.";
    }
    */
?>