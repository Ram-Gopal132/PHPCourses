<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple insert</title>
</head>
<body>
    
<center>


<?php

$conn=mysqli_connect("Localhost","root","","mynewdata");
//echo "Connection Sucess";
$sql="insert into MYGuests(firstname,lastname,email)values('Ashish','Chauhan','ashish555@gmail.com');";
$sql.="insert into MYGuests(firstname,lastname,email)values('Gopal','raj','Gopal555@gmail.com');";
$sql.="insert into MYGuests(firstname,lastname,email)values('Krishnan','Gopal','Krig@gmail.com')";

mysqli_multi_query($conn,$sql);
echo "Record Inserted";

mysqli_close($conn);




?>
</center>
</body>
</html>