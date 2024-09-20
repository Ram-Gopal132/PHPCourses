<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serch</title>
</head>
<body>
<center>
<?php


$mycon=mysqli_connect("localhost","root","","mynewdata");
//echo "Connection Sucessful<br>";

$sql="select * from emp";
// $sql="select * from emp where Empid=100";
$record=$mycon->query($sql);
$n=mysqli_num_rows($record);
//echo "Total Record: ".$n;

if($n>0)
{
   // while($row=mysqli_fetch_row($record))
    while($row=mysqli_fetch_assoc($record))
    {
        //echo $row[0]." ".$row[1]." ".$row[2]." ".$row[3];

        echo $row["Empid"]." ".$row["Name"]." ".$row["Salary"]." ".$row["Department"];
        echo "<br>";
    }


}
else
echo "<font color=red> Record Not Found</font>"
?>
    </center>
</body>
</html>