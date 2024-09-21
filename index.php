<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container my-5">
    <h2>List of Clients</h2>
    <a class="btn btn-primary" href="/PHPCourses/Create1.php" role="button">New Client</a><br>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>PHONE</th>
            <th>ADDRESS</th>
            <th>CREATED AT</th>
            <th>ACTION</th>
        </tr>
</thead>

<tbody>

<?php

$conn=mysqli_connect("localhost","root","","mynewdata");
//echo "Connection Sucessful";

// read all data from database
$sql="select * from Clients";
$result=$conn->query($sql);

if(!$result)
{
   die("invalid query: ".$conn->error);

}

//read data of each row

while($row=$result->fetch_assoc())
{
    echo "
            <tr>

<td>$row[id]</td>
<td>$row[name]</td>
<td>$row[email]</td>
<td>$row[Phone]</td>
<td>$row[address]</td>

<td>$row[created_at]</td>


<td>

<a class='btn btn-primary' href='/PHPCourses/Edit.php?id=$row[id]'>Edit</a>
<a class='btn btn-primary' href='/PHPCourses/remove.php?id=$row[id]'>delete</a>

</td>

</tr>
    ";
}

?>

</tbody>

    </table>



</div>


    
</body>
</html>