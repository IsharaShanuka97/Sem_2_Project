<?php
session_start();
require_once('connection.php');
require_once('loginrestrict.php');

$profileName =  $_SESSION['loginUser'];

$sql = "SELECT name, email, phonenumber FROM usertable where name = '$profileName'";
$result = $conn->query($sql);


$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="accountinfoCSS.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
     <link rel="stylesheet"
          href= 
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <div class="header">
  <div class="header-right">
    
    <a  id = "idProfileName"  href="http://localhost/Tutorial/myWeb/accountinfo.php" style="font-size:24px; font-family: sans-serif;" ><i class="fa fa-user-circle" style="font-size:24px"></i>&nbsp<?php echo $profileName ?></a>
    <div class="navBar">
        <a class="" href="http://localhost/Tutorial/myWeb/mysql/home.php"><i class="fa fa-home"></i>&nbsp Home</a>
        <a class="active" href="http://localhost/Tutorial/myWeb/postfeed.php"> <i class="fa fa-th-large"></i>&nbsp PostFeed</a>
        <a class="#contact" href="http://localhost/Tutorial/myWeb/ContactFrom_v15/index.php"><i class="fa fa-bullhorn"></i>&nbsp Contact Us</a>
        <a href="http://localhost/Tutorial/myWeb/about.php"><i class="fa fa-address-book-o"></i>&nbsp  About Us</a>
        <a onclick="confirmLogout();"><i class="fa fa-power-off" style="font-size:23px"></i></a>
    </div>
    </div>
</div>
    <div class="searchContainer">
        <form action="postSearch.php" method="POST">
            <input type="text" placeholder="Search..." name="search" required>
            <button type="submit"><i class="fa fa-search" style="font-size:30px; color:black;"></i></button>
        </form>
    </div>
    <div class="verticalMenu">
        <a href="http://localhost/Tutorial/myWeb/postfeed.php" > <i class="fa fa-th-large"></i>&nbsp PostFeed</a>
        <a href="http://localhost/Tutorial/myWeb/myposts.php" ><i class="fa fa-tag"></i>&nbsp My Posts</a>
        <a href="http://localhost/Tutorial/myWeb/post.php"><i class="fa fa-plus-circle"></i>&nbsp Post a Job</a>
        <a href="http://localhost/Tutorial/myWeb/accountinfo.php" class="active"><i class="fa fa-user-circle"></i>&nbsp Account Info</a>
        <a href="http://localhost/Tutorial/myWeb/Private Messaging System/index.php"><i class="fa fa-comments-o"></i>&nbsp  Messenger</a>
    </div>
    <div class='container'>
            <div class=leftCol>
                <div class='profileImage'>
                    <img src="images/userIconPosts.png" alt="" height="200px" width="200px"> <br>
                </div>
                <div class='username'> <?php echo $profileName?> </div>
                <button onclick="confirmLogout();" id='signOutBtn'>Sign Out</button>
                <div class="profileDetails">
                    <?php
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            ?>
                            <i class="fa fa-envelope-o"></i> &nbsp
                            <?php
                            $name = $row["name"];
                            $email = $row["email"];
                            echo  $row["email"];
                            ?>
                            <hr> 
                            <i class="fa fa-phone"></i>&nbsp
                            <?php 
                            $phoneNumber = $row["phonenumber"];
                            echo $row["phonenumber"];
                        }
                    } else {
                        echo "0 results";
                    }
                    ?>
                    <hr>
                </div> 
                <div class="changePassword" style="color: white;"> <a href="" onclick="document.getElementById('changePasswordPrompt').style.display='block';return false;"><i class="fa fa-wrench"></i>&nbsp  Change Password? </a>  </div> 
                <br>
                <div class='deleteAccount'> <a href="" onclick="document.getElementById('deleteAccountPrompt').style.display='block';return false;" > <b><i class="fa fa-trash"></i>&nbsp Delete Account? </b> </a> </div>
            </div>
        <div class=rightCol>
            <h1><i class="fa fa-user-circle"></i>&nbsp My Profile</h1> <br>
            <form action="updateprofile.php" method="POST">
                <label class='inputLabel' for="">Name :</label> <br>
                <input class='profileInput' id='name' type="text" name="name" id="name" value="<?php echo $name;?>" required > <br> <br>
                <label class='inputLabel'  for="">Email :</label> <br>
                <input class='profileInput' id='email' type="text" name = 'email' id='email' value="<?php echo $email;?>" required> <br> <br>
                <label class='inputLabel'  for="">Phone Number :</label> <br>
                <input class='profileInput' id='phoneNumber' type="text" name='phoneNumber' id='phoneNumber' value="<?php echo $phoneNumber;?>" required> <br> <br>
                <label class='inputLabel'  for="">Password :</label> <br>
                <input class='profileInput' id='phoneNumber' type="password" name='password' id='password' placeholder='Password...' required> <br> 
                <button type="submit" class="button" style="vertical-align:middle"><span><i class="

    fa fa-cogs"></i>&nbsp Save Profile Details &#8594;</span></button>

            </form>

        </div>
        <div id="changePasswordPrompt" class='changePasswordPrompt'>
            <h2 align="center">Change Password <img src="images/closeIcon.jpg" onclick="document.getElementById('changePasswordPrompt').style.display='none';return false;"   alt="" width="20px" height="20px"></h2> 
            <form action="changepassword.php" method="post">
                <input type="password" placeholder='Current password' name='currentPassword' required> <br>
                <input type="password" placeholder='New Password' name='newPassword' minlength="6" required> <br>
                <input type="password" placeholder='Confirm New Password' name='confirmNewPassword' required> <br> <br>
                <button class='form-submit-button' type="submit"><i class="fa fa-paper-plane-o"></i>&nbsp Submit</button>
            </form>
        </div>

        <div id='deleteAccountPrompt' class='deleteAccountPrompt'>
            <h3><i class="fa fa-warning" style="font-size: 30px"></i>&nbsp Are you sure you want to deactivate  <br> your Hand to Hand Account?  </h3>
            <ul>
                <li>Deactivate will be immediate</li>
                <li>You won't be able to log into Hand to Hand anymore</li>
                <li>You'll lose access to all your Hand to Hand documents and conversations</li>
                <li>Only administrator will be able to restore your access</li>
            </ul>
            <h4>To confirm, please type your password</h4>
            <form class="deleteAccountForm" action="deleteaccount.php" method="post">
                <input name='password' type="password" required>
                <hr>
                <button id='deactivateBtn' type="submit">Deactivate</button>
            </form> 
                <button id='cancelBtn' onclick="document.getElementById('deleteAccountPrompt').style.display='none';return false;">Cancel</button>
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

