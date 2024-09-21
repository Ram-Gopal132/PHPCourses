<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <style>

        form{
            margin-left:255px;
            width:75%;
            background:lightgrey;
        }
    </style>
</head>
<body>

<!-- value="<?php echo $name; ?> -->

<div class="container my-5">
  <h2> New Client</h2>
</div>



<form class="row g-3 my-2" style="margin-left: 185px;" method=post action=Create1.php >

<div class="col-md-12">
    <label for="inputName14" class="form-label">Name</label>
    <input type="name" class="form-control" id="inputEmail4" name="txtname">
  </div>

  <div class="col-md-12">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4"  name="txtemail">
  </div>
  <div class="col-md-12">
    <label for="inputPhone" class="form-label">Phone</label>
    <input type="text" class="form-control" id="inputPhone" name="txtphone">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="txtaddress">
  </div>
    
  <div class="col-0">
    <button type="submit" class="btn btn-primary" name="btn">Submit</button>
  </div>

  
</form>


<?php



if(isset($_POST['btn']))
{


$name=$_POST['txtname'];
$email=$_POST['txtemail'];
$phone=$_POST['txtphone'];
$address=$_POST['txtaddress'];


$mycon=mysqli_connect("localhost","root","","mynewdata");
// echo "connection sucessful<br>";

$sql = "UPDATE clients SET name = ?, email = ?, Phone=?, address=?,  WHERE id = 2";

$ps=$mycon->prepare($sql);
$ps->bind_param("ssssi",$name,$email,$phone,$address,$id);
$ps->execute();
echo "<font color=green size=5>Record Updated </font>";
}


// record manually entered
/*
$mycon=mysqli_connect("localhost","root","","mynewdata");
$sql ="insert into clients(name,email,phone,address)values('Ram Gopal','rg230@gmail.com','9648950581','Basti')";

mysqli_query($mycon,$sql);
echo "Record Inserted";

*/

?>
    
</body>
</html>