<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>

<center>

<?php

$conn=mysqli_connect("Localhost","root","","mynewdata");


$sql ="select * from MYGuests";

$res=mysqli_query($conn,$sql);

  
echo "<font color=green size=7 >Connection Sucessful</font>";
mysqli_close($conn);

?>

</center>
    
</body>
</html>