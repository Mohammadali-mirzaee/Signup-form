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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    
</head>
<body action="index.php" style="background-color: rgb(208, 216, 255);">
<div class="container">
      <h2 class="h2">Signup Form</h2>
      <form class="row g-3" action="index.php" method="POST">
        <div class="col-md-4">
          <label for="validationServer01" class="form-label">First name</label>
          <input
            type="text"
            class="form-control"
            id="FirstName"
            name="FirstName"
            required
          />
        </div>
        <div class="col-md-4">
          <label for="validationServer02" class="form-label">Last name</label>
          <input
            type="text"
            class="form-control"
            id="LastName"
            name="LastName"
            required
          />
        </div>
        <div class="col-md-4">
          <label for="validationServerUsername" class="form-label"
            >Username</label
          >
          <div class="input-group has-validation">
            <input
              type="text"
              class="form-control"
              id="UserName"
              name="UserName"
              aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback"
              required
            />
          </div>
       
        </div>
        <div class="class="col-md-6"">
            <label for="validationCustomEmail" class="form-label">Email</label>
            <input
              type="text"
              class="form-control"
              id="Email"
              name="Email"
              aria-describedby="validationServer03Feedback"
              required
            />
          </div>         
        <div class="col-md-6">
          <label for="validationServer03" class="form-label">City</label>
          <input
            type="text"
            class="form-control"
            id="City"
            name="City"
            aria-describedby="validationServer03Feedback"
            required
          />
        </div>

        <div class="col-12">
          <div class="form-check">
            <input
              class="form-check-input is-invalid"
              type="checkbox"
              value=""
              id="invalidCheck3"
              aria-describedby="invalidCheck3Feedback"
              required
            />
            <label class="form-check-label" for="invalidCheck3">
              Agree to terms and conditions
            </label>
            <div id="invalidCheck3Feedback" class="invalid-feedback">
              You must agree before submitting.
            </div>
          </div>
        </div>
        <div class="col-12">
          <button class="btn btn-primary" type="submit" name="submit">
            Submit form
          </button>
        </div>
      </form>
    </div>
    
</body>
</html>

