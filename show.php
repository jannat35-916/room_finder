
<!DOCTYPE html>
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ALL RentPost</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
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
            <li><a href="login.php"></a></li>
            <li><a href="show.php"></a></li>
          </ul>
        </div>
      </div>
    </nav>


  </body>
</html>





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

echo'<h1 align="center"><strong> Post details</strong> </h1>';
while ($value = mysqli_fetch_array($result))
{

echo ' <div style="border: 1px solid black; padding: 15px; height:560px; width:850px; margin-left:90px;">  ';
echo '<p> <strong>Property Title :</strong> ' . $value['propertytitle'] . '</p>';
echo '<p> <strong>Address :</strong> ' . $value['address'] . '</p>';
echo '<p> <strong>Property Size :</strong>' . $value['size'] . '</p>';
echo '<p><strong>Monthly Rent :</strong> ' . $value['rent'] . '</p>';
echo '<strong> Deposit :</strong> ' . $value['deposit'] . '</p>';
echo '<p> <strong>Preferred Tenant :</strong> ' . $value['preferred'] . '</p>';
echo '<p> <strong>Bed Room  :</strong> ' . $value['bedroom'] . '</p>';
echo '<p> <strong>Bath Room :</strong> ' . $value['bathroom'] . '</p>';
echo '<p> <strong>Belconies :</strong> ' . $value['belconies'] . '</p>';
echo '<p><strong>Floor No :</strong> ' . $value['floorno'] . '</p>';
echo '<p> <strong>Total floor :</strong> ' . $value['totalfloor'] . '</p>';
echo '<p> <strong>Garages :</strong> ' . $value['garages'] . '</p>';
echo '<p> <strong>Available :</strong> ' . $value['available'] . '</p>';
echo '<p > <strong>Owner Name :</strong> ' . $value['name'] . '</p>';
echo '<p > <strong>Email :</strong> ' . $value['email'] . '</p>';
echo '<p> <strong>Contact Number :</strong>' . $value['contact'] . '</p>';
echo '<a href="dlt.php">Map View</a>';

echo'</div>';
echo'<br>';

}
 ?>
