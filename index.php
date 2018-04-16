<?php
 if($_SERVER['REQUEST_METHOD'] =='POST') {
 	 $name=$_POST['name'];
 	 $email=$_POST['email'];
   $message=$_POST['message'];
/*connect*/
$servername ="localhost";
$username="root";
$password="";
$dbname="project";
$conn =new mysqli($servername,$username,$password,$dbname);
 if($conn->connect_error){
	die("connection failed:".$conn->connect_error);
 }


 $sql="INSERT INTO contactus(name,email,message)

 VALUES('$name','$email','$message')";
 if($conn->query($sql)===TRUE){
	 echo "";
 }
 else{
	 echo "error connecting database:" .$conn->error;
 }

 $conn->close();
}

?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Find home</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body class="header" data-spy="scroll" data-target="#my-navber" data-offset="50">

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
            <li> <a href="about">About</a></li>
            <li><a href="contact">Contact</a></li>
            <li><a href="login.php">Add Post</a></li>
            <li><a href="show.php">ALL RentPost</a></li>
            <li><a href="registration.php">Registration</a></li>
            <li><a href="login.php">Login</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div id="carousel-example-generic"  class="carousel my-carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="image/img1.jpg" alt="" class="center-block"  style=" height=500px; width:100%;position: relative; ">
      <div class="carousel-caption">
  <h2 align="center">To-Let for home</h2>
      </div>
    </div>

    <div class="item">
      <img src="image/img2.jpg" alt="" class="center-block"  style=" height=500px;width:100%; position: relative;">
      <div class="carousel-caption">
        <h2 align="center">To-Let for home</h2>
      </div>
    </div>

    <div class="item">
      <img src="image/img3.jpg" alt="" class="center-block" style="height=500px; width:100%; position: relative;" >
      <div class="carousel-caption">
          <h2 align="center">To-Let for home</h2>
      </div>
    </div>
  </div>

  <!-- Controls -->
 <a class="left carousel-control" href="##carousel-example-generic" role="button" data-slide="prev">
   <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
   <span class="sr-only">Previous</span>
 </a>
 <a class="right carousel-control" href="##carousel-example-generic" role="button" data-slide="next">
   <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
   <span class="sr-only">Next</span>
 </a>
</div>

</div>


  <!--about-->
<br>
<br>
<section class="padding bg-grey" id="about">

      <div class="container">
        <h2 class="section-title text-center">about Us</h2>
        <p class="section-lead text-center text-muted">This website try to help you to find your desire home for rent.
          It reduce your time to finding home door to door.
          You can see all type of catagories here and choose one.</p>

        </div>

    </section>





<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<form action="index.php" method="post">
<section class="padding bg-grey" id="contact">
      <div class="container">
        <h2 class="section-title text-center">Contact Us</h2> <br>
        <p class="section-lead text-center text-muted">Send us your inquiry, we will help you and reply as soon as possible</p>
        <br>
        <br>
        <div class="section-body">
          <div class="row col-spacing">
            <div class="col-12 col-md-5">
              <p class="contact-text"><b>Contact info</b></p>
              <ul class="contact-icon">
                <li><i class="ion ion-ios-telephone"></i> <div>+88017000000</div></li><br>
                <li><i class="ion ion-ios-email"></i> <div>home@gmail.com</div></li>
              </ul>

            </div>
            <div class="col-12 col-md-7">
              <form class="contact row" id="contact-form">
                <div class="form-group col-6">
                  <input type="text" class="form-control" placeholder="Name" name="name" required="">
                </div>
                <div class="form-group col-6">
                  <input type="email" class="form-control" placeholder="Email" name="email" required="">
                </div>

                <div class="form-group col-12">
                  <textarea class="form-control" placeholder="Message" name="message" required=""></textarea>
                </div>
                <div class="form-group col-12 mt-2">
                  <input type="submit" name="submit" value="Send Message" style="background-color:dodgerblue; height:50px; width:130px;">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </form>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>


<!--slideshow -->

  </body>
  </body>
</html>
