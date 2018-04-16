<?php

 if($_SERVER['REQUEST_METHOD'] == 'POST') {
 	   $firstname=$_POST['firstname'];
 	 $lastname=$_POST['lastname'];
   $email=$_POST['email'];
    $address=$_POST['address'];
	 $contact=$_POST['contact'];
	  $password=$_POST['password'];
	   $confirmpassword=$_POST['confirmpassword'];

$servername ="localhost";
$username="root";
$password="";
$dbname="project";
$conn =new mysqli($servername,$username,$password,$dbname);
 if($conn->connect_error){
	die("connection failed:".$conn->connect_error);
 }
 $sql="INSERT INTO registration(firstname,lastname,email,address,contact,password,confirmpassword)

 VALUES('$firstname','$lastname','$email','$address','$contact','$password','$confirmpassword')";
 if($conn->query($sql)===TRUE){
	 echo " sucsessfully";
 }
 else{
	 echo "error connecting database:" .$conn->error;
 }

 $conn->close();
 }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  </head>
  <body style="background-color: gray;">


    <nav class="navbar navbar-default navbar-inverse navber-fixed-top" id ="my-navber">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">To-Let</a>
        </div>
        <div class=" navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class=""><a href="index.php">Home</a></li>
            <li><a href="login.php">Login</a></li>
          </ul>
        </div>
      </div>
    </nav>











    <div class="container">
      <div class="col-sm-8">
        <div class="jumbotron" style="position: relative; top: 70px; left: 180px;">
          <div class="form-group" style="margin-top:-50px;">
            <h1 style="margin-left:150px;">
              Registration
            </h1>
            <hr>

          </div>
          <form class="form-hrizontal" method="POST" action="registration.php" style =" margin-left:50px;width:430px;">
            <div class="form-group input-group">
              <input type="firstname" class="form-control" name="firstname" placeholder="enter frist name" required size="35">
            </div>
            <div class="form-group input-group">
              <input type="lastname" class="form-control" name="lastname" placeholder="enter last Name" required size="35">
            </div>
            <div class="form-group input-group">

              <input type="email" class="form-control" name="email" placeholder="enter email" required size="35">
            </div>
            <div class="form-group input-group">
              <input type="address" class="form-control" name="address" placeholder="enter address" required size="35">
            </div>
            <div class="form-group input-group">
              <input type="contact" class="form-control" name="contact" placeholder="enter contact" required size="35">
            </div>
            <div class="form-group input-group">

              <input type="password" class="form-control" name="password" placeholder="enter password" required size="35">
            </div>
            <div class="form-group input-group">

              <input type="password" class="form-control" name="confirmpassword" placeholder="confirm password" required size="35">
            </div>

            <div class="form-group">

              <input type="submit" name="submit" value="submit">
            </div>

          </form>
        </div>

      </div>
    </div>
  <script src ="js/bootstrap.min.js" type="text/javascript">

  </script>
  </body>
</html>
