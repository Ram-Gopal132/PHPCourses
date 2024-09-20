<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Function In Php</title>
</head>
<body>

<center>

<?php

$ar=array("Indore","Gazipur","Raipur");
print_r ($ar);

$i=0;
while($i<count($ar))
{
    echo $ar[$i];
    echo "<br>";
    $i++;
}


// for($i=0;$i<count($ar);$i++)
// {
//     echo $ar[$i];
//     echo "<br>";
// }



?>
</center>
    
</body>
</html>