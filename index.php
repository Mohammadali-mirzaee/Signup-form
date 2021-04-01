<?php
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
die('Error occured [' . $conn->error . ']');
}
else
   echo "Thank you for filling out your information!";
}
?>


