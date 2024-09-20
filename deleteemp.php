<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Record</title>
</head>
<body>
    
<center>

<form action="deleteemp.php" method=post>

<table>

<tr>
    <th>Enter Empid:</th>
    <td><input type="text" name=txtid></td>
    <td><input type="submit" value=Search name=btn></td>
</tr>
</table>
</form>

<?php

if(isset($_POST['btn']))
{ 
    $id=$_POST['txtid'];
    $conn=mysqli_connect("localhost","root","","mynewdata");
    $sql="select * from emp where Empid=".$id;
   $result= mysqli_query($conn,$sql);
   if(mysqli_num_rows($result)>0)
   {

    session_start();
    $_SESSION['$Empid']=$id;
   
    echo "<table border=2>";
    echo "<tr>
            <th>Emp Id</th>
             <th>Emp Name</th>
              <th>Emp Salary</th>
               <th>Department</th>
        </tr>";

    while($row=mysqli_fetch_assoc($result))
    {
        echo "<tr>";
        echo "<td>".$row['Empid']."</td>";
        echo "<td>".$row['Name']."</td>";
        echo "<td>".$row['Salary']."</td>";
        echo "<td>".$row['Department']."</td>";
        

        echo "<form method=post action=deletedata.php>";
        echo "<td><input type=submit value=Delete name=delbtn></td>";
        echo "</form>";
        echo "</tr>";
    }
    echo "</table>";
   }
   else
   {
    echo "<font color=red>Record not found</font>";
   }
    
    mysqli_close($conn);
    // echo $id;


}


?>

</center>

</body>
</html>