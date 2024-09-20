<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<center>

<?php
$conn=mysqli_connect("localhost","root","","mynewdata");
session_start();
$id=$_SESSION['$Empid'];
$sql="delete from emp where Empid=?";
$ps=$conn->prepare($sql);
$ps->bind_param("i",$id);

$ps->execute();
echo "<font color=red size=7>Record Deleted Sucessfully</font>"; 
  mysqli_close($conn);



?>
</center>
    
</body>
</html>