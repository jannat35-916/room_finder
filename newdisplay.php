<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table>


    <?php
    $servername ="localhost";
    $username="root";
    $password="";
    $dbname="project";
    $conn =new mysqli($servername,$username,$password,$dbname);
     if($conn->connect_error){
    	die("connection failed:".$conn->connect_error);
     }

     $sql = "SELECT * FROM contactus";
     $result = $conn->query($sql);

   if ($result->num_rows > 0) {
       echo "<table><tr><td>ID</td><td>Name</td></tr>";
       // output data of each row
       while($row = $result->fetch_assoc()) {
           echo "<tr><td>".$row["name"]."</td><td>".$row["email"]." ".$row["message"]."</td></tr>";
       }
       echo "</table>";
   } else {
       echo "0 results";
   }
   $conn->close();
   ?>
       </table>
  </body>
</html>
