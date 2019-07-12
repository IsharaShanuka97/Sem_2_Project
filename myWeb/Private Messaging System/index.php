<?php
    session_start();
    if(isset($_SESSION['username'])){
        //echo $_SESSION['username'];
        
    }else{
        header ("location:login.php");
    }
    if(isset($_GET['name'])){
        $senderName = $_GET['name'];
    }
    
    
    $ProfileName=$_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="subfile/style.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
     <link rel="stylesheet"
          href= 
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Messenger</title>
</head>
<body>
    <div class="header">
  <div class="header-right">
    
    <a id = "idProfileName"  href="" style="font-size:24px; font-family: sans-serif;" ><i class="fa fa-user-circle" style="font-size:24px"></i>&nbsp<?php echo $ProfileName ?></a>
    <div class="navBar">
        <a class="" href="http://localhost/Tutorial/myWeb/mysql/home.php"><i class="fa fa-home"></i>&nbsp Home</a>
        <a class="active" href="http://localhost/Tutorial/myWeb/postfeed.php"> <i class="fa fa-th-large"></i>&nbsp PostFeed</a>
        <a class="#contact" href="http://localhost/Tutorial/myWeb/ContactFrom_v15/index.php"><i class="fa fa-bullhorn"></i>&nbsp Contact Us</a>
        <a href="http://localhost/Tutorial/myWeb/about.php"><i class="fa fa-address-book-o"></i>&nbsp  About Us</a>
        <a onclick="confirmLogout();"><i class="fa fa-power-off" style="font-size:23px"></i></a>
    </div>
    </div>
</div>
    <div class="verticalMenu" style="font-size: 30px;">
        <a href="http://localhost/Tutorial/myWeb/postfeed.php" > <i class="fa fa-th-large"></i>&nbsp PostFeed</a>
        <a href="http://localhost/Tutorial/myWeb/myposts.php" ><i class="fa fa-tag"></i>&nbsp My Posts</a>
        <a href="http://localhost/Tutorial/myWeb/post.php"><i class="fa fa-plus-circle"></i>&nbsp Post a Job</a>
        <a href="http://localhost/Tutorial/myWeb/accountinfo.php"><i class="fa fa-user-circle"></i>&nbsp Account Info</a>
        <a href="http://localhost/Tutorial/myWeb/Private Messaging System/index.php" class="active"><i class="fa fa-comments-o"></i>&nbsp  Messenger</a>
    </div>
    <?php require_once('subfile/newmessage.php')?>
    <div id='container'>
        <div id='menu'>
            <i class="fa fa-close" onclick='location.href = "http://localhost/Tutorial/myWeb/postfeed.php"' style="border-radius:100%;float:right; cursor:pointer;" ></i>
            <?php 
            echo $_SESSION['username'];
            //echo '<a style="float:right; color:white; margin-right:7px;" href="logout.php">Logout</a>';
            ?> 
            
        </div>
        <div id="leftCol">
            <?php require_once("subfile/leftcol.php")?>
        </div>
        <div id="rightCol">
            <?php require_once('subfile/rightcol.php')?>
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

<script>
    var senderName = "<?php echo $senderName?>";
    if(senderName!=""){
        document.getElementById('username').value = senderName;
        checkInDb();
        document.getElementById('newMessage').style.display = "block";
    }

    
    
</script>
</html>

<style type="text/css">
    .verticalMenu{
    width: 290px; /* Set a width if you like */
    float: left;
    margin-top: 100px;
    position: fixed;
  }
  
  .verticalMenu a {
    background-color: #eee; /* Grey background color */
    color: black; /* Black text color */
    display: block; /* Make the links appear below each other */
    padding: 12px; /* Add some padding */
    text-decoration: none; /* Remove underline from links */
    font-family: sans-serif;
    font-size: 16px;
    
  }
  
  .verticalMenu a:hover {
    background-color: #ccc; /* Dark grey background on mouse-over */
  }
  
  .verticalMenu a.active {
    background-color: dodgerblue; /* Add a green color to the "active/current" link */
    color: white;
  }
  
</style>