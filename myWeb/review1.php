<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myweb";

// Create connection
$to=$_GET['To'];

$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 

$by =  $_SESSION['username'];
$profileName=$_SESSION['username'];
$to=$_GET['To'];
//$sql2 = "select * from employeetable where name = '$name' or email = '$name' ";
//$result2 = $conn->query($sql2);
//$row2 = $result2->fetch_assoc() ;
//$profileName =  $row2["name"];

//$con->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="review1CSS.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
     <link rel="stylesheet"
          href= 
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title></title>
</head>
<body>
    <div class="header">
  <div class="header-right">
    
    <a id = "idProfileName"  href="" style="font-size:24px; font-family: sans-serif;" ><i class="fa fa-user-circle" style="font-size:24px"></i>&nbsp<?php echo $profileName ?></a>
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
        <a href="http://localhost/Tutorial/myWeb/postfeed.php" class="active"> <i class="fa fa-th-large"></i>&nbsp PostFeed</a>
        <a href="http://localhost/Tutorial/myWeb/myposts.php" ><i class="fa fa-tag"></i>&nbsp My Posts</a>
        <a href="http://localhost/Tutorial/myWeb/post.php"><i class="fa fa-plus-circle"></i>&nbsp Post a Job</a>
        <a href="http://localhost/Tutorial/myWeb/accountinfo.php"><i class="fa fa-user-circle"></i>&nbsp Account Info</a>
        <a href="http://localhost/Tutorial/myWeb/Private Messaging System/index.php"><i class="fa fa-comments-o"></i>&nbsp  Messenger</a>
    </div>
    
    <div class="container">
        <div class='takeToDown'>
        <div id="idOnePost" class="onePost">
            <?php

            require_once('include/connection.php');




$sql = "SELECT * FROM `review`WHERE `To`='$to' ";
            $result_set = mysqli_query($con, $sql);
            //$row = mysqli_fetch_assoc($result_set);
            //echo $row2['name'];
            //echo $result["name"];
            //$a=10;
            if(true){
            // output data of each row
                    ?><div class="name" style="font-family: century gothic"><i class="fa fa-user-circle-o"></i>&nbsp <?php echo $to ;?></div><?php
                    while($row = mysqli_fetch_assoc($result_set)) {
                        ?><div class="text" style="font-family: century gothic">
                        <?php    echo "<span class='usernameClass'>"  .'</span>'."<br>"
                         ?><i class="   fa fa-star"> &nbsp</i><?php  echo $row["review"]."<br>"."<br>"?><?php
                          ?><div class="text2" style="font-family:Century Gothic;"><i class="fa fa-user-circle-o"> &nbsp<?php  echo $row["By"]?></i></div>
                          <div style="font-size: 15px; display:inline;"><i class="fa fa-calendar" >&nbsp &nbsp</i><?php echo $row["date"]  ?></div><?php
                       ?></div><?php
                        ?><div class="hr"><hr></div><?php

                
                    }
                } else {
                    echo "No Job Posts Yet!";
                }
             echo"<button onclick=\"document.getElementById('modal-wrapper').style.display='block'\" style=\"width:150px; background-color:light blue;margin-top:20px; margin-left:260px;\">
            Add Review</button>";
            ?>
        </div>
        </div>
    </div>
    

   <script >
       function func(){
            alert("Call to Phone number of the Employer");
        }

        function confirmLogout() {
            if (confirm("Do you want to  Logout!")) {
                location.replace("http://localhost/myWeb/logout.php");
            }
        }
   </script>





<?php 

$_SESSION["By"] = $by;
$_SESSION["To"] = $to;?>

<div id="modal-wrapper" class="modal">
  
  <form class="modal-content animate" action="postReview.php?a=2">
        
    
    <div class="imgcontainer">
      <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
      <img src="review.jpg" alt="Avatar" class="avatar">
      <h1 style="text-align:center; ">Add review</h1>
    </div>


    <div class="container2">
      <input type="text" placeholder="Type here" name="review" required="true">
             
      
      <button  style="color: black">Post Review</button>
      
    </div>
    
  </form>
  
</div>









<style>
*{margin:0px; padding:0px; font-family:Helvetica, Arial, sans-serif;}

/* Full-width input fields */
input[type=text] {
    width: 90%;
    height:55%;
    padding: 12px 20px;
    margin: 8px 26px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
	font-size:16px;
    background-color: transparent;
    
}

/* Set a style for all buttons */
button {
    background-color:rgb(67, 54, 122);
    color: white;
    padding: 10px 20px;
    margin: 10px 30px 5px 180px;
    border: none;
    cursor: pointer;
    width: 40%;
	font-size:20px;
    background-color: transparent;
    border:1px solid white;
}
button:hover {
    background-color: dodgerblue;
    border:none;


}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 0 0;
    position: relative;
    height:30%;
   

}
.avatar {
    width: 100px;
	height:100px;
    border-radius: 50%;
  
}

/* The Modal (background) */
.modal {
	display:none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0%;
    width: 100%;
    height: 100%;
    overflow: auto;
    border:2px bold black;
    background-color: rgba(0,0,0,0.4);
    

}
.container2{
    margin:55px 0px 0px 0px;
    height:50%;


}
/* Modal Content Box */
.modal-content {
    background-color: #fefefe;
    margin: 4% auto 15% auto;
    border: 1px solid #888;
    width: 40%;
    height:50%; 
    padding-bottom: 30px;
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}
.close:hover,.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    animation: zoom 0.6s
}
@keyframes zoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}
@keyframes zoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}
</style>



<script>
// If user clicks anywhere outside of the modal, Modal will close

var modal = document.getElementById('modal-wrapper');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>