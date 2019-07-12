<?php
session_start();
require_once('connection.php');
$id=$_GET["id"];
$name=$_SESSION["loginUser"];
$sql = "DELETE FROM post WHERE id='$id' and name='$name'";


if ($conn->query($sql) === TRUE) {
	echo "<script> window.location.href='postDeletedSuccess.php'</script>";
} else {
    echo "Error deleting record: Post Id Or Name is Incorrect" . $conn->error;
}

$conn->close();
?>