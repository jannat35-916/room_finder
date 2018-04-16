
 <?php

 $servername ="localhost";
 $username="root";
 $password="";
 $dbname="project";
 $conn =new mysqli($servername,$username,$password,$dbname);
  if($conn->connect_error){
 	die("connection failed:".$conn->connect_error);
  }
 /*select database */
 $query = "SELECT * FROM owner";
 $result=mysqli_query($conn,$query);
 if (!$result) {
   # code...
   die('connection failed:'.mysqli_error());
 }
 while ($value = mysqli_fetch_array($result)) {
 echo ' <div align="right"style="border : 1px solid black; padding: 15px; margin-bottom: 10px;">  ';
 echo '<p sytle="float=left;"> <strong>Owner Name :</strong> ' . $value['name'] . '</p>';
 echo '<p> <strong>Email :</strong> ' . $value['email'] . '</p>';
 echo '<p> <strong>Contact Number :</strong>' . $value['contact'] . '</p>';
 echo '</div>';
 }

  ?>
