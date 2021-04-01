<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body action="index.php" style="background-color: rgb(208, 216, 255);">
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$con=mysqli_connect("localhost","mohammadali","","form") or die(mysqli_error());
if((isset($_POST['submit']))){
$firstname = $con->real_escape_string($_POST['FirstName']);
$lastname = $con->real_escape_string($_POST['LastName']);
$username = $con->real_escape_string($_POST['UserName']);
$email = $con->real_escape_string($_POST['Email']);
$city = $con->real_escape_string($_POST['City']);


$sql="INSERT INTO contacts (FirstName, LastName, UserName, Email, City) VALUES ('".$firstname."','".$lastname."', '".$username."', '".$email."', '".$city."')";
  //Execute the query and returning a message
if(!$result = $con->query($sql))
{
die('Error occured [' . $con->error . ']');
}
else
   echo "<h1>Thank you for filling out your information!</h1>";
}

?>
    
</body>
</html>

