<?php
//login.php
$servername ="localhost";
$username="root";
$password="";
$dbname="project";
$conn =new mysqli($servername,$username,$password,$dbname);
 if($conn->connect_error){
	die("connection failed:".$conn->connect_error);
 }

session_start();
if(isset($_POST["submit"]))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql = "SELECT * FROM registration where email='$email' and password='$password'";
  $result =mysqli_query($conn,$sql);
  $row = mysqli_num_rows($result);
   if($row['email']==$email && $row['password']==$password){
     $_SESSION["email"]=$_POST['email'];
     $_SESSION["password"]=$_POST['$password'];
$_SESSION["status"]=true;
     $_SESSION['last_time']=time();
      header("location:addpost.php");
   }
    else {
      echo "failed";
    }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  </head>
  <body style="background-color: gray;">
    <div class="container">
      <div class="col-sm-8">
        <div class="jumbotron" style="position: relative; top: 100px; left: 190px;">
          <div class="form-group" style="margin-top:-50px;">
            <h1 style="margin-left:150px;">
             Login
            </h1>
            <hr>

        </div>
          <form class="form-hrizontal" method="POST" action="addpost.php" style =" margin-left: 50px;width:430px;">
            <div class="form-group input-group">
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-user"></span>
            </span>
              <input type="email" class="form-control" name="email" placeholder="Enter email....." required>
            </div>
            <div class="form-group input-group">
              <span class="input-group-addon">
                <span class="glyphicon glyphicon-lock"></span>
              </span>
              <input type="password" class="form-control" name="password" placeholder="Enter password....." required>
            </div>
            <div class="form-group">
              <label for="">
                <input type="checkbox" name="" value="">
                Remember me
              </label>
            </div>
            <div class="form-group">

              <input class="btn btn-primary" style="width:430px;" type="submit" name="submit" value="login">
            </div>
            <div class="form-group">
              <a href="#">Forget password</a>
            </div>
          </form>
        </div>

      </div>
    </div>
  <script src ="js/bootstrap.min.js" type="text/javascript">

  </script>













  </body>
</html>
