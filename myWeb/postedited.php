<?php 
session_start();
require_once('connection.php');
require_once('loginrestrict.php');
$id=$_POST["id"];
$email=$_POST["email"];
$mnum=$_POST["mnum"];
$job=$_POST["job"];
$pay=$_POST["pay"];
$loc=$_POST["location"];
$details=$_POST["details"];
$sql = "UPDATE post SET email='$email',mnum='$mnum',Job='$job',Pay='$pay',location='$loc',details='$details' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Edit Successful!');
	window.location.href='myposts.php'</script>";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
 ?>