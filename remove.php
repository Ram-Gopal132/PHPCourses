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
echo "Connection Sucessful";
$id=1;
    $sql="delete from clients where id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
    echo "Record deleted successfully.";
} else {
    echo "Error deleting record: " . $conn->error;
}

// Step 5: Close the statement and connection
$stmt->close();
$conn->close();

    ?>
    </center>
</body>
</html>