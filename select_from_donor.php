<?php
    include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Donors</title>
</head>
<body style="background-color: #F5B7B1">
    
</body>
</html>
<?php

$sql = "SELECT * FROM donor";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
    echo"LIST OF DONORS ->";
   while( $row=mysqli_fetch_assoc($result)){
    echo "<br>Username : ".$row["username"]."<br>" ; 
    echo "Password : ".$row["password"]."<br>" ;
    echo "Donation ID : ".$row["donation_id"]."<br>" ;
    echo "Camp ID : ".$row["camp_id"]."<br>" ;
    echo "Mobile NO : ".$row["mobile_no"]."<br>" ;
    echo "Zip code : ".$row["zip_code"]."<br>" ;
    echo "Sex : ".$row["sex"]."<br><br>";
   
}
}
?>