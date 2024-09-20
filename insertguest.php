<?php

$conn=mysqli_connect("localhost","root","","mynewdata");
echo "connection sucesss";

$sql="insert into MyGuests(firstname, lastname, email) values('Ram','Gopal','ramgopalgupta053@gmail.com')";

mysqli_query($conn,$sql);

echo "record Inserted";

mysqli_close($conn);

?>