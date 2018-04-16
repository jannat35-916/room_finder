<?php

 if($_SERVER['REQUEST_METHOD'] == 'POST') {
 	 $id=$_POST['id'];
 	 $address=$_POST['address'];
   $lat=$_POST['lat'];
    $lang=$_POST['lang'];
	 $type=$_POST['type'];

$servername ="localhost";
$username="root";
$password="";
$dbname="project";
$conn =new mysqli($servername,$username,$password,$dbname);
 if($conn->connect_error){
	die("connection failed:".$conn->connect_error);
 }



 $sql="INSERT INTO map(id,address,lat,lang,type)

 VALUES('$id','$address','$lat','$lang','$type')";
 if($conn->query($sql)===TRUE){
	 echo " sucsessfully";
 }
 else{
	 echo "error connecting database:" .$conn->error;
 }

 $conn->close();
 }

?>
