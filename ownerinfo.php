<?php

 if($_SERVER['REQUEST_METHOD'] == 'POST') {
 	   $name=$_POST['name'];
   $email=$_POST['email'];
	 $contact=$_POST['contact'];


$servername ="localhost";
$username="root";
$password="";
$dbname="project";
$conn =new mysqli($servername,$username,$password,$dbname);
 if($conn->connect_error){
	die("connection failed:".$conn->connect_error);
 }




 $sql="INSERT INTO owner(name,email,contact)

 VALUES('$name','$email','$contact')";
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
    <div class="container">
      <div class="col-sm-8">
        <div class="jumbotron" style="position: relative; top: 70px; left: 180px;">
          <div class="form-group" style="margin-top:-50px;">
            <h1 style="margin-left:150px;">
              Owner Information
            </h1>
            <hr>

          </div>
          <form class="form-hrizontal" method="POST" action="" style =" margin-left: 50px;width:430px;">
            <div class="form-group input-group">
              <input type="name" class="form-control" name="name" placeholder="enter name" required size="35">
            </div>

            <div class="form-group input-group">

              <input type="email" class="form-control" name="email" placeholder="enter email" required size="35">
            </div>

            <div class="form-group input-group">
              <input type="contact" class="form-control" name="contact" placeholder="enter contact" required size="35">
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
