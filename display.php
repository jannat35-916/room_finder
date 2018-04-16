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
            <li class=""><a href="index.php">Home</a></li
            <li><a href="show.php">Post</a></li>
            <li> <a href="index.php"></a> Logout </li>
          </ul>
        </div>
      </div>
    </nav>



<?php

 if($_SERVER['REQUEST_METHOD'] == 'POST') {
 	 $propertytitle=$_POST['propertytitle'];
 	 $address=$_POST['address'];
   $size=$_POST['size'];
    $rent=$_POST['rent'];
	 $deposit=$_POST['deposit'];
	  $preferred=$_POST['preferred'];
	   $bedroom=$_POST['bedroom'];
     $bathroom=$_POST['bathroom'];
 	 $belconies=$_POST['belconies'];
   $furnishing=$_POST['furnishing'];
    $floorno=$_POST['floorno'];
	 $totalfloor=$_POST['totalfloor'];
   	  $garages=$_POST['garages'];
	  $available=$_POST['available'];
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



 $sql="INSERT INTO property(propertytitle,address,size,rent,deposit,preferred,bedroom,bathroom,belconies,furnishing,floorno,totalfloor,garages,available,name,email,contact)

 VALUES('$propertytitle','$address','$size','$rent','$deposit','$preferred','$bedroom','$bathroom','$belconies','$furnishing','$floorno','$totalfloor','$garages','$available','$name','$email','$contact')";
 if($conn->query($sql)===TRUE){
	 echo " sucsessfully";
 }
 else{
	 echo "error connecting database:" .$conn->error;
 }

 $conn->close();
 }
?>


<!--show -->
<?php
/*connect*/
$servername ="localhost";
$username="root";
$password="";
$dbname="project";
$conn =new mysqli($servername,$username,$password,$dbname);
 if($conn->connect_error){
	die("connection failed:".$conn->connect_error);
 }
/*select database */
$query = "SELECT * FROM property";
$result=mysqli_query($conn,$query);
if (!$result) {
  # code...
  die('connection failed:'.mysqli_error());
}

echo'<h3> Post details </h3>';
while ($value = mysqli_fetch_array($result)) {


echo ' <div style="border : 1px solid black; padding: 15px; margin-bottom: 10px;">  ';
echo '<p> <strong>Property Title :</strong> ' . $value['propertytitle'] . '</p>';
echo '<p> <strong>Address :</strong> ' . $value['address'] . '</p>';
echo '<p> <strong>Property Size :</strong>' . $value['size'] . '</p>';
echo '<p><strong>Monthly Rent:</strong> ' . $value['rent'] . '</p>';
echo '<strong>deposit:</strong> ' . $value['deposit'] . '</p>';
echo '<p> <strong>preferred Tenant:</strong> ' . $value['preferred'] . '</p>';
echo '<p> <strong>Bed Room:</strong> ' . $value['bedroom'] . '</p>';
echo '<p> <strong>Bath Room:</strong> ' . $value['bathroom'] . '</p>';
echo '<p> <strong>Belconies:</strong> ' . $value['belconies'] . '</p>';
echo '<p><strong>floor No:</strong> ' . $value['floorno'] . '</p>';
echo '<p> <strong>Total floor:</strong> ' . $value['totalfloor'] . '</p>';
echo '<p> <strong> Garages:</strong> ' . $value['garages'] . '</p>';
echo '<p> <strong>Available:</strong> ' . $value['available'] . '</p>';
echo '<p> <strong>Owner Name :</strong> ' . $value['name'] . '</p>';
echo '<p> <strong>Email :</strong> ' . $value['email'] . '</p>';
echo '<p> <strong>Contact Number :</strong>' . $value['contact'] . '</p>';
echo '<a href="dlt.php">Delete</a>';
echo '</div>';

}
 ?>
