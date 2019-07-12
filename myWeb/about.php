<?php 
session_start();
$profileName=$_SESSION['loginUser'];

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="aboutus.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
     <link rel="stylesheet"
          href= 
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Coda+Caption" />
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Changa+One" />
    <title>AboutUs</title>
</head>
<body>
    <div class="header">
  <div class="header-right">
    
    <a  id = "idProfileName"  href="http://localhost/Tutorial/myWeb/accountinfo.php" style="font-size:24px; font-family: sans-serif;" ><i class="fa fa-user-circle" style="font-size:24px"></i>&nbsp<?php echo $profileName ?></a>
    <div class="navBar">
        <a class="" href="http://localhost/Tutorial/myWeb/mysql/home.php"><i class="fa fa-home"></i>&nbsp Home</a>
        <a href="http://localhost/Tutorial/myWeb/postfeed.php"> <i class="fa fa-th-large"></i>&nbsp PostFeed</a>
        <a class="#contact" href="http://localhost/Tutorial/myWeb/ContactFrom_v15/index.php"><i class="fa fa-bullhorn"></i>&nbsp Contact Us</a>
        <a href="aboutus.php"  class="active"><i class="fa fa-address-book-o"></i>&nbsp  About Us</a>
        <a onclick="confirmLogout();"><i class="fa fa-power-off" style="font-size:23px"></i></a>
    </div>
    </div>
</div >
<div class="box">
<div class="about"><h1>ABOUT US &nbsp <i class="fa fa-group"></i></h1></div>
<div class="info"><p>In 2018 We started Hand2Hand Web Based Application to make your life more confortable. If you are the employee you can find your job from our site. And also you can find good employee for your job from our site. We are here to help You.</p></div>

</div>
<div class="vision">
	<img src="assets/css/vision.png" style="width: 100px;margin-left: 250px;"><h2>Our Vision</h2><p class="p2">To Be The Premier Coordinator of Customers and Employers All Over The Sri Lanka.</p>
</div>
<div class="mission">
	<img src="assets/css/mission.png" style="width:100px;margin-left: 420px;"><h2 class="h2c">Our Mission</h2><p class="p3">To Build A Country Wide Network Of Customer Support Service And Also To  <br> Support Leaders In Employment Organizations.</p>
</div>
<div class="copy" style="font-family: sans-serif;">
	HandtoHand Allrights <i class="fa fa-copyright"></i><br>Contact Via Email <i class=" 	fa fa-envelope-o"></i>: handtohand@gmail.com <br> Via Call<i class="fa fa-phone"></i> : 0412223331
</div>
</body>
</html>
