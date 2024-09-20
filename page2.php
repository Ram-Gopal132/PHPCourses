<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page2</title>
</head>
<body>
    
<center>

<?php

$user=$_COOKIE['name'];
$pass=$_COOKIE['password'];

echo  " second page Name: ".$user;
echo "<br> Password:  ".$pass;


?>

</center>

</body>
</html>