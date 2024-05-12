<?php
include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Blood Stock</title>
</head>
<body style="background-color: #F5B7B1">        
</body>
</html>
<?php

$sql = "SELECT sum(blood_stock), camp_id, blood_group
        FROM stock
        group by camp_id, blood_group ";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
   while( $row=mysqli_fetch_assoc($result)){
    echo "Quantity : ".$row["sum(blood_stock)"]."<br>";
    echo "Camp ID : ".$row["camp_id"]."<br>" ;
    echo "Blood Group : ".$row["blood_group"]."<br><br>" ;
   
}
}
?>