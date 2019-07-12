<?php
session_start();
require_once('connection.php');
require_once('loginrestrict.php');

$name =  $_SESSION['loginUser'];
$sql = "select * from usertable where name = '$name' or email = '$name' ";

$result = $conn->query($sql);

$row = $result->fetch_assoc() ;
$profileName =  $row["name"];
$email=$row["email"];

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="home.css">
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
     <link rel="stylesheet"
          href= 
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
	<title>Home</title>
</head>
<body>

<div class="header">
  <div class="header-right">
    
    <a id = "idProfileName"  href="http://localhost/Tutorial/myWeb/accountinfo.php" style="font-size:24px; font-family: sans-serif;" ><i class="fa fa-user-circle" style="font-size:24px"></i>&nbsp<?php echo $profileName ?></a>
    <div class="navBar">
        <a class="active" href="http://localhost/Tutorial/myWeb/mysql/home.php"><i class="fa fa-home"></i>&nbsp Home</a>
        <a class="" href="http://localhost/Tutorial/myWeb/postfeed.php"> <i class="fa fa-th-large"></i>&nbsp PostFeed</a>
        <a class="#contact" href="http://localhost/Tutorial/myWeb/ContactFrom_v15/index.php"><i class="fa fa-bullhorn"></i>&nbsp Contact Us</a>
        <a href="http://localhost/Tutorial/myWeb/about.php"><i class="fa fa-address-book-o"></i>&nbsp  About Us</a>
        <a onclick="confirmLogout();"><i class="fa fa-power-off" style="font-size:23px"></i></a>
    </div>
    </div>
</div>
<div class="box">
	<span></span>
    <span></span>
    <span></span>
    <span></span>
    <hr>
    <div class="deconstructed">
  <?php echo $name ?>
  <div> <?php echo $name ?></div>
  <div> <?php echo $name ?></div>
  <div> <?php echo $name ?></div>
  <div> <?php echo $name ?></div>
</div>
<hr>
	<div class="btn1">

<button type="button" onclick="window.location.href='http://localhost/Tutorial/myWeb/post.php'">Post A Job</button>
</div>
<div class="btn2">
<button type="button" onclick="window.location.href='http://localhost/Tutorial/myWeb/postfeed.php'">Show Posts</button>

	</div>
</div>
</div>

<script>
    function confirmLogout() {
        if (confirm("Do you want to  Logout!")) {
            location.replace("http://localhost/Tutorial/myWeb/logout.php");
        }
            
    }
</script>




</body>
</html>
</html>