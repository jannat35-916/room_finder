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
echo'<a class="btn btn-primary" href="dlt.php">delete</a>';
echo '</div>';
}
 ?>











  ?>
