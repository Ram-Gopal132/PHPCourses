<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert data</title>
</head>
<body>

<center>
    <form method=post action=insertemp.php>
ID<input type="text" name=txtid><br><br>
Name<input type="text" name=txtname><br><br>
Salary<input type="text" name=txtsalary><br><br>
Department<input type="text" name=txtdep><br><br>
<input type="Submit" vlaue=Submit name="btn">
    </form>

<?php
if(isset($_POST['btn']))
{

$id=$_POST['txtid'];
$name=$_POST['txtname'];
$salary=$_POST['txtsalary'];
$dep=$_POST['txtdep'];


$mycon=mysqli_connect("localhost","root","","mynewdata");
echo "connection sucessful<br>";

$sql="insert into emp values(?,?,?,?)";
$ps=$mycon->prepare($sql);
$ps->bind_param("isis",$id,$name,$salary,$dep);
$ps->execute();
echo "Record Inserted";
}

?>

</center>
    
</body>
</html>