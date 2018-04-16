
<!DOCTYPE html>
<html lang="en" dir="ltr">
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
            <li><a href="show.php">Post</a></li>
            <li><a href="index.php">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>









    <div class="container" align="center">
        <h1 align="center">Add for post</h1>
    <form class=""  action="display.php" method="post" >
      <table  style=" width:500px; height:550px; left:120px;">

        <tr>
          <td> <label for="propertytitle">Property Title</label> </td>
      <td>
      <input type="text" name="propertytitle" placeholder="propertytitle" value="" size="30px;">
    </td>
  </tr>
  <tr>
    <td> <label for="address">Address</label> </td>
    <td> <input type="text" name="address" placeholder="address" value="" size ="30px;">  </td>
  </tr>
  <tr>
    <td> <label for="size">  Property Size</label>
    </td>
    <td>
     <input type="text" name="size" placeholder="property size" value=""size="30px;">
    </td>
  </tr>
  <tr>
    <td> <label for="rent"> Montly Rent</label>   </td>
    <td>
  <input type="text" name="rent" placeholder="monthly rent" value=""size="30px;">
    </td>
  </tr>
  <tr>
    <td> <label for="deposit"> Deposit</label> </td>
    <td>
   <input type="text" name="deposit" placeholder="deposit" value=""size="30px;">
    </td>
  </tr>
  <tr>
    <td><label for=prefrred>prefrred Tenant</label> </td>
    <td>
   <input type="text" name="preferred"placeholder="Preferred tenant"  value=""size="30px;">
    </td>
  </tr>
  <tr>
    <td><label for=bedroom>Bed Room</label> </td>
    <td>
      <input type="text" name="bedroom" placeholder="bed room" value=""size="30px;">
    </td>
  </tr>
  <tr>
    <td>  <label for="bathroom"> Bath Rooom </label>  </td>
    <td>
<input type="text" name="bathroom" placeholder="bathroom" value=""size="30px;">
    </td>
  </tr>
  <tr>
    <td> <label for="belconies"> Belconies </label>  </td>
    <td>
    <input type="text" name="belconies" placeholder="belconies" value=""size="30px;">
    </td>
  </tr>
<tr>
  <td><label for="furnishing">Furnishing</label> </td>
<td>
<input type="text" name="furnishing" placeholder="furnishing" value=""size="30px;">
</td>
</tr>
<tr>
  <td> <label for=" floorno ">floor No</label> </td>
<td>
<input type="text" name="floorno" placeholder="floor no" value=""size="30px;">
</td>
</tr>
<tr>
  <td> <label for="totalfloor">Total Floor </label> </td>
<td>
  <input type="text" name="totalfloor" placeholder="totalfloor" value=""size="30px;">
</td>
</tr>
<tr>
  <td> <label for="garages">Garages</label> </td>
<td>
   <input type="text" name="garages" placeholder="garages" value=""size="30px;">
</td>
</tr>
<tr>
  <td> <label for="available">  Available </label> </td>
<td>
<input type="text" name="available" placeholder="available" value=""size="30px;">
</td>
</tr>
<tr>
  <td> <label for="name">Name of owner</label> </td>
<td>
<input type="text" class="" name="name" placeholder="Name of owner" size="30px;">
</td>
</tr>
<tr>
  <td> <label for="email">Email of owner</label> </td>
<td>
<input type="text" class="" name="email" placeholder="Email of owner" size="30px;">
</td>
</tr>
<tr>
  <td> <label for="contact">Contact</label> </td>
<td>
<input type="contact" class="" name="contact" placeholder="enter contact"size="30px;" >
</td>
</tr>
<tr>
<td style="">
  <input type="submit" name="submit" value="submit" style="background-color:grey; height:30px; width:80px; float:right;">
</td>
</tr>
</table>
    </form>
</div>
  </body>
</html>
