<?php
session_start();
require_once('connection.php');
require_once('loginrestrict.php');
$id=$_GET["id"];

$name =  $_SESSION['loginUser'];
$profileName=$name;
$sql2 = "select * from usertable where name = '$name' or email = '$name' ";

$result2 = $conn->query($sql2);

$row2 = $result2->fetch_assoc() ;

  $sql = "SELECT id, name, email, mnum, Job, Pay, location, details FROM post  where name  ='$name' and id='$id'";
  $result = $conn->query($sql);
  $row1 = $result->fetch_assoc() ;
  $email=$row1["email"];
  $mnum=$row1["mnum"];
  $job=$row1["Job"];
  $pay=$row1["Pay"];
  $location=$row1["location"];
  $details=$row1["details"];
  $conn->close();


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="assets/css/post.css">
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
     <link rel="stylesheet"
          href= 
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

</head>
    <div class="header">
  <div class="header-right">
    
    <a id = "idProfileName"  href="" style="font-size:24px; font-family:century gothic;" ><i class="fa fa-user-circle" style="font-size:24px"></i>&nbsp<?php echo $profileName ?></a>
    <div class="navBar">
        <a class="" href="http://localhost/Tutorial/myWeb/mysql/home.php"><i class="fa fa-home"></i>&nbsp Home</a>
        <a class="active" href="http://localhost/Tutorial/myWeb/postfeed.php"> <i class="fa fa-th-large"></i>&nbsp PostFeed</a>
        <a class="#contact" href="http://localhost/Tutorial/myWeb/ContactFrom_v15/index.php"><i class="fa fa-bullhorn"></i>&nbsp Contact Us</a>
        <a href="http://localhost/Tutorial/myWeb/ContactFrom_v15/index.php"><i class="fa fa-address-book-o"></i>&nbsp  About Us</a>
        <a onclick="confirmLogout();"><i class="fa fa-power-off" style="font-size:23px"></i></a>
    </div>
    </div>
</div>

     <div class="verticalMenu">
        <a href="http://localhost/Tutorial/myWeb/postfeed.php" > <i class="fa fa-th-large"></i>&nbsp PostFeed</a>
        <a href="http://localhost/Tutorial/myWeb/myposts.php" ><i class="fa fa-tag"></i>&nbsp My Posts</a>
        <a class="active" href="http://localhost/Tutorial/myWeb/post.php"><i class="fa fa-plus-circle"></i>&nbsp Post a Job</a>
        <a href="http://localhost/Tutorial/myWeb/accountinfo.php"><i class="fa fa-user-circle"></i>&nbsp Account Info</a>
        <a href="http://localhost/Tutorial/myWeb/Private Messaging System/index.php"><i class="fa fa-comments-o"></i>&nbsp  Messenger</a>
    </div>




  <div class="container"> 
  <form id="contact" action="postedited.php" method="post" >
    <h3>Edit Your Post</h3>
    <hr>
    <h4>Reference Number Of Your Post is :  <?php echo $id ?></h4>
    <fieldset>
      <input id="email" placeholder="Your Email Address" name="email" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input id="mnum" placeholder="Your Phone Number" minlength="10" name="mnum" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input id="job" placeholder="What is the job?" name="job" type="text" tabindex="4" required>
    </fieldset>
    <fieldset>
      <input id="pay" placeholder="How much you will pay?" name="pay" type="text" tabindex="4" required>
    </fieldset>
    <fieldset>
      <input id="loc" placeholder="Your Location" type="text" name="location" tabindex="4" required>
    </fieldset>
    <fieldset>
      <textarea id="details" placeholder="Type Job Details" name="details" tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <textarea style="display: none;" id="id" placeholder="id" name="id" tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button  type="submit" id="contact-submit" data-submit="...Sending"><i class="fa fa-send-o"></i>&nbsp Edit</button>
    </fieldset>
  </form>
</div>

<script>
   var email = " <?php echo $email ?> "; 
   document.getElementById("email").value=email;
   var mnum = " <?php echo $mnum ?> "; 
   document.getElementById("mnum").value=mnum;
   var job = " <?php echo $job ?> "; 
   document.getElementById("job").value=job;
   var pay = " <?php echo $pay ?> "; 
   document.getElementById("pay").value=pay;
   var details = " <?php echo $details ?> "; 
   document.getElementById("details").value=details;
   var loc = " <?php echo $location ?> "; 
   document.getElementById("loc").value=loc;
   var loc = " <?php echo $location ?> "; 
   document.getElementById("loc").value=loc;
   var id = " <?php echo $id ?> "; 
   document.getElementById("id").value=id;
   
</script>

</body>
</html>