<?php
    include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock</title>
</head>
<body style="background-color: #F5B7B1">
    <form action="insert_into_stock.php" method = 'post'>
        <label>Blood Stock :</label>
        <input type="text" name='blood_stock'>
        <br>
        <br>
        <label>Blood_Group : </label>
        <input type="text" name='blood_group'>
        <br>
        <br>
        <label>Camp ID :</label>
        <input type="text" name='camp_id'>
        <br>
        <br>
        <input type='submit' name='submit' value='submit'>
    </form>
</body>
</html>
<?php
    $blood_stock = $_POST['blood_stock'];
    $blood_group = $_POST['blood_group'];
    $camp_id= $_POST['camp_id'];
    try
    {
        $sql = "INSERT INTO stock VALUES ($blood_stock, '$blood_group',$camp_id)";
        mysqli_query($conn,$sql);
        echo "Updated successfully.";
    }
    catch(mysqli_sql_exception)
    {
        echo "Failed to update stock.";
    }
    
?>